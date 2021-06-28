{*
* 2007-2020 PrestaShop
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
*  @copyright 2007-2020 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div id="rbthemeblog-group" data-url="{$baseurl}">
	<div class="panel panel-default">
		<div class="panel-heading"><i class="icon-cogs"></i> {l s='Blog Config' mod='rbthemeblog'}</div>

		<div class="panel-content" id="rbthemeblog-setting">
			<ul class="nav nav-tabs rbthemeblog-tablist" role="tablist">
				<li class="nav-item active">
					<a class="nav-link" href="#fieldset_0" role="tab" data-toggle="tab">
						{l s='Blog Settings' mod='rbthemeblog'}
					</a>
				</li>


				<li class="nav-item">
					<a class="nav-link" href="#fieldset_1_1" role="tab" data-toggle="tab">
						{l s='Settings General' mod='rbthemeblog'}
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#fieldset_2_2" role="tab" data-toggle="tab">
						{l s='Settings Single Post' mod='rbthemeblog'}
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#fieldset_3_3" role="tab" data-toggle="tab">
						{l s='Settings Post List' mod='rbthemeblog'}
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#fieldset_4_4" role="tab" data-toggle="tab">
						{l s='Comments' mod='rbthemeblog'}
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#fieldset_5_5" role="tab" data-toggle="tab">
						{l s='Settings Facebook Comments' mod='rbthemeblog'}
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#fieldset_6_6" role="tab" data-toggle="tab">
						{l s='Settings Captcha' mod='rbthemeblog'}
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#fieldset_7_7" role="tab" data-toggle="tab">
						{l s='Settings Thumbnails' mod='rbthemeblog'}
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#fieldset_8_8" role="tab" data-toggle="tab">
						{l s='Troubleshooting' mod='rbthemeblog'}
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#fieldset_9_9" role="tab" data-toggle="tab">
						{l s='Troubleshooting' mod='rbthemeblog'}
					</a>
				</li>
			</ul>
			<div class="tab-content">
				{$content}
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	#rbthemeblog-setting .panel {
		display: none;
	}
	#rbthemeblog-setting .active {
		display: block;
	}
</style>