<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:42
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\control\rb-control-checkbox-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6314ab79f55_81616000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62e6332891e50b5790f63b2cb2a3bf024f1b6e5c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\control\\rb-control-checkbox-content.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c6314ab79f55_81616000 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-control-content">
	<label class="rb-control-title">
		<span>{{{ data.label }}}</span>
		<input type="checkbox" data-setting="{{ data.name }}" />
	</label>
	<# if ( data.description ) { #>
		<div class="rb-control-description">{{{ data.description }}}</div>
	<# } #>
</div><?php }
}
