{**
 * 2007-2019 PrestaShop
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
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{block name='product_miniature_item'}
  <article
    class="product-miniature js-product-miniature {if isset($row) && $row == 1 && isset($config)}{$config}{/if}"
    data-id-product="{$product.id_product}"
    data-id-product-attribute="{$product.id_product_attribute}"
    itemscope
    itemtype="http://schema.org/Product">
    <div class="thumbnail-container content-product5">
      <div class="product-image">
        {block name='product_thumbnail'}
          {if $product.cover}
            <a href="{$product.url}" class="thumbnail product-thumbnail">
              <img
                class="rb-image image-cover"
                data-lazy = "{$product.cover.bySize.home_default.url}"
                data-full-size-image-url = "{$product.cover.large.url}"
              >
              {if !empty($product.images)}
                {$count = 1}

                {foreach from=$product.images item=image}
                  {if $count == 1 && $image.cover != 1 && $image.id_image != $product.cover.id_image}
                    <div class="product-hover">
                      <img
                        class="rb-image image-hover"
                        data-lazy = "{$image.bySize.home_default.url}"
                        title="{$product.name|truncate:30:'...'}"
                        width="{$image.bySize.home_default.width}"
                        height="{$image.bySize.home_default.height}"
                      >
                    </div>

                    {$count = $count + 1}
                  {/if}
                {/foreach}
              {/if}

              <div class="rb-image-loading"></div>
            </a>
          {else}
            <a href="{$product.url}" class="thumbnail product-thumbnail">
              <img data-lazy="{$urls.no_picture_image.bySize.home_default.url}">
              <div class="rb-image-loading"></div>
            </a>
          {/if}
        {/block}

        {block name='product_flags'}
          <ul class="product-flags">
            {foreach from=$product.flags item=flag}
              <li class="product-flag {$flag.type}">{$flag.label}</li>
            {/foreach}
            <span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span>
            
          </ul>
        {/block}

        {include file='catalog/rb-ajax-load.tpl'}

        {block name='product_countdown'}
          {hook h='displayRbProductCountDown' product=$product}
        {/block}

      </div><!-- end product-image -->

      <div class="product-meta">
        {block name='product_reviews'}
          {hook h='displayRbReviewProduct' product=$product type='num_star'}
          {hook h='displayProductListReviews' product=$product}
        {/block}

        {block name='product_name'}
          {if $page.page_name == 'index'}
            <h3 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h3>
          {else}
            <h2 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h2>
          {/if}
        {/block}

        {*{block name='product-brand'}
          {hook h='displayRbBrandProduct' product=$product}
        {/block}*}

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
              <span itemprop="price" class="price">{$product.price}</span>
              {*{hook h='displayProductPriceBlock' product=$product type='unit_price'}*}
            </div>
          {/if}
        {/block}

        <div class="functional-buttons-box">
          {block name='add_to_cart'}
            <div class="product-add-cart">
              {hook h='displayRbAddToCart' product=$product}
            </div>
          {/block}
          
          {block name='product-compare'}
              {hook h='displayRbWishListProduct' product=$product}
          {/block}
          
          {block name='rb_compare'}
            <div class="product-compare">
              {hook h='displayRbCompareProduct' product=$product}
            </div>
          {/block}

          {block name='quick_view'}
            <div class="product-quickview hidden-sm-down">
              <a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview" title="{l s='Quick view' d='Shop.Theme.Actions'}">
                <i class="icon-search"></i>
                <span class="icon-title">{l s='Quick view' d='Shop.Theme.Actions'}</span>
              </a>
            </div>

            <div class="product-quick-view" style="display:none;">
              <a class="quick-view rb-btn-product" href="#" data-link-action="quickview" title="{l s='Quick view' d='Shop.Theme.Actions'}">
                <i class="icon-search search"></i>
                <span class="icon-title">{l s='Quick view' d='Shop.Theme.Actions'}</span>
              </a>
            </div>
          {/block}
        </div><!-- end functional-buttons-box -->
      </div><!-- end product-meta -->
    </div><!-- end thumbnail-container -->
  </article>
{/block}