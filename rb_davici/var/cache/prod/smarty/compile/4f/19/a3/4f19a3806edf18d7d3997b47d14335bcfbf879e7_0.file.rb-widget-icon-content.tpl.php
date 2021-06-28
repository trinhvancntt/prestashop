<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:45
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\widget\rb-widget-icon-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6314d0220b7_27240954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f19a3806edf18d7d3997b47d14335bcfbf879e7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\widget\\rb-widget-icon-content.tpl',
      1 => 1612599910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./rb-base.tpl' => 1,
  ),
),false)) {
function content_60c6314d0220b7_27240954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./rb-base.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'icon'), 0, false);
?>

<div class="rb-widget-container">
	<# var link = settings.link.url ? 'href="' + settings.link.url + '"' : '',
	iconTag = link ? 'a' : 'div'; #>
	<div class="rb-icon-wrapper">
		<{{{ iconTag }}} class="rb-icon rb-animation-{{ settings.hover_animation }}" {{{ link }}}>
			<i class="{{ settings.icon }}"></i>
		</{{{ iconTag }}}>
	</div>
</div><?php }
}
