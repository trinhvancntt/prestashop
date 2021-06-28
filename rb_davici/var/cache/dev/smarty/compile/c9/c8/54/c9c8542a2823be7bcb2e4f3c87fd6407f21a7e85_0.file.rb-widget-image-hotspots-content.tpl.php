<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-26 03:03:42
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\widget\rb-widget-image-hotspots-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608665ce0faed6_22728586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9c8542a2823be7bcb2e4f3c87fd6407f21a7e85' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\widget\\rb-widget-image-hotspots-content.tpl',
      1 => 1612599910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./rb-base.tpl' => 1,
  ),
),false)) {
function content_608665ce0faed6_22728586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./rb-base.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'image-hotspots'), 0, false);
?>

<div class="rb-widget-container">
	<# if ( '' !== settings.image.url ) { #>
		<div class="rb-image-hotspots-wrapper">
			<div class="rb-hotspot-image{{ settings.shape ? ' rb-image-shape-' + settings.shape : '' }}">
				<#
				var imgClass = '', image_html = '',
				hasCaption = '' !== settings.caption,
				image_html = '';

				if ( '' !== settings.hover_animation ) {
				imgClass = 'rb-animation-' + settings.hover_animation;
			}

			image_html = '<img src="' + settings.image.url + '" class="' + imgClass + '" alt="' + settings.caption + '" />';

			print( image_html );
			#>
		</div>
		<div class="rb-image-hotspots">
			<#
			if ( settings.icon_list ) {
			_.each( settings.icon_list, function( item ) { #>
			<div class="rb-hotspot" style="top: {{ item.top }}%; left: {{ item.left }}%;" >
				<# if ( item.link && item.link.url ) { #>
				<a href="{{ item.link.url }}">
					<# } #>
					<span class="rb-hotspot-icon">
						<i class="{{ item.icon }}"></i>
					</span>
					<span class="rb-hotspot-text">{{{ item.text }}}</span>
					<# if ( item.link && item.link.url ) { #>
				</a>
				<# } #>
			</div>
			<#
				});
			} #>
	</div>
</div>
    <# } #>
</div><?php }
}
