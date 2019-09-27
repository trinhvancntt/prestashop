{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
{block name='product_thumbnail'}
	{if isset($cfg_product_list_image) && $cfg_product_list_image}
		<div class="leo-more-info hidden-md-down" data-idproduct="{$product.id_product}"></div>
	{/if}
	{if $product.cover}
		<a href="{$product.url}" class="thumbnail product-thumbnail">
			<img
				class="img-fluid"
				src = "{$product.cover.bySize.large_default.url}"
				alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
				data-full-size-image-url = "{$product.cover.large.url}"
			> 
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

