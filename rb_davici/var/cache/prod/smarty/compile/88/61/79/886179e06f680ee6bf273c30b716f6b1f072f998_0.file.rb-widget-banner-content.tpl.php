<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:44
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\widget\rb-widget-banner-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6314cd684c2_01913271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '886179e06f680ee6bf273c30b716f6b1f072f998' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\widget\\rb-widget-banner-content.tpl',
      1 => 1612599910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./rb-base.tpl' => 1,
  ),
),false)) {
function content_60c6314cd684c2_01913271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./rb-base.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'banner'), 0, false);
?>

<div class="rb-widget-container">
	<#
        var html = '<div class="rb-live-banner">';

        if ( settings.link.url ) {
                html += '<a href="' + settings.link.url + '">';
        }

        if ( settings.image.url ) {
            var imageHtml = '<img src="' + settings.image.url + '" class="rb-animation-' + settings.hover_animation + '"   alt="' + settings.caption + '"  />';
            html += '<figure class="rb-live-banner-img"><span class="rb-live-banner-overlay"></span>' + imageHtml + '</figure>';
        }

        var hasContent = !! ( settings.title_text || settings.description_text );

        if ( hasContent ) {
            html += '<div class="rb-live-banner-content rb-live-banner-content-' + settings.content_position + ' rb-banner-align-'+ settings.content_vertical_alignment + '">';

            if ( settings.above_title_text ) {
                html += '<span class="rb-live-banner-subtitle rb-live-banner-description">' + settings.above_title_text + '</span>';
            }

            if ( settings.title_text ) {
                var title_html = settings.title_text;

                html += '<' + settings.title_size  + ' class="rb-live-banner-title">' + title_html + '</' + settings.title_size  + '>';
            }

            if ( settings.description_text ) {
                html += '<div class="rb-live-banner-description">' + settings.description_text + '</div>';
            }

            if ( settings.button_text ) {
                html += '<div><span class="rb-button-link rb-button btn rb-size-' + settings.button_size + ' btn-primary">';

                if ( settings.button_icon ) {
                    html += '<span class="rb-button-icon rb-align-icon-' + settings.button_icon_align + '"><i class="' + settings.button_icon + '"></i></span>';
                }

                 html += '<span class="rb-button-text">' + settings.button_text + '</span></span></div>';
            }

            html += '</div>';
        }

        if ( settings.link.url ) {
            html += '</a>';
        }

        html += '</div>';

        print( html );
    #>	
</div><?php }
}
