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
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
  {/block}

  {block name='header_nav'}
  <nav class="header-nav header-nav-1">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-xs-8 col-sp-12 header-nav-left">
          <ul class="topbar-menu">
            <li class="menu-item"><a href="#">{l s='Contact' d='Shop.Theme.Global'}</a></li>
            <li class="menu-item"><a href="#">{l s='Reviews' d='Shop.Theme.Global'}</a></li>
            <li  class="menu-item"><a href="#">{l s='Support' d='Shop.Theme.Global'}</a></li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-4 col-xs-4 col-sp-12 header-nav-right">
          <div class="box-nav-group">
            {hook h='displayRbTopContact'}
            {hook h='displayRbSocial'}
          </div>
        </div>
      </div>
    </div>
    {hook h='displayNav2'}
  </nav>
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
  <div class="header-desktop header-5">
    <div class="header-middle">
      <div class="container">
        <div class="row header-flex">
          <div class="header-left col-xl-5 col-lg-5 col-md-5 col-xs-4 col-sp-4">
            {hook h='displayRbSearch'}
          </div>
          <div class="header-center col-xl-2 col-lg-2 col-md-2 col-xs-4 col-sp-4">
            <div class="head_logo">
              {if $page.page_name == 'index'}
              <h1>
                <a href="{$urls.base_url}">
                  <img class="logo" src="{$urls.base_url}themes/rb_davici/assets/img/logo-black.png" alt="{$shop.name}">
                </a>
              </h1>
              {else}
              <a href="{$urls.base_url}">
                <img class="logo" src="{$urls.base_url}themes/rb_davici/assets/img/logo-black.png" alt="{$shop.name}">
              </a>
              {/if}
            </div>
          </div>
          <div class="header-right col-xl-5 col-lg-5 col-md-5 col-xs-4 col-sp-4">
            <div class="header-page-link">
              <div class="phone hidden-lg-down hidden-md-down"> 
                <i class="icon-headset"></i>
                <div class="content"> 
                  <label class="font-bold">{l s='Call us free' d='Shop.Theme.Global'}</label> 
                  <a href="#">{l s='+1 86.36.166' d='Shop.Theme.Global'}</a>
                </div>
              </div>
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
          </div>
        </div><!-- end header-flex -->
      </div>
    </div><!-- end header-middle -->
    <div class="header-wrapper">
      <div class="container">
        <div class="header-content">
          <div class="position-static horizontal_menu">
            {hook h='displayRbMenu' type='horizontal'}
          </div>
        </div>
        <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
          <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
          <div class="js-top-menu-bottom">
            <div id="_mobile_currency_selector"></div>
            <div id="_mobile_language_selector"></div>
            <div id="_mobile_contact_link"></div>
          </div>
        </div>
      </div>
    </div><!-- end header-wrapper -->
  </div><!-- end header-desktop -->

  {hook h='displayNavFullWidth'}
  {/block}