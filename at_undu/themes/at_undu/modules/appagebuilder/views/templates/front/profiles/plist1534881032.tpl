{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    <div class="product-image">
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
{block name='product_thumbnail'}
	{if $product.cover}
		<a href="{$product.url}" class="thumbnail product-thumbnail">
			<img
				class="img-fluid"
				src = "{$product.cover.bySize.large_default.url}"
				alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
				data-full-size-image-url = "{$product.cover.large.url}"
			> 
			{if isset($cfg_product_one_img) && $cfg_product_one_img}
				<span class="product-additional" data-idproduct="{$product.id_product}"></span>
			{/if}
			{block name='product_price_and_shipping'}
			  {if $product.show_price}
			    <div class="product-price-and-shipping">
			      {if $product.has_discount}
			        {if $product.discount_type === 'percentage'}
			          <span class="discount-percentage">{$product.discount_percentage}</span>
			        {/if}
			      {/if}
			    </div>
			  {/if}
			{/block}
		</a>
	{else}
		<a href="{$product.url}" class="thumbnail product-thumbnail">
	            <img
	              src = "{$urls.no_picture_image.bySize.large_default.url}"
	            >
		    {if isset($cfg_product_one_img) && $cfg_product_one_img}
		    	<span class="product-additional" data-idproduct="{$product.id_product}"></span>
		    {/if}
		    {block name='product_price_and_shipping'}
			  {if $product.show_price}
			    <div class="product-price-and-shipping">
			      {if $product.has_discount}
			        {if $product.discount_type === 'percentage'}
			          <span class="discount-percentage">{$product.discount_percentage}</span>
			        {/if}
			      {/if}
			    </div>
			  {/if}
			{/block}
	    </a>
	{/if}
{/block}


<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
{block name='product_flags'}
<ul class="product-flags">
  {foreach from=$product.flags item=flag}
	<li class="product-flag {$flag.type}">{$flag.label}</li>
  {/foreach}
</ul>
{/block}
<div class="functional-buttons clearfix">
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<div class="quickview{if !$product.main_variants} no-variants{/if} hidden-sm-down">
<a
  href="#"
  class="quick-view btn-product btn"
  data-link-action="quickview"
>
	<span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
	<span class="leo-quickview-bt-content">
		<i class="nova-maximize-2"></i>
		<span class="btn-title">{l s='Quick view' d='Shop.Theme.Global'}</span>
	</span>
</a>
</div>

<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
{hook h='displayLeoWishlistButton' product=$product}

<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
{hook h='displayLeoCompareButton' product=$product}
</div></div>
    <div class="product-meta"><div class="p-name">
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
{block name='product_name'}
  <h3 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h3>
{/block}

<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
{hook h='displayLeoProductListReview' product=$product}
</div>
{block name='product_description_short'}
  <div class="product-description-short" itemprop="description">{$product.description_short|strip_tags|truncate:150:'...' nofilter}</div>
{/block}<div class="box-card-info">
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
{hook h='displayLeoCartButton' product=$product}

<!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
        {block name='product_price_and_shipping'}
          {if $product.show_price}
    <div class="product-price-and-shipping {if $product.has_discount}has_discount{/if}">
              

              {hook h='displayProductPriceBlock' product=$product type="before_price"}

              <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                <span itemprop="priceCurrency" content="{$currency.iso_code}"></span><span itemprop="price" content="{$product.price_amount}">{$product.price}</span>
              </span>
              {if $product.has_discount}
                  {hook h='displayProductPriceBlock' product=$product type="old_price"}

                  <span class="regular-price">{$product.regular_price}</span>
                  {if $product.discount_type === 'percentage'}
                    <span class="discount-percentage">{$product.discount_percentage}</span>
                  {/if}
                {/if}
              {hook h='displayProductPriceBlock' product=$product type='unit_price'}

              {hook h='displayProductPriceBlock' product=$product type='weight'}
            </div>
          {/if}
        {/block}
</div></div>
  </div>
</article>
