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
* @author PrestaShop SA <contact@prestashop.com>
    * @copyright  PrestaShop SA
    * @license http://opensource.org/licenses/afl-3.0.php Academic Free License (AFL 3.0)
    * International Registered Trademark & Property of PrestaShop SA
    *}

    <div class="ps-emailsubscription-block block links accordion_small_screen" id="blockEmailSubscription_{$hookName}">
        <div class="title-newsletter">
            <h3 class="rb-title">{l s='Join now and get 10% off your next purchase!' d='Shop.Theme.Global'}</h3>
            {if $conditions}
            <p class="sub-letter">{$conditions nofilter}</p>
            {/if}
        </div>
        <div class="block_content">
            <form action="{$urls.current_url}#blockEmailSubscription_{$hookName}" method="post">
                <div class="input-group newsletter-input-group ">
                    <input class="form-control input-subscription"
                name="email"
                type="email"
                value="{$value}"
                placeholder="{l s='Your email address' d='Shop.Forms.Labels'}"
                aria-labelledby="block-newsletter-label"
                required
              >
                    <button class="btn btn-outline" name="submitNewsletter" type="submit">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        <span>{l s='Subscribe' d='Shop.Theme.Global'}</span>
                    </button>
                </div>
                <input type="hidden" name="blockHookName" value="{$hookName}" />
                <input type="hidden" name="action" value="0" />
            </form>
            <div class="msg-block">
                {if $msg}
                <p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
                    {$msg}
                </p>
                {/if}
                {if isset($id_module)}
                {hook h='displayGDPRConsent' id_module=$id_module}
                {/if}
            </div>
        </div>
    </div>