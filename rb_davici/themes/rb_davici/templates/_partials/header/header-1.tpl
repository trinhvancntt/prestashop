{**
* PrestaShop and Contributors
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
* needs please refer to https://www.prestashop.com for more information.
*
* @author PrestaShop SA <contact@prestashop.com>
  * @copyright PrestaShop SA and Contributors
  * @license https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
  * International Registered Trademark & Property of PrestaShop SA
  *}
  {block name='header_banner'}
    <div class="header-banner">{hook h='displayBanner'}</div>
  {/block}

  {block name='header_top'}
  <div class="header-mobile">
    <div class="header-mobile-top">
      <div class="container">
        <div class="row header-flex">
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-sp-12 header-center">
            <div class="header_logo">
              {if $page.page_name == 'index'}
                <h1>
                  <a href="{$urls.base_url}">
                    <img class="logo" src="{$shop.logo}" alt="{$shop.name}">
                  </a>
                </h1>
              {else}
                <a href="{$urls.base_url}">
                  <img class="logo" src="{$shop.logo}" alt="{$shop.name}">
                </a>
              {/if}
            </div>
          </div><!-- end header-center -->
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-sp-6 header-left">
            <div class="horizontal_menu">
              {hook h='displayRbMenu' type='horizontal'}
            </div>
          </div><!-- end header-left -->
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-sp-6 header-right">
            <div class="header-page-link">
              {hook h='displayRbSearch'}
              {hook h='displayRbTopLogin'}
              <div id="gr-lang" class="popup-over">
                <a href="javascript:void(0)" class="popup-title">
                  <i class="rub-settings"></i>
                </a>
                <div class="rb-lang popup-content">
                  <span class="title_block">{l s='Language:' d='Shop.Theme.Global'}</span>
                  {hook h='displayRbLanguage'}
                  <span class="title_block">{l s='Currency:' d='Shop.Theme.Global'}</span>
                  {hook h='displayRbCurrency'}
                </div>
              </div>
              {hook h='displayRbTopWishlist'}
              {hook h='displayRbTopCart'}
            </div>
          </div><!-- end header-right -->
        </div>
      </div>
    </div><!-- end header-mobile-top -->
  </div><!-- end header-mobile -->
  <div class="header-desktop header-1">
    <div class="header-middle">
      <div class="container">
        <div class="row header-flex">
          <div class="header-left col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12 col-sp-12">
            <div class="head_logo">
              {if $page.page_name == 'index'}
              <h1>
                <a href="{$urls.base_url}">
                  <img class="logo" src="{$shop.logo}" alt="{$shop.name}">
                </a>
              </h1>
              {else}
                <a href="{$urls.base_url}">
                  <img class="logo" src="{$shop.logo}" alt="{$shop.name}">
                </a>
              {/if}
            </div>
          </div>
          <div class="header-right col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12 col-sp-12">
            <div class="header-content position-static horizontal_menu">
              {hook h='displayRbMenu' type='horizontal'}
            </div>
            {hook h='displayRbSearch'}
            {hook h='displayRbTopLogin'}
            <div id="gr-lang" class="popup-over">
              <a href="javascript:void(0)" class="popup-title">
                <i class="rub-settings"></i>
              </a>
              <div class="rb-lang popup-content">
                <span class="title_block">{l s='Language:' d='Shop.Theme.Global'}</span>
                {hook h='displayRbLanguage'}
                <span class="title_block">{l s='Currency:' d='Shop.Theme.Global'}</span>
                {hook h='displayRbCurrency'}
              </div>
            </div>
            {hook h='displayRbTopWishlist'}
            {hook h='displayRbTopCart'}
          </div>
        </div><!-- end header-flex -->
        <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
          <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
          <div class="js-top-menu-bottom">
            <div id="_mobile_currency_selector"></div>
            <div id="_mobile_language_selector"></div>
            <div id="_mobile_contact_link"></div>
          </div>
        </div>
      </div><!-- container -->
    </div><!-- end header-middle -->
  </div><!-- end header-desktop -->

  {hook h='displayNavFullWidth'}
  {/block}