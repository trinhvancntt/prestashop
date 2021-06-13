<?php
/**
 * Module to show products combinations in product lists with "add to cart" button
 * 
 * @author    Singleton software <info@singleton-software.com>
 * @copyright 2018 Singleton software
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

require_once dirname(dirname(dirname(__FILE__))) . '/classes/CombinationsInCatalogModel.php';

class CombinationsInCatalogProductCombinationsModuleFrontController extends ModuleFrontController
{
	public function __construct() {
		parent::__construct();
	}
	
	public function initContent() {
	    parent::initContent();
	}
	
	public function displayAjaxGetProductCombinations() {
	    $combinationsInCatalogModel = new CombinationsInCatalogModel();
	    $idProductAttribute = CombinationsInCatalogModel::getProductAttributesID((int)Tools::getValue('id_product'), Tools::getValue('group'));
	    $combinationsInCatalogConfigData = Tools::jsonDecode(Configuration::get('combinationsincatalog'), true);
	    if ((int)$combinationsInCatalogConfigData['combinations_display_type'] == 0) {
	    	$productVariants = CombinationsInCatalogModel::getProductCombinationsSeparatelly((int)Tools::getValue('id_product'), (int)$idProductAttribute);
	    } else {
	    	$productVariants = CombinationsInCatalogModel::getProductCombinationsList((int)Tools::getValue('id_product'), (bool)$combinationsInCatalogConfigData['show_out_of_stock'], (int)$idProductAttribute);
	    }
	    $productObject = new Product((int)Tools::getValue('id_product'));
	    $productObject->loadStockData();
	    $product = (array)$productObject;
	    $product['id_product'] = (int)Tools::getValue('id_product');
	    $product['id_product_attribute'] = $this->getProductAttributeID($productObject, (int)$idProductAttribute);
	    $product['out_of_stock'] = (int)$product['out_of_stock'];
	    $product['link_rewrite'] = $product['link_rewrite'][(int)$this->context->language->id];
	    $product['minimal_quantity'] = $combinationsInCatalogModel->getMinimalQuantity($product);
	    $product['quantity_wanted'] = $combinationsInCatalogModel->getReqQuantity($product);
	    $product['quantity'] = Product::getQuantity(
            (int)Tools::getValue('id_product'),
            (int)$idProductAttribute,
            isset($product['cache_is_pack']) ? $product['cache_is_pack'] : null
        );
	    
	    $combinationImages = array();
	    $combinationImageByID = $this->getCombinationImages((int)$idProductAttribute, (int)$this->context->language->id);
	    if ($combinationImageByID !== false && count($combinationImageByID) > 0) {
	    	if (version_compare(_PS_VERSION_, '1.7', '>')) {
	    		$largeImageFormattedName = ImageType::getFormattedName('large');
	    		$homeImageFormattedName =ImageType::getFormattedName('home');
	    	} else {
	    		$largeImageFormattedName = ImageType::getFormatedName('large');
	    		$homeImageFormattedName =ImageType::getFormatedName('home');
	    	}
	        $combinationImages['large'] = $this->context->link->getImageLink($product['link_rewrite'], $combinationImageByID['id_image'], $largeImageFormattedName);
	        $combinationImages['medium'] = $this->context->link->getImageLink($product['link_rewrite'], $combinationImageByID['id_image'], $homeImageFormattedName);
	    }
	    
	    $addToCartUrl = null;
	    if ($this->canDisplayAddToCartButton($product)) {
	        $addToCartParams = array(
                'add' => 1,
                'id_product' => (int)Tools::getValue('id_product'),
                'id_product_attribute' => (int)$idProductAttribute
	        );
	        $addToCartUrl = Context::getContext()->link->getPageLink('cart', true, null, $addToCartParams, false);
	    }

	    $productProperties = Product::getProductProperties($this->context->language->id, $product, $this->context);
	    
	    $includeTaxes = !Product::getTaxCalculationMethod(Context::getContext()->cookie->id_customer);
	    if (!Configuration::get('PS_TAX')) {
	        $includeTaxes = false;
	    }
	    $prices = array();
	    if ($includeTaxes) {
	        $price = $regular_price = $productProperties['price'];
	    } else {
	        $price = $regular_price = $productProperties['price_tax_exc'];
	    }
	    if ($productProperties['specific_prices']) {
	        $prices['has_discount'] = (0 != $productProperties['reduction']);
	        $prices['discount_type'] = $productProperties['specific_prices']['reduction_type'];
	        $prices['discount_percentage'] = -round(100 * $productProperties['specific_prices']['reduction']).'%';
	        $prices['discount_percentage_absolute'] = round(100 * $productProperties['specific_prices']['reduction']).'%';
	        $prices['discount_amount'] = Tools::displayPrice($productProperties['reduction']);
	        $regular_price = $productProperties['price_without_reduction'];
	    }
	    $prices['price_amount'] = $price;
	    $prices['price'] = Tools::displayPrice($price);
	    $prices['regular_price_amount'] = $regular_price;
	    $prices['regular_price'] = Tools::displayPrice($regular_price);
	    
        die(Tools::jsonEncode(array(
            'errors' => false,
        	'productVariants' => Context::getContext()->smarty->createTemplate(_PS_MODULE_DIR_.'combinationsincatalog/views/templates/front/'.(version_compare(_PS_VERSION_, '1.7', '>') ? 'ps17' : 'ps16').'/product-'.((int)$combinationsInCatalogConfigData['combinations_display_type'] == 0 ? 'variants' : 'combinations').'.tpl', array('productVariants' => $productVariants, 'combinationsInCatalogConfigData' => $combinationsInCatalogConfigData, 'col_img_dir' => _PS_COL_IMG_DIR_, 'img_col_dir'   => _THEME_COL_DIR_))->fetch(),
            'addToCartUrl' => $addToCartUrl,
            'quantity_wanted' => $product['quantity_wanted'],
            'minimal_quantity' => $product['minimal_quantity'],
            'images' => $combinationImages,
            'prices' => $prices,
            //'product_link' => $this->context->link->getProductLink($productObject, null, null, null, null, null, $product['id_product_attribute']), - pokial niwkto potrebuje presmerovat na detail zo zvolenou kombinaciou
            'id_product_attribute'=> $product['id_product_attribute']
        )));
	}
	
	private function canDisplayAddToCartButton($product) {
	    $customizationRequired = false;
	    if (isset($product['customizable']) && $product['customizable'] && Customization::isFeatureActive()) {
	        if (count(Product::getRequiredCustomizableFieldsStatic((int)$product['id_product']))) {
	            $customizationRequired = true;
	        }
	    }
	    if (($product['customizable'] == 2 || !empty($customizationRequired))) {
	        $canEnable = false;
	        $customizations = $this->getCustomization($product);
            if (isset($customizations)) {
	            $canEnable = true;
	            foreach ($customizations['fields'] as $field) {
	                if ($field['required'] && !$field['is_customized']) {
	                    $canEnable = false;
	                }
	            }
	        }
	    } else {
	        $canEnable = true;
	    }
	    $canEnable = $canEnable && (bool)$product['available_for_order'];
	    if ((bool)Configuration::get('PS_STOCK_MANAGEMENT') && !Product::isAvailableWhenOutOfStock($product['out_of_stock']) && isset($product['quantity_wanted']) &&
            ($product['quantity'] <= 0 || $product['quantity'] < $product['quantity_wanted'])) {
                $canEnable = false;
            }
        return $canEnable;
	}
	
	private function getCustomization($product) {
	    $customizationData = array(
            'fields' => array(),
	    );
	    if ($product['customizable']) {
	        $customizedData = array();
	        $alreadyCustomized = $this->context->cart->getProductCustomization(
                $product['id_product'],
                null,
                true
            );
	        foreach ($alreadyCustomized as $customization) {
	            $customizedData[$customization['index']] = $customization;
	        }
	        $productObject = new Product($product['id_product']);
	        $customizationFields = $productObject->getCustomizationFields($this->context->language->id);
	        if (is_array($customizationFields)) {
	            foreach ($customizationFields as $customizationField) {
	                $key = $customizationField['id_customization_field'];
	                $field = array();
	                $field['required'] = $customizationField['required'];
	                if (array_key_exists($key, $customizedData)) {
	                    $field['is_customized'] = true;
	                } else {
	                    $field['is_customized'] = false;
	                }
	                $customizationData['fields'][] = $field;
	            }
	        }
	    }
	    return $customizationData;
	}
	
	private function getProductAttributeID($product, $idProductAttribute) {
	    if (!Configuration::get('PS_DISP_UNAVAILABLE_ATTR')) {
	        $productAttributes = array_filter(
                $product->getAttributeCombinations(),
                function ($elem) {
                    return $elem['quantity'] > 0;
                }
	        );
	        $productAttribute = array_filter(
                $productAttributes,
                function ($elem) use ($idProductAttribute) {
                    return $elem['id_product_attribute'] == $idProductAttribute;
                }
            );
	        if (empty($productAttribute) && !empty($productAttributes)) {
	            return (int)array_shift($productAttributes)['id_product_attribute'];
	        }
	    }
	    return $idProductAttribute;
	}
	
	private function getCombinationImages($idProductAttribute, $idLang) {
		if (!Combination::isFeatureActive() || !$idProductAttribute) {
			return false;
		}
	
		$result = Db::getInstance()->executeS('
			SELECT pai.`id_image`, pai.`id_product_attribute`, il.`legend`
			FROM `'._DB_PREFIX_.'product_attribute_image` pai
			LEFT JOIN `'._DB_PREFIX_.'image_lang` il ON (il.`id_image` = pai.`id_image`)
			LEFT JOIN `'._DB_PREFIX_.'image` i ON (i.`id_image` = pai.`id_image`)
			WHERE pai.`id_product_attribute` = '.(int)$idProductAttribute.' AND il.`id_lang` = '.(int)$idLang.' ORDER by i.`position` LIMIT 1'
				);
	
		if (!$result) {
			return false;
		}
	
		return $result[0];
	}
}