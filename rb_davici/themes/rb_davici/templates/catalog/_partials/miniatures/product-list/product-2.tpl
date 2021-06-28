{**
 *  PrestaShop
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
 * @copyright  PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<article
  class="product-miniature js-product-miniature{if isset($config)} {$config}{else if Configuration::get('RBTHEMEDREAM_COL_PRODUCT_LIST') != ''} {Configuration::get('RBTHEMEDREAM_COL_PRODUCT_LIST')}{else} col-md-3{/if}"
  data-id-product="{$product.id_product}"
  data-id-product-attribute="{$product.id_product_attribute}"
  itemscope itemtype="http://schema.org/Product"
>
  <div class="thumbnail-container">
    <div class="product-image">
      {block name='product_thumbnail'}
        {if $product.cover}
          <a href="{$product.url}" class="thumbnail product-thumbnail">
            <img
              class="img-fluid rb-cover"
              src = "{$product.cover.bySize.home_default.url}"
              alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
              data-full-size-image-url = "{$product.cover.large.url}"
            >
            {if !empty($product.images)}
              {$count = 1}

              {foreach from=$product.images item=image}
                {if $count == 1 && $image.cover != 1 && $image.id_image != $product.cover.id_image}
                  <div class="product-hover">
                    <img
                      class="img-fluid rb-image image-hover"
                      src = "{$image.bySize.home_default.url}"
                      title="{$product.name|truncate:30:'...'}"
                      width="{$image.bySize.home_default.width}"
                      height="{$image.bySize.home_default.height}"
                    >
                  </div>

                  {$count = $count + 1}
                {/if}
              {/foreach}
            {/if}
          </a>
        {else}
          <a href="{$product.url}" class="thumbnail product-thumbnail">
            <img
              class="img-fluid"
              src = "{$urls.no_picture_image.bySize.home_default.url}"
            >
          </a>
        {/if}
      {/block}

      {include file='catalog/rb-ajax-load.tpl'}

    </div>
    
    <div class="product-meta">
      
      {block name='product_name'}
        {if $page.page_name == 'index'}
          <h3 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:50:'...'}</a></h3>
        {else}
          <h2 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:50:'...'}</a></h2>
        {/if}
      {/block}

      {block name='product_price_and_shipping'}
        {if $product.show_price}
          <div class="product-price-and-shipping">
            {if $product.has_discount}
              {hook h='displayProductPriceBlock' product=$product type="old_price"}

              <span class="sr-only">{l s='Regular price' d='Shop.Theme.Catalog'}</span>
              <span class="regular-price">{$product.regular_price}</span>
              {if $product.discount_type === 'percentage'}
                <span class="discount-percentage discount-product">{$product.discount_percentage}</span>
              {elseif $product.discount_type === 'amount'}
                <span class="discount-amount discount-product">{$product.discount_amount_to_display}</span>
              {/if}
            {/if}

            {hook h='displayProductPriceBlock' product=$product type="before_price"}

            <span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span>
            <span itemprop="price" class="price">{$product.price}</span>

            {hook h='displayProductPriceBlock' product=$product type='unit_price'}

            
          </div>
        {/if}
      {/block}

      {block name='product-brand'}
        {hook h='displayRbBrandProduct' product=$product}
      {/block}
      
      {block name='product_description_short'}
        <div class="product-description-short" itemprop="description">{$product.description_short nofilter}</div>
      {/block}

      <div class="product-combination">
        {hook h='displayProductPriceBlock' product=$product type='weight'}
      </div>
    </div>

    {*{block name='product_flags'}
      <ul class="product-flags">
        {foreach from=$product.flags item=flag}
          <li class="product-flag {$flag.type}">{$flag.label}</li>
        {/foreach}
      </ul>
    {/block}*}

    {*<div class="highlighted-informations{if !$product.main_variants} no-variants{/if} hidden-sm-down">
      {block name='product_variants'}
        {if $product.main_variants}
          {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
        {/if}
      {/block}
    </div>*}
  </div>
</article>