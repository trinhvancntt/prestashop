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
<div id="cart-block">
  <div class="blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if}" data-refresh-url="{$refresh_url}">
    <div class="header">
      {if $cart.products_count > 0}
        <a rel="nofollow" href="{$cart_url}">
      {/if}
        <span class="title_cart">{l s='Cart' d='Shop.Theme.Global'}</span>
        <i class="icon-bag"></i>
        <div class="cart-quantity">
          <span class="cart-products-count">{$cart.products_count}<span class="cart-unit hidden-xl-down"> {l s='items' d='Shop.Theme.Global'}</span></span>
        </div>
        {if $cart.products_count < 1}
          <div class="mini_card">
            <span>{l s='Your cart is currently empty.' d='Shop.Theme.Global'}</span>
          </div>
        {/if}
      {if $cart.products_count > 0}
        </a>
      {/if}
    </div>
  </div>
</div>
