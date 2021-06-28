{*
* 2007-2019 PrestaShop
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
*  @copyright 2007-2019 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if isset($testimonials_lists) && !empty($testimonials_lists)}
	<div class="rb-testimonial-carousel-wrapper rb-slick-slider">
		<div class="rb-testimonial-carousel" data-slider_options="{$slick_options}">
			{foreach from=$testimonials_lists item=testimonials_list}
				<div class="rb-testimonial-meta-inner">
					{if $testimonials_list.image.url != ''}
						<div class="rb-testimonial-image">
							<img class="" data-lazy="{$testimonials_list.image.url}">
							<div class="rb-image-loading"></div>
						</div>
					{/if}

					<div class="rb-testimonial-details">
						<div class="rb-testimonial-name">{$testimonials_list.name}</div>
						<div class="rb-testimonial-job">{$testimonials_list.job}</div>
					</div>
					
					{if $testimonials_list.content != ''}
						<div class="rb-testimonial-content">{$testimonials_list.content nofilter}</div>
					{/if}	
				</div>
			{/foreach}
		</div>
	</div>
{/if}