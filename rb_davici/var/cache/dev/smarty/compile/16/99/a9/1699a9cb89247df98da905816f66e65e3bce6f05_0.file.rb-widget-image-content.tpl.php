<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-26 03:03:41
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\widget\rb-widget-image-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608665cdc9b3d0_55819477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1699a9cb89247df98da905816f66e65e3bce6f05' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\widget\\rb-widget-image-content.tpl',
      1 => 1612599910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./rb-base.tpl' => 1,
  ),
),false)) {
function content_608665cdc9b3d0_55819477 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./rb-base.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'image'), 0, false);
?>

<div class="rb-widget-container">
	<# if ( '' !== settings.image.url ) { #>
        <div class="rb-image{{ settings.shape ? ' rb-image-shape-' + settings.shape : '' }}">
            <#
           	var imgClass = '', image_html = '',
                hasCaption = '' !== settings.caption,
                image_html = '';

           	if ( '' !== settings.hover_animation ) {
                imgClass = 'rb-animation-' + settings.hover_animation;
            }

            image_html = '<img src="' + settings.image.url + '" class="' + imgClass + '" alt="' + settings.caption + '" />';
                
            var link_url;
            if ( 'custom' === settings.link_to ) {
                link_url = settings.link.url;
            }
                
            if ( 'file' === settings.link_to ) {
                link_url = settings.image.url;
            }
                
            if ( link_url ) {
                image_html = '<a href="' + link_url + '">' + image_html + '</a>';
            }

            print( image_html );
            #>
        </div>
    <# } #>
</div><?php }
}
