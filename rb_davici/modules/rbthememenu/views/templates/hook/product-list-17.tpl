{*
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
*}

{if isset($products) && $products}
	{foreach from=$products item="product"}
          <article class="product-miniature js-product-miniature" data-id-product="{$product.id_product|intval}" data-id-product-attribute="{$product.id_product_attribute|intval}" itemscope itemtype="http://schema.org/Product">
          <div class="thumbnail-container">
            {block name='product_thumbnail'}
              <a href="{$product.url|escape:'html':'UTF-8'}" class="thumbnail product-thumbnail">
                  {if isset($product.image_id)}{assign var='imageLink' value=$link->getImageLink($product.link_rewrite, $product.image_id, $imageType)}{else}{assign var='imageLink' value=$link->getImageLink($product.link_rewrite, $product.id_image, $imageType)}{/if}
                  <img
                       src="{if (strpos($imageLink,'http://')===false || strpos($imageLink,'https://'))}{$protocol_link nofilter}{/if}{$imageLink|escape:'html':'UTF-8'}"
                       alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}"
                       data-full-size-image-url = "{if (strpos($imageLink,'http://')===false || strpos($imageLink,'https://'))}{$protocol_link nofilter}{/if}{$imageLink|escape:'html':'UTF-8'}"
                  />
              </a>
            {/block}
            <div class="rb-product-description">
              {block name='product_name'}
                <h4 class="h3 product-title" itemprop="name">
                    <a href="{$product.url|escape:'html':'UTF-8'}">
                        {$product.name|escape:'html':'UTF-8'|truncate:30:'...'}
                    </a>
                    {if isset($product.attributes) && $product.attributes}
                        {assign var='ik2' value=0}
                        <span class="product_combination"> {foreach from=$product.attributes item='attribute'}{assign var='ik2' value=$ik2+1}{$attribute.group|truncate:80:'...':true|escape:'html':'UTF-8'}-{$attribute.name|truncate:80:'...':true|escape:'html':'UTF-8'}{if $ik2 < count($product.attributes)}, {/if}{/foreach}</span>
                    {/if}
                </h4>
              {/block}
              {hook h='displayProductListReviews' product=$product}
              {if $block.show_description}
                    <p class="product-desc" itemprop="description">
        				{$product.description_short|strip_tags|escape:'html':'UTF-8'|truncate:40:'...'}
    	           </p>
               {/if}
              {block name='product_price_and_shipping'}
                {if $product.show_price}
                  <div class="product-price-and-shipping">
                    {hook h='displayProductPriceBlock' product=$product type="before_price"}
                    <span itemprop="price" class="price">{$product.price|escape:'html':'UTF-8'}</span>
                    {if $product.has_discount}
                      {hook h='displayProductPriceBlock' product=$product type="old_price"}

                      <span class="regular-price">{$product.regular_price|escape:'html':'UTF-8'}</span>
                      {if $product.discount_type === 'percentage'}
                        <span class="discount-percentage">{$product.discount_percentage|escape:'html':'UTF-8'}</span>
                      {/if}
                    {/if}
                    {hook h='displayProductPriceBlock' product=$product type='unit_price'}

                    {hook h='displayProductPriceBlock' product=$product type='weight'}
                  </div>
                {/if}
              {/block}
              {if $block.show_clock && isset($product.specific_prices_to)}
                <div class="panel-discount-countdown" data-countdown="{$product.specific_prices_to|escape:'html':'UTF-8'}"></div>
              {/if}
            </div>
            {block name='product_flags'}
              <ul class="product-flags">
                {foreach from=$product.flags item=flag}
                  <li class="{$flag.type|escape:'html':'UTF-8'}">{$flag.label|escape:'html':'UTF-8'}</li>
                {/foreach}
              </ul>
            {/block}
            <div class="highlighted-informations{if !$product.main_variants} no-variants{/if} hidden-sm-down">
              <a
                href="#"
                class="quick-view"
                data-link-action="quickview"
              >
                <i class="material-icons search">&#xE8B6;</i> {l s='Quick view' mod='rbthememenu'}
              </a>

              {block name='product_variants'}
                {if $product.main_variants}
                  {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
                {/if}
              {/block}
            </div>
            
        
          </div>
        </article>
    {/foreach}
{else}
    <span class="rb_alert alert-warning">{l s='No product available' mod='rbthememenu'}</span>
{/if}