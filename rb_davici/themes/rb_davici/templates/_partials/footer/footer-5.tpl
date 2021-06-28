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

<div class="footer-container footer-h5 style-2">
  <div class="footer-center">
    <div class="container container-large">
      <div class="row">
        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ">
          <div class="box-group">
            <div class="box-phone"> 
              <i class="icon-telephone1"></i>
              <div class="content">
                <h2>{l s='Call us free' d='Shop.Theme.Global'}</h2> 
                <span>{l s='+1 866.306.1666' d='Shop.Theme.Global'}</span>
              </div>
            </div>
            <a href="{$urls.base_url}">
              <img class="logo" src="{$urls.base_url}themes/rb_davici/assets/img/logo-black.png"
                alt="{$shop.name}">
            </a>
            <div class="box-footer-html">{l s='Cestibulum rutrum, mi nec elementum vehicula eros quam gravida nisl id fringilla' d='Shop.Theme.Global'}</div>
            {hook h='displayRbFooterContact'}
            {hook h='displayRbSocial'}
          </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-sp-12 ">
          {hook h='displayFooter'}
        </div>
        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-sp-12 ">
          {block name='hook_footer_before'}
            {hook h='displayFooterBefore'}
          {/block}
        </div>
        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-sp-12 ">
          {block name='hook_footer_after'}
            {hook h='displayFooterAfter'}
          {/block}
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-sp-12 ">              
          <div class="block">
            <h3 class="h3 rb-title">{l s='Our store' d='Shop.Theme.Global'}</h3>
            <img class="img-fluid" src="{$urls.base_url}themes/rb_davici/assets/img/img-map.jpg" alt="">
          </div>
          <div class="box-ios">
            <ul>
              <li>
                <img class="img-fluid" src="{$urls.base_url}themes/rb_davici/assets/img/android.jpg" alt="">
              </li>
              <li>
                <img class="img-fluid" src="{$urls.base_url}themes/rb_davici/assets/img/ios.jpg" alt="">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div><!-- end footer-center -->

  <div class="footer-copyright">
    <div class="container container-large">
      <div class="row">
        <div class="col-lg-9 col-md-12 col-xs-12 col-sp-12">
          <div class="text-md-left">
            {block name='copyright_link'}
            <a class="_blank" href="http://www.prestashop.com" target="_blank">
              {l s='%copyright% %year% - Ecommerce software by %prestashop%' sprintf=['%prestashop%' => 'PrestaShop™',
              '%year%' => 'Y'|date, '%copyright%' => '©'] d='Shop.Theme.Global'}
            </a>
            {/block}
            {hook h='displayRbFooter'}
          </div>
        </div>
        <div class="col-lg-3 col-md-12 col-xs-12 col-sp-12">
          <div class="text-md-right">
            <img class="img-fluid" src="{$urls.base_url}themes/rb_davici/assets/img/payment.png" alt="{$shop.name}">
          </div>
        </div>
      </div>
    </div>
  </div><!-- end footer-copyright -->
</div><!-- end footer-container -->
<div id="rb-back-top">
  <a href="#"><i class="fa fa-angle-double-up"></i></a>
</div>