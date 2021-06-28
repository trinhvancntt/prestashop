{*
*  PrestaShop
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
*  @copyright  PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="rb-wishlist">
	{if isset($wishlists) && count($wishlists) > 1}
		<div class="dropdown rb-wishlist-dropdown">
			<button class="rb-wishlist-button rb-btn-product show-list btn-product btn{if $added_wishlist} rb_added{/if}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-id-wishlist="{$id_wishlist}" data-id-product="{$rb_wishlist_id_product}" data-id-product-attribute="{$rb_wishlist_id_product_attribute}">
				<span class="rb-wishlist-content">
					<i class="icon-btn-product icon-wishlist icon-heart"></i>
					<span class="icon-title">{l s='Add to Wishlist' d='Shop.Theme.Global'}</span>
				</span>
			</button>
		  <div class="dropdown-menu rb-list-wishlist rb-list-wishlist-{$rb_wishlist_id_product}">
			{foreach from=$wishlists item=wishlists_item}
				<a href="#" class="rb-wishlist-link dropdown-item list-group-item list-group-item-action wishlist-item{if in_array($wishlists_item.id_rbthemefunction_wishlist, $wishlists_added)} rb_added {/if}" data-id-wishlist="{$wishlists_item.id_rbthemefunction_wishlist}" data-id-product="{$rb_wishlist_id_product}" data-id-product-attribute="{$rb_wishlist_id_product_attribute}" title="{if in_array($wishlists_item.id_rbthemefunction_wishlist, $wishlists_added)}{l s='Remove from Wishlist' d='Shop.Theme.Global'}{else}{l s='Add to Wishlist' d='Shop.Theme.Global'}{/if}">
					<i class="icon-btn-product icon-wishlist icon-heart"></i>
					{$wishlists_item.name}
				</a>			
			{/foreach}
		  </div>
		</div>
	{else}
		<a class="rb-wishlist-link rb-btn-product {if $added_wishlist} rb_added{/if}" href="#" data-id-wishlist="{$id_wishlist}" data-id-product="{$rb_wishlist_id_product}" data-id-product-attribute="{$rb_wishlist_id_product_attribute}" data-id_wishlist_product="{$id_wishlist_product}" title="{if $added_wishlist}{l s='Remove from Wishlist' d='Shop.Theme.Global'}{else}{l s='Add to Wishlist' d='Shop.Theme.Global'}{/if}">
			<i class="icon-btn-product icon-wishlist icon-heart"></i>
			<span class="icon-title">{l s='Add to Wishlist' d='Shop.Theme.Global'}</span>
		</a>
	{/if}
</div>