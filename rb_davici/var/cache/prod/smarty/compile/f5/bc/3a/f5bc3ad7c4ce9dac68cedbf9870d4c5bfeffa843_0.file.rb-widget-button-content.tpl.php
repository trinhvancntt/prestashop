<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:44
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\widget\rb-widget-button-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6314ccf8923_46592000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5bc3ad7c4ce9dac68cedbf9870d4c5bfeffa843' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\widget\\rb-widget-button-content.tpl',
      1 => 1612599910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./rb-base.tpl' => 1,
  ),
),false)) {
function content_60c6314ccf8923_46592000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./rb-base.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'button'), 0, false);
?>

<div class="rb-widget-container">
	<div class="rb-button-wrapper">
		<a class="rb-button btn btn-{{ settings.button_type }} rb-size-{{ settings.size }} rb-animation-{{ settings.hover_animation }} btn-{{ settings.view }}" href="{{ settings.link.url }}">
			<span class="rb-button-content-wrapper">
				<# if ( settings.icon ) { #>
				<span class="rb-button-icon rb-align-icon-{{ settings.icon_align }}">
					<i class="{{ settings.icon }}"></i>
				</span>
				<# } #>
				<span class="rb-button-text">{{{ settings.text }}}</span>
			</span>
		</a>
	</div>
</div><?php }
}
