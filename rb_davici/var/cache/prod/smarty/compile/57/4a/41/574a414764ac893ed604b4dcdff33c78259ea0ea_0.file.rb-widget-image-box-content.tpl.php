<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 15:13:30
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\widget\rb-widget-image-box-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c658dac83611_36729566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '574a414764ac893ed604b4dcdff33c78259ea0ea' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\widget\\rb-widget-image-box-content.tpl',
      1 => 1623607000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./rb-base.tpl' => 1,
  ),
),false)) {
function content_60c658dac83611_36729566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./rb-base.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'image-box'), 0, false);
?>

<div class="rb-widget-container">
	<#
        var html = '<div class="rb-image-box-wrapper">';

        if ( settings.image.url ) {
            var imageHtml = '<img src="' + settings.image.url + '"  alt="' + settings.caption + '" class="rb-animation-' + settings.hover_animation + '" />';

            if ( settings.link.url ) {
                imageHtml = '<a href="' + settings.link.url + '">' + imageHtml + '</a>';
            }

            html += '<figure class="rb-image-box-img">' + imageHtml + '</figure>';
        }

        var hasContent = !! ( settings.title_text || settings.description_text );

        if ( hasContent ) {
            html += '<div class="rb-image-box-content">';

            if ( settings.title_text ) {
                var title_html = settings.title_text;

                if ( settings.link.url ) {
                    title_html = '<a href="' + settings.link.url + '">' + title_html + '</a>';
                }

                html += '<' + settings.title_size  + ' class="rb-image-box-title">' + title_html + '</' + settings.title_size  + '>';
            }

            if ( settings.description_text ) {
                html += '<div class="rb-image-box-description">' + settings.description_text + '</div>';
            }

            html += '</div>';
        }

        html += '</div>';

        print( html );
    #>
</div>
<?php }
}
