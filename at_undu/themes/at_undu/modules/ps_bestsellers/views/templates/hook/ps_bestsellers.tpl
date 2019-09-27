{**
 *   PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright   PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<section class="sellers-products block clearfix">
  <h2 class="h2 title_block">
    {l s='Best Sellers' d='Shop.Theme.Catalog'}
  </h2>
  <div class="block_content">
    <div class="products_block">
      <div class="owl-row {if isset($productClassWidget)} {$productClassWidget}{/if}">
        <div id="category-products">
          {foreach from=$products item="product"}
            <div class="item{if $smarty.foreach.mypLoop.index == 0} first{/if}">
              {block name='product_miniature'}
                {if isset($productProfileDefault) && $productProfileDefault}
                  {* exits THEME_NAME/profiles/profile_name.tpl -> load template*}
                  {hook h='displayLeoProfileProduct' product=$product profile=$productProfileDefault}
                {else}
                  {include file='catalog/_partials/miniatures/leo_col_products.tpl' products=$products}
                {/if}
              {/block}
            </div>
          {/foreach}
        </div>
      </div>
      <a class="all-product-link btn btn-outline" href="{$allBestSellers}">
        {l s='All best sellers' d='Shop.Theme.Catalog'}
        <i class="material-icons">&#xE315;</i>
      </a>
    </div>
  </div>
</section>
<script type="text/javascript">

  products_list_functions.push(
    function(){
      $('#category-products').owlCarousel({
        {if isset($IS_RTL) && $IS_RTL}
          direction:'rtl',
        {else}
          direction:'ltr',
        {/if}
        items : 1,
        itemsCustom : false,
        itemsDesktop : [1400, 1],
        itemsDesktopSmall : [992, 1],
        itemsTablet : [768, 1],
        itemsTabletSmall : false,
        itemsMobile : [576, 1],
        singleItem : false,         // true : show only 1 item
        itemsScaleUp : false,
        slideSpeed : 200,  //  change speed when drag and drop a item
        paginationSpeed :800, // change speed when go next page

        autoPlay : false,   // time to show each item
        stopOnHover : false,
        navigation : true,
        navigationText : ["&lsaquo;", "&rsaquo;"],

        scrollPerPage :true,
        responsive :true,
        
        pagination : false,
        paginationNumbers : false,
        
        addClassActive : true,
        
        mouseDrag : true,
        touchDrag : true,

      });
    }
  ); 
  
</script>