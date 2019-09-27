{*
 *  Leo Prestashop SliderShow for Prestashop 1.6.x
 *
 * @package   leosliderlayer
 * @version   3.0
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
*}

<article class="blog-item">
	<div class="blog-image-container">
		<div class="row blog-flex">
			<div class="col-xl-2-4 col-lg-3 col-xs-12">
				<div class="blog-sidebar">
					<div class="img_author">
						<img class="img-fluid" src="{if (isset($blog.preview_thumb_url) && $blog.preview_thumb_url != '')}{$blog.preview_thumb_url}{else}{$blog.preview_url}{/if}{*full url can not escape*}" 
						alt="{if !empty($blog.legend)}{$blog.legend|escape:'html':'UTF-8'}{else}{$blog.title|escape:'html':'UTF-8'}{/if}" 
						 title="{if !empty($blog.legend)}{$blog.legend|escape:'html':'UTF-8'}{else}{$blog.title|escape:'html':'UTF-8'}{/if}" 
						 {if isset($formAtts.bleoblogs_width)}width="{$formAtts.bleoblogs_width|escape:'html':'UTF-8'}" {/if}
						 {if isset($formAtts.bleoblogs_height)} height="{$formAtts.bleoblogs_height|escape:'html':'UTF-8'}"{/if}
						 itemprop="image" />
					</div>
					{if $config->get('listing_show_created','1')}
						<span class="created">
							{* <i class="material-icons">access_time</i> <span>{l s='On' d='Shop.Theme.Global'}: </span>  *}
							<time class="date" datetime="{strtotime($blog.date_add)|date_format:"%Y"|escape:'html':'UTF-8'}">
								<span class="day">
									{assign var='blog_day' value=strtotime($blog.date_add)|date_format:"%e"}	
									{l s=$blog_day d='Shop.Theme.Global'} <!-- day of month -->	
								</span>

								<span class="month">
									{assign var='blog_month' value=strtotime($blog.date_add)|date_format:"%b"}
									{l s=$blog_month d='Shop.Theme.Global'}		<!-- month-->
								</span>
								
								<!-- <span class="year">
									{assign var='blog_year' value=strtotime($blog.date_add)|date_format:"%Y"}		
									{l s=$blog_year d='Shop.Theme.Global'}	year
								</span> -->
							</time>
						</span>
					{/if}
				</div>
			</div>
			<div class="col-xl-9-6 col-lg-9 col-xs-12">
				<div class="blog-content">
					<div class="left-block">
						{if $blog.image && $config->get('listing_show_image',1)}
							<div class="blog-image">
								<img src="{$blog.preview_url|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}" alt="" class="img-fluid" />
							</div>
						{/if}
					</div>
					<div class="right-block">
						{if $config->get('listing_show_title','1')}
							<h4 class="blog-title">
								<a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}">{$blog.title|escape:'html':'UTF-8'}</a>
							</h4>
						{/if}
						<div class="blog-meta">
							{if $config->get('listing_show_author','1')&&!empty($blog.author)}
								<span class="author">
									<span class="ti-user"></span><a href="{$blog.author_link|escape:'html':'UTF-8'}" title="{$blog.author|escape:'html':'UTF-8'}"> {$blog.author|escape:'html':'UTF-8'}</a>
								</span>
							{/if}
							{if $config->get('listing_show_category','1')}
								<span class="cat"> <span class="ti-layers-alt"></span> 
									<a href="{$blog.category_link|escape:'html':'UTF-8'}" title="{$blog.category_title|escape:'html':'UTF-8'}"> {$blog.category_title|escape:'html':'UTF-8'}</a>
								</span>
							{/if}
							{if isset($blog.comment_count)&&$config->get('listing_show_counter','1')}	
								<span class="nbcomment">
									<span class="ti-comments"> {$blog.comment_count|intval} {l s='Comment' d='Shop.Theme.Global'}</span> 
								</span>
							{/if}
							{if $config->get('listing_show_hit','1')}	
								<span class="hits">
									<span class="ti-heart"></span> {$blog.hits|intval} {l s='Hit' d='Shop.Theme.Global'}
								</span>
							{/if}
						</div>
						<div class="blog-info">
							{if $config->get('listing_show_description','1')}
								<div class="blog-desc">
									{$blog.description|strip_tags:'UTF-8'|truncate:300:'...' nofilter}{* HTML form , no escape necessary *}
								</div>
							{/if}
						</div>
						{if $config->get('listing_show_readmore',1)}
							<a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}" class="more btn btn-primary">{l s='Read more' d='Shop.Theme.Global'}</a>
						{/if}
					</div>
				</div>
			</div>			
		</div>
	</div>
	<div class="hidden-xl-down hidden-xl-up datetime-translate">
		{l s='Sunday' d='Shop.Theme.Global'}
		{l s='Monday' d='Shop.Theme.Global'}
		{l s='Tuesday' d='Shop.Theme.Global'}
		{l s='Wednesday' d='Shop.Theme.Global'}
		{l s='Thursday' d='Shop.Theme.Global'}
		{l s='Friday' d='Shop.Theme.Global'}
		{l s='Saturday' d='Shop.Theme.Global'}
		
		{l s='January' d='Shop.Theme.Global'}
		{l s='February' d='Shop.Theme.Global'}
		{l s='March' d='Shop.Theme.Global'}
		{l s='April' d='Shop.Theme.Global'}
		{l s='May' d='Shop.Theme.Global'}
		{l s='June' d='Shop.Theme.Global'}
		{l s='July' d='Shop.Theme.Global'}
		{l s='August' d='Shop.Theme.Global'}
		{l s='September' d='Shop.Theme.Global'}
		{l s='October' d='Shop.Theme.Global'}
		{l s='November' d='Shop.Theme.Global'}
		{l s='December' d='Shop.Theme.Global'}
					
	</div>
</article>
