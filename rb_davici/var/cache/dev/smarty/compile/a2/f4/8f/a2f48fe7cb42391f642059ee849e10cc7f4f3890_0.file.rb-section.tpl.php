<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-26 03:03:42
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\include\rb-section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608665ce82e229_18880405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2f48fe7cb42391f642059ee849e10cc7f4f3890' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\include\\rb-section.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608665ce82e229_18880405 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-element-overlay"></div>
<# if ('video' === settings.background_background) {
var videoLink = settings.background_video_link;

if (videoLink) {
var videoID = rb.helpers.getYoutubeIDFromURL( settings.background_video_link ); #>

<div class="rb-background-video-container rb-hidden-phone">
	<# if ( videoID ) { #>
	<div class="rb-background-video" data-video-id="{{ videoID }}"></div>
	<# } else { #>
	<video class="rb-background-video" src="{{ videoLink }}" autoplay loop muted></video>
	<# } #>
</div>
<# }

if ( settings.background_video_fallback ) { #>
<div class="rb-background-video-fallback" style="background-image: url({{ settings.background_video_fallback.url }})"></div>
<# }
}

if ( -1 !== [ 'classic', 'gradient' ].indexOf( settings.background_overlay_background ) ) { #>
<div class="rb-background-overlay"></div>
<# } #>
<div class="rb-container rb-column-gap-{{ settings.gap }}" <# if ( settings.get_render_attribute_string ) { #>{{{ settings.get_render_attribute_string( 'wrapper' ) }}} <# } #> >
	<div class="rb-row"></div>
</div><?php }
}
