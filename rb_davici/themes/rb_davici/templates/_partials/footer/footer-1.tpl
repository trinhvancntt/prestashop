{**
*  PrestaShop and Contributors
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
  * @copyright  PrestaShop SA and Contributors
  * @license https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
  * International Registered Trademark & Property of PrestaShop SA
  *}
  
  <div class="footer-container footer-h1 style-1">
    <div class="footer-top">
      <div class="container">
        <div class="footer-blockemail">
          {hook h='displayRbEmail'}
        </div>
      </div>
    </div><!-- end footer-top-->

    <div class="footer-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12 ">
            {hook h='displayFooter'}
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12 ">
            {block name='hook_footer_before'}
              {hook h='displayFooterBefore'}
            {/block}
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12 ">
            {block name='hook_footer_after'}
              {hook h='displayFooterAfter'}
            {/block}
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12 ">              
            {hook h='displayRbSocial'}
          </div>
        </div>
      </div>
    </div><!-- end footer-center -->

    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12 col-sp-12">
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
          <div class="col-md-4 col-xs-12 col-sp-12">
            <div class="text-md-right">
              <img class="img-fluid" src="{$urls.base_url}themes/rb_davici/assets/img/payment.png" alt="{$shop.name}">
            </div>
          </div>
        </div>
      </div>
    </div><!-- end footer-copyright -->
    {hook h='displayFooterDetail'}
  </div>
  <div id="rb-back-top">
    <a href="#"><i class="fa fa-angle-double-up"></i></a>
  </div>