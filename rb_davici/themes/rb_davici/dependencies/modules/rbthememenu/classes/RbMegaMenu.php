<?php
/**
* 2007-2019 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2019 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class RbMegaMenu extends RbMenuObj
{
    public $id_menu;
    public $title;
    public $link;
    public $enabled;
    public $menu_open_new_tab;
    public $menu_ver_hidden_border;
    public $menu_ver_alway_show;
    public $sort_order;
    public $id_category;
    public $id_manufacturer;
    public $id_supplier;
    public $id_cms;
    public $link_type;
    public $sub_menu_type;
    public $sub_menu_max_width;
    public $custom_class;
    public $menu_icon;
    public $menu_img_link;
    public $bubble_text;
    public $bubble_text_color;
    public $bubble_background_color;
    public $menu_ver_text_color;
    public $menu_ver_background_color;
    public $enabled_vertical;
    public $menu_item_width;
    public $tab_item_width;
    public $background_image;
    public $position_background;
    public $display_tabs_in_full_width;

    public static $definition = array(
        'table' => 'rbthememenu_menu',
        'primary' => 'id_menu',
        'multilang' => true,
        'fields' => array(
            'sort_order' => array('type' => self::TYPE_INT),
            'id_category' => array('type' => self::TYPE_INT),
            'id_manufacturer' => array('type' => self::TYPE_INT),
            'id_supplier'=>array('type'=>self::TYPE_INT),
            'id_cms' => array('type' => self::TYPE_INT),
            'sub_menu_type' => array('type' => self::TYPE_STRING),
            'link_type' => array('type' => self::TYPE_STRING),
            'sub_menu_max_width' => array('type' => self::TYPE_STRING),
            'custom_class' => array('type' => self::TYPE_STRING),
            'bubble_text_color' => array('type' => self::TYPE_STRING),
            'bubble_background_color' => array('type' => self::TYPE_STRING),
            'menu_ver_text_color' => array('type' => self::TYPE_STRING),
            'menu_item_width' => array('type' => self::TYPE_STRING),
            'tab_item_width'=> array('type'=>self::TYPE_STRING),
            'menu_ver_background_color' => array('type' => self::TYPE_STRING),
            'menu_ver_hidden_border'=>array('type'=>self::TYPE_INT),
            'menu_ver_alway_show'=>array('type'=>self::TYPE_INT),
            'enabled' => array('type' => self::TYPE_INT),
            'menu_open_new_tab' => array('type' => self::TYPE_INT),
            'menu_icon' => array('type' => self::TYPE_STRING, 'lang' => false, 'validate' => 'isCleanHtml'),
            'menu_img_link' => array('type' => self::TYPE_STRING, 'lang' => false),
            'enabled_vertical' => array('type'=>self::TYPE_INT),
            'background_image' => array('type' => self::TYPE_STRING),
            'position_background' => array('type' => self::TYPE_STRING),
            'display_tabs_in_full_width'=>   array('type' => self::TYPE_INT),
            // Lang fields
            'title' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'required' => true),
            'link' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml'),
            'bubble_text' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml'),
        )
    );

    public function __construct(
        $id_item = null,
        $id_lang = null,
        $id_shop = null,
        Context $context = null
    ) {
        parent::__construct($id_item, $id_lang, $id_shop);
        $languages = Language::getLanguages(false);

        foreach ($languages as $lang) {
            foreach (self::$definition['fields'] as $field => $params) {
                $temp = $this->$field;

                if (isset($params['lang']) && $params['lang'] && !isset($temp[$lang['id_lang']])) {
                    $temp[$lang['id_lang']] = '';
                }

                $this->$field = $temp;
            }
        }

        $this->context = $context;
        $this->setFields(Rbthememenu::$menus);
    }

    public function add($autodate = true, $null_values = false, $id_shop = null)
    {
        $context = Context::getContext();

        if (!$id_shop) {
            $id_shop = $context->shop->id;
        }

        $res = parent::add($autodate, $null_values);

        $res &= Db::getInstance()->execute(
            'INSERT INTO `'._DB_PREFIX_.'rbthememenu_menu_shop` (`id_shop`, `id_menu`)
            VALUES('.(int)$id_shop.', '.(int)$this->id.')'
        );

        return $res;
    }
}
