<?php
/**
 * Module to show products combinations in product lists with "add to cart" button
 * 
 * @author    Singleton software <info@singleton-software.com>
 * @copyright 2018 Singleton software
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

if (!defined('_PS_VERSION_'))
	exit;

require_once dirname(__FILE__) . '/classes/CombinationsInCatalogModel.php';
	
class CombinationsInCatalog extends Module 
{
	public function __construct() {
		$this->name = 'combinationsincatalog';
		$this->tab = 'front_office_features';
		$this->version = '1.5.0';
		$this->author = 'Singleton software';
		$this->module_key = 'a569beca9f768498450ca998bf54d51f';
		$this->author_address = '0x82BBBf54B369bf4dB2704ed3b97c85294950231C';
		$this->need_instance = 0;
		$this->ps_versions_compliancy = array('min' => '1.6.0.0', 'max' => _PS_VERSION_);
		$this->bootstrap = true;
		parent::__construct();
		$this->displayName = $this->l('Combinations in products list');
		$this->description = $this->l('Module to show products combinations in product lists with "add to cart" button');
		$this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
		if (!Configuration::get($this->name))      
			$this->warning = $this->l('No name provided');
	}
	
	public function install() {
		$combinationsInCatalogData = $this->initCombinationsInCatalogData();
		if (!parent::install() || !Configuration::updateGlobalValue($this->name, Tools::jsonEncode($combinationsInCatalogData)) || !$this->registerHook('displayHeader') || !$this->registerHook('displayProductPriceBlock') || !$this->createCombinationsInCatalogTab())
			return false;
		return true;
	}
	
	public function uninstall() {
		return (parent::uninstall() && Configuration::deleteByName($this->name) && $this->unregisterHook('displayHeader') && $this->unregisterHook('displayProductPriceBlock') && $this->removeCombinationsInCatalogTab());
	}
	
	public function hookDisplayHeader($params) {
	    if($this->displayCheck()) {
			if (version_compare(_PS_VERSION_, '1.7', '>')) {
				$this->context->controller->registerStylesheet('modules-combinationsincatalog-style', 'modules/'.$this->name.'/views/css/ps17/style.css', array('media' => 'all', 'priority' => 150));
				$this->context->controller->registerJavascript('modules-combinationsincatalog-global', 'modules/'.$this->name.'/views/js/ps17/global.js', array('position' => 'bottom', 'priority' => 150));
			} else {
				$this->context->controller->addCss($this->_path.'views/css/ps16/style.css');
				$this->context->controller->addJs($this->_path.'views/js/ps16/global.js');
			}
			$this->smarty->assign(
				array(
					'combinationsInCatalogData' => Configuration::get($this->name),
					'cartControllerLink' => $this->context->link->getPageLink('cart'),
					'productCombinationsControllerLink' => $this->context->link->getModuleLink('combinationsincatalog', 'ProductCombinations'),
					'advancedFormFields' => Tools::jsonEncode($this->getAdvancedFormFields()),
					'greaterThan1750' => version_compare(_PS_VERSION_, '1.7.5', '>='),
					'idLang' => $this->context->language->id
				)
			);
			return $this->display(__FILE__, 'views/templates/hook/'.(version_compare(_PS_VERSION_, '1.7', '>') ? 'ps17' : 'ps16').'/global.tpl');
		}
	}
	
	public function hookDisplayProductPriceBlock($params) {
	    // od verzie ps1750 pride v $params['product'] objekt miesto pola. Preto treba tento pripad osetrit podmienkov "is_array($params['product']) || version_compare(_PS_VERSION_, '1.7.5', '>=')"
	    if ($this->displayCheck() && $params['type'] == 'weight' && (is_array($params['product']) || version_compare(_PS_VERSION_, '1.7.5', '>=')) && (!isset($params['hook_origin']) || !version_compare(_PS_VERSION_, '1.7', '>'))) {
			$productsVariants = array();
			$productsVariantsJson = array();
			$combinationsInCatalogConfigData = Tools::jsonDecode(Configuration::get($this->name), true);
			if ((int)$combinationsInCatalogConfigData['combinations_display_type'] == 0) {
				$productsVariants = CombinationsInCatalogModel::getProductCombinationsSeparatelly((int)$params['product']['id_product'], (int)$params['product']['id_product_attribute']);
			} else {
				$productsVariants = CombinationsInCatalogModel::getProductCombinationsList((int)$params['product']['id_product'], (bool)$combinationsInCatalogConfigData['show_out_of_stock']);
				$productsVariantsJson = Tools::jsonEncode($productsVariants);
			}
			$allowToShowButton = false;
			$quantityWanted = 1;
			$minimalQuantity = 1;
			if ((bool)$combinationsInCatalogConfigData['display_add_to_cart'] && version_compare(_PS_VERSION_, '1.7', '>')) {
				$isCatalogMode = Configuration::isCatalogMode();
				if ($params['product']['available_for_order'] && $params['product']['customizable'] != 2 && !$isCatalogMode && (!Tools::getIsset($params['product']['customization_required']) || !$params['product']['customization_required']) && ($params['product']['allow_oosp'] || $params['product']['quantity'] > 0)) {
					$allowToShowButton = true;
				}
				$combinationsInCatalogModel = new CombinationsInCatalogModel();
				$minimalQuantity = $combinationsInCatalogModel->getMinimalQuantity($params['product']);
				$params['product']['minimal_quantity'] = $minimalQuantity; 
				$quantityWanted = $combinationsInCatalogModel->getReqQuantity($params['product']);
			}
			$this->smarty->assign(
				array(
					'combinationsInCatalogConfigData' => $combinationsInCatalogConfigData,
					'productID' => (int)$params['product']['id_product'],
					'productVariants' => $productsVariants,
					'productsVariantsJson' => $productsVariantsJson,
					'quantityWanted' => $quantityWanted,
					'minimalQuantity' => $minimalQuantity,
					'allowToShowButton' => $allowToShowButton,
					'staticToken' => Tools::getToken(false),
					'col_img_dir' => _PS_COL_IMG_DIR_,
					'idLang' => $this->context->language->id
				)
			);
			return $this->display(__FILE__, 'views/templates/hook/'.(version_compare(_PS_VERSION_, '1.7', '>') ? 'ps17' : 'ps16').'/combinationsAndAtcButton.tpl');
	    }
	}
	
	public function getContent() {
	    $settingsUpdated = '';
	    if (Tools::isSubmit('submit'.$this->name)) {
	        $updateCombinationsInCatalogData = array();
	        foreach($this->getFormFields() as $key => $value) {
	        	if (isset($value['lang']) && $value['lang'] === true) {
	        		foreach (Language::getLanguages() as $langKey => $langValue) {
	        			$updateCombinationsInCatalogData[$value['name']][$langValue['id_lang']] = Tools::getValue($value['name'].'_'.$langValue['id_lang']);
	        		}
	        	} else {
	        		$updateCombinationsInCatalogData[$value['name']] = Tools::getValue($value['name']);
	        	}
	        }
	        Configuration::updateValue($this->name, Tools::jsonEncode($updateCombinationsInCatalogData));
	        $settingsUpdated .= $this->displayConfirmation($this->l('Settings updated'));
	    }

        $useSSL = ((isset($this->ssl) && $this->ssl && Configuration::get('PS_SSL_ENABLED')) || Tools::usingSecureMode()) ? true : false;
        $protocol_content = ($useSSL) ? 'https://' : 'http://';
        $linkTFAQ = $protocol_content.Tools::getHttpHost().__PS_BASE_URI__.'modules/combinationsincatalog/views/documents/FAQ.pdf';

	    $this->smarty->assign(
            array(
                'moduleDir' => _MODULE_DIR_,
                'translate' => Tools::jsonEncode($this->getTranslates()),
                'ps17' => version_compare(_PS_VERSION_, '1.7', '>'),
                'advancedFormFields' => Tools::jsonEncode($this->getAdvancedFormFields())
            )
        );
	    return $settingsUpdated.$this->displayWarning($this->l('Do you have problem with displaying combinations in your custom theme?').' <a target="_blank" href="'.$linkTFAQ.'">'.$this->l('Click here for').' <strong>FAQ</strong></a>').$this->display(__FILE__,'BOconfig.tpl').$this->displayForm();
	}
	
	public function displayForm() {
	    $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
	    $helper = new Helper();
	    $fields_form = array();
	    $fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('Module Settings'),
            ),
            'input' => $this->getFormFields(),
            'submit' => array(
                'title' => $this->l('Save'),
                'name' => 'submit'.$this->name,
            )
	    );
	    $helper = new HelperForm();
	    $helper->module = $this;
	    $helper->name_controller = $this->name;
	    $helper->token = Tools::getAdminTokenLite('AdminModules');
	    $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
	    $helper->default_form_language = $default_lang;
	    $helper->allow_employee_form_lang = $default_lang;
	    $helper->title = $this->displayName;
	    $helper->show_toolbar = false;
	    $helper->toolbar_scroll = false;
	    $helper->submit_action = 'submit'.$this->name;
	    $helper->tpl_vars = array(
            'fields_value' => Tools::jsonDecode(Configuration::get($this->name), true),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
	    );
	    return $helper->generateForm($fields_form);
	}
	
	private function displayCheck() {
        if (version_compare(_PS_VERSION_, '1.7', '>') && !method_exists($this->context->controller, 'getPageName')) {
            return false;
        }
		$pageName = $this->getCurrentPageName();
		$combinationsInCatalogConfigData = Tools::jsonDecode(Configuration::get($this->name), true);
		if ((((bool)$combinationsInCatalogConfigData['show_in_popular'] && $pageName == 'index') ||
			((bool)$combinationsInCatalogConfigData['show_in_category'] && $pageName == 'category') ||
			((bool)$combinationsInCatalogConfigData['show_in_category'] && $pageName == 'manufacturer') ||
			((bool)$combinationsInCatalogConfigData['show_in_category'] && $pageName == 'supplier') ||
			((bool)$combinationsInCatalogConfigData['show_in_category'] && $pageName == 'new-products') ||
			((bool)$combinationsInCatalogConfigData['show_in_category'] && $pageName == 'prices-drop') ||
			((bool)$combinationsInCatalogConfigData['show_in_category'] && $pageName == 'best-sales') ||
			((bool)$combinationsInCatalogConfigData['show_in_category'] && $pageName == 'products-comparison') ||
			((bool)$combinationsInCatalogConfigData['show_in_category'] && $pageName == 'product' && !version_compare(_PS_VERSION_, '1.7', '>')) ||
			((bool)$combinationsInCatalogConfigData['show_in_search'] && $pageName == 'search') ||
			((bool)$combinationsInCatalogConfigData['show_in_related'] && $pageName == 'product' && version_compare(_PS_VERSION_, '1.7', '>')))) {
				return true;
			}
		return false;
	}
	
	private function getCurrentPageName() {
	    if (version_compare(_PS_VERSION_, '1.7', '>')) {
	        return $this->context->controller->getPageName();
	    } else {
	        return $this->smarty->getTemplateVars('page_name');
	    }
	}
	
	private function getFormFields() {
	    $mainFormFields = array(
            array(
                'type'		=>'switch',
                'label'     => $this->l('Show combinations on home page products:'),
                'desc'      => $this->l('You can display products combinations on home page'),
                'name'      => 'show_in_popular',
                'required'  => false,
                'class'     => 'showInPopular',
                'is_bool'   => true,
                'values'    => array(
                    array(
                        'id'    => 'show_in_popular_on',
                        'value' => 1,
                        'label' => $this->l('Yes')
                    ),
                    array(
                        'id'    => 'show_in_popular_off',
                        'value' => 0,
                        'label' => $this->l('No')
                    )
                ),
                'init_value' => '0'
            ),
            array(
                'type'		=>'switch',
                'label'     => $this->l('Show combinations in products categories:'),
                'desc'      => $this->l('You can display products combinations in categories of products'),
                'name'      => 'show_in_category',
                'required'  => false,
                'class'     => 'showInCategory',
                'is_bool'   => true,
                'values'    => array(
                    array(
                        'id'    => 'show_in_category_on',
                        'value' => 1,
                        'label' => $this->l('Yes')
                    ),
                    array(
                        'id'    => 'show_in_category_off',
                        'value' => 0,
                        'label' => $this->l('No')
                    )
                ),
                'init_value' => '0'
            ),
            array(
                'type'		=>'switch',
                'label'     => $this->l('Show combinations in search results:'),
                'desc'      => $this->l('You can display products combinations in product list of search result'),
                'name'      => 'show_in_search',
                'required'  => false,
                'class'     => 'showInSearch',
                'is_bool'   => true,
                'values'    => array(
                    array(
                        'id'    => 'show_in_search_on',
                        'value' => 1,
                        'label' => $this->l('Yes')
                    ),
                    array(
                        'id'    => 'show_in_search_off',
                        'value' => 0,
                        'label' => $this->l('No')
                    )
                ),
                'init_value' => '0'
            ),
            array(
                'type'		=> (bool)version_compare(_PS_VERSION_, '1.7', '>') ? 'switch' : 'hidden',
                'label'     => $this->l('Show combinations in related products list:'),
                'desc'      => $this->l('You can display products combinations in related products list in product detail'),
                'name'      => 'show_in_related',
                'required'  => false,
                'class'     => 'showInRelated',
                'is_bool'   => true,
                'values'    => array(
                    array(
                        'id'    => 'show_in_related_on',
                        'value' => 1,
                        'label' => $this->l('Yes')
                    ),
                    array(
                        'id'    => 'show_in_related_off',
                        'value' => 0,
                        'label' => $this->l('No')
                    )
                ),
                'init_value' => '0'
            ),
            array(
                'type'		=> (bool)version_compare(_PS_VERSION_, '1.7', '>') ? 'switch' : 'hidden',
                'label'     => $this->l('Display "add to cart" button:'),
                'desc'      => $this->l('You can display "add to cart" button for each product in products list, which will be displayed under the product. If selected combination will be unabled (out of stock, etc), "add to cart" button will be disabled to click'),
                'name'      => 'display_add_to_cart',
                'required'  => false,
                'class'     => 'displayAddToCart',
                'is_bool'   => true,
                'values'    => array(
                    array(
                        'id'    => 'display_add_to_cart_on',
                        'value' => 1,
                        'label' => $this->l('Yes')
                    ),
                    array(
                        'id'    => 'display_add_to_cart_off',
                        'value' => 0,
                        'label' => $this->l('No')
                    )
                ),
                'init_value' => '0'
            ),
            array(
                'type'		=>'switch',
                'label'     => $this->l('Allow to choose quantity of products:'),
                'desc'      => $this->l('You can display quantity to choose for each product, which will be displayed on the left side of "add to cart" button'),
                'name'      => 'show_quantity',
                'required'  => false,
                'class'     => 'showQuantity',
                'is_bool'   => true,
                'values'    => array(
                    array(
                        'id'    => 'show_quantity_on',
                        'value' => 1,
                        'label' => $this->l('Yes')
                    ),
                    array(
                        'id'    => 'show_quantity_off',
                        'value' => 0,
                        'label' => $this->l('No')
                    )
                ),
                'init_value' => '0'
            ),
    		array(
				'type'     => 'text',
				'label'    => $this->l('Button text if combination is out of stock:'),
				'name'     => 'button_out_of_stock',
				'class'    => 'buttonOutOfStock',
				'required' => false,
				'lang'		=> true,
				'desc'     => $this->l('You can set you own text inside of "add to cart" button, if selected combination is out of stock. You can set this text in each language.'),
				'init_value' => 'Out of stock'
    		),
            array(
                'type'		=> 'radio',
                'label'     => $this->l('Combinations display type:'),
                'desc'      => $this->l('You can choose if all product combinations will be displayed in dropdown - options in this dropdown will be for example "Color - Orange, Size - S" or "Color - Green, Size - M". Next options is display combinations like separatelly attributes to choose, exactly like in product detail'),
                'name'      => 'combinations_display_type',
                'required'  => false,
                'class'     => 'combinationsDisplayType',
                'is_bool'   => false,
                'values'    => array(
                    array(
                        'id'    => 'combinations_display_type_0',
                        'value' => 0,
                        'label' => $this->l('Each combination attribute separatelly')
                    ),
                    array(
                        'id'    => 'combinations_display_type_1',
                        'value' => 1,
                        'label' => $this->l('All combinations together in dropdown')
                    )
                ),
                'init_value' => '0'
            ),
            array(
                'type'		=>'switch',
                'label'     => $this->l('Show attributes labels:'),
                'desc'      => $this->l('You can show or hide attributes labels in combinations section'),
                'name'      => 'show_attributes_labels',
                'required'  => false,
                'class'     => 'showAttributesLabels',
                'is_bool'   => true,
                'values'    => array(
                    array(
                        'id'    => 'show_attributes_labels_on',
                        'value' => 1,
                        'label' => $this->l('Yes')
                    ),
                    array(
                        'id'    => 'show_attributes_labels_off',
                        'value' => 0,
                        'label' => $this->l('No')
                    )
                ),
                'init_value' => '1'
            ),
            array(
                'type'		=>'switch',
                'label'     => $this->l('Show color as label:'),
                'desc'      => $this->l('For all attributes which are type of color, you can choose if this attributes will be displayed as color squares or dropdown with this colors to choose'),
                'name'      => 'show_color_as_labels',
                'required'  => false,
                'class'     => 'showColorAsLabels',
                'is_bool'   => true,
                'values'    => array(
                    array(
                        'id'    => 'show_color_as_labels_on',
                        'value' => 1,
                        'label' => $this->l('Yes')
                    ),
                    array(
                        'id'    => 'show_color_as_labels_off',
                        'value' => 0,
                        'label' => $this->l('No')
                    )
                ),
                'init_value' => '0'
            ),
            array(
                'type'		=>'switch',
                'label'     => $this->l('Show out of stock:'),
                'desc'      => $this->l('You can choose if in combinations dropdown will be displayed also combinations which are not on stock. If you set "Yes" and customer select combination which are not on stock, "add to cart" button will be disabled to click'),
                'name'      => 'show_out_of_stock',
                'required'  => false,
                'class'     => 'showOutOfStock',
                'is_bool'   => true,
                'values'    => array(
                    array(
                        'id'    => 'show_out_of_stock_on',
                        'value' => 1,
                        'label' => $this->l('Yes')
                    ),
                    array(
                        'id'    => 'show_out_of_stock_off',
                        'value' => 0,
                        'label' => $this->l('No')
                    )
                ),
                'init_value' => '1'
            ),
            array(
                'type'		=>'switch',
                'label'     => $this->l('Show prices for combinations:'),
                'desc'      => $this->l('You can choose, if in combinations dropdown will be displayed also price for each combination'),
                'name'      => 'show_price_for_combination',
                'required'  => false,
                'class'     => 'showPriceForCombination',
                'is_bool'   => true,
                'values'    => array(
                    array(
                        'id'    => 'show_price_for_combination_on',
                        'value' => 1,
                        'label' => $this->l('Yes')
                    ),
                    array(
                        'id'    => 'show_price_for_combination_off',
                        'value' => 0,
                        'label' => $this->l('No')
                    )
                ),
                'init_value' => '0'
            ),
            array(
                'type'		=>'switch',
                'label'     => $this->l('Show advanced options:'),
                'desc'      => $this->l('In advanced options, you can modify paths to DOM elements. Please do not modify it if you are not skilled in it'),
                'name'      => 'show_advanced_options',
                'required'  => false,
                'class'     => 'showAdvancedOptions',
                'is_bool'   => true,
                'values'    => array(
                    array(
                        'id'    => 'show_advanced_options_on',
                        'value' => 1,
                        'label' => $this->l('Yes')
                    ),
                    array(
                        'id'    => 'show_advanced_options_off',
                        'value' => 0,
                        'label' => $this->l('No')
                    )
                ),
                'init_value' => '0'
            )
        );
	    return array_merge($mainFormFields, $this->getAdvancedFormFields());
	}
	
	private function getAdvancedFormFields() {
	    if (version_compare(_PS_VERSION_, '1.7', '>')) {
	        return array(
                array(
                    'type'     => 'text',
                    'label'    => $this->l('Product miniature root path:'),
                    'name'     => 'miniature_root_path',
                    'class'    => 'miniatureRootPath',
                    'required' => false,
                    'lang'		=> false,
                    'desc'     => $this->l('You can set path to product miniature root element'),
                    'init_value' => '.product-miniature'
                ),
                array(
                    'type'     => 'text',
                    'label'    => $this->l('Product miniature thumbnail container path:'),
                    'name'     => 'miniature_thumbnail_container_path',
                    'class'    => 'miniatureThumbnailContainerPath',
                    'required' => false,
                    'lang'		=> false,
                    'desc'     => $this->l('You can set path to product miniature thumbnail container element'),
                    'init_value' => '.thumbnail-container'
                ),
                array(
                    'type'     => 'text',
                    'label'    => $this->l('Product miniature thumbnail image path:'),
                    'name'     => 'miniature_thumbnail_image_path',
                    'class'    => 'miniatureThumbnailImagePath',
                    'required' => false,
                    'lang'		=> false,
                    'desc'     => $this->l('You can set path to product miniature thumbnail image element'),
                    'init_value' => '.thumbnail-container img'
                ),
                array(
                    'type'     => 'text',
                    'label'    => $this->l('Product miniature price path:'),
                    'name'     => 'miniature_price_path',
                    'class'    => 'miniaturePricePath',
                    'required' => false,
                    'lang'		=> false,
                    'desc'     => $this->l('You can set path to product miniature price element'),
                    'init_value' => '.price'
                ),
                array(
                    'type'     => 'text',
                    'label'    => $this->l('Product miniature old price path:'),
                    'name'     => 'miniature_old_price_path',
                    'class'    => 'miniatureOldPricePath',
                    'required' => false,
                    'lang'		=> false,
                    'desc'     => $this->l('You can set path to product miniature old price element'),
                    'init_value' => '.regular-price'
                )
	        );
	    } else {
	        return array(
                array(
                    'type'     => 'text',
                    'label'    => $this->l('Product miniature root path:'),
                    'name'     => 'miniature_root_path',
                    'class'    => 'miniatureRootPath',
                    'required' => false,
                    'lang'		=> false,
                    'desc'     => $this->l('You can set path to product miniature root element'),
                    'init_value' => '.product-container'
                ),
                array(
                    'type'     => 'text',
                    'label'    => $this->l('Product miniature thumbnail container path:'),
                    'name'     => 'miniature_thumbnail_image_path',
                    'class'    => 'miniatureThumbnailImagePath',
                    'required' => false,
                    'lang'		=> false,
                    'desc'     => $this->l('You can set path to product miniature thumbnail container element'),
                    'init_value' => '.product-image-container'
                ),
                array(
                    'type'     => 'text',
                    'label'    => $this->l('Product miniature price path:'),
                    'name'     => 'miniature_price_path',
                    'class'    => 'miniaturePricePath',
                    'required' => false,
                    'lang'		=> false,
                    'desc'     => $this->l('You can set path to product miniature price element'),
                    'init_value' => '.price'
                ),
                array(
                    'type'     => 'text',
                    'label'    => $this->l('Product miniature old price path:'),
                    'name'     => 'miniature_old_price_path',
                    'class'    => 'miniatureOldPricePath',
                    'required' => false,
                    'lang'		=> false,
                    'desc'     => $this->l('You can set path to product miniature old price element'),
                    'init_value' => '.old-price'
                ),
                array(
                    'type'     => 'text',
                    'label'    => $this->l('Product "add to cart" button path:'),
                    'name'     => 'add_to_cart_button_path',
                    'class'    => 'addToCartButtonPath',
                    'required' => false,
                    'lang'		=> false,
                    'desc'     => $this->l('You can set path to product "add to cart" button element'),
                    'init_value' => '.ajax_add_to_cart_button'
                )
	        );
	    }
	}
	
	private function initCombinationsInCatalogData() {
	    $combinationsInCatalogData = array();
	    foreach($this->getFormFields() as $key => $value) {
	    	if (isset($value['lang']) && $value['lang'] === true) {
	    		foreach (Language::getLanguages() as $langKey => $langValue) {
	    			$combinationsInCatalogData[$value['name']][$langValue['id_lang']] = $value['init_value'];
	    		}
	    	} else {
	    		$combinationsInCatalogData[$value['name']] = $value['init_value'];
	    	}
	    }
        return $combinationsInCatalogData;
	}
	
	private function createCombinationsInCatalogTab() {
	    $tab = new Tab();
	    $tab->active = 1;
	    $tab->class_name = 'ProductCombinations';
	    $tab->name = array();
	    foreach (Language::getLanguages(true) as $lang)
	        $tab->name[$lang['id_lang']] = 'ProductCombinations';
        $tab->id_parent = -1;
        $tab->module = $this->name;
        return $tab->add();
	}
	
	private function removeCombinationsInCatalogTab() {
	    $id_tab = (int)Tab::getIdFromClassName('ProductCombinations');
	    if ($id_tab) {
	        $tab = new Tab($id_tab);
	        return $tab->delete();
	    }
	    return true;
	}
	
    private function getTranslates() {
		return array(
			'AddToCartButtonLivePreview' => $this->l('Add to cart custom button Live preview'),
			'emptyText' => $this->l('Button text have to be filled (in each language)')
		);
	}
}