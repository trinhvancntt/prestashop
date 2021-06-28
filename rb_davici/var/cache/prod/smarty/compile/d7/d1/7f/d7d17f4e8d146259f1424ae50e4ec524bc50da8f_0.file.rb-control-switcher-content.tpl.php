<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:42
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\control\rb-control-switcher-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6314abdb7b2_21900522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7d17f4e8d146259f1424ae50e4ec524bc50da8f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\control\\rb-control-switcher-content.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c6314abdb7b2_21900522 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-control-content">
	<div class="rb-control-field">
		<label class="rb-control-title">{{{ data.label }}}</label>
		<div class="rb-control-input-wrapper">
			<label class="rb-switch">
				<input type="checkbox" data-setting="{{ data.name }}" class="rb-switch-input" value="{{ data.return_value }}">
				<span class="rb-switch-label" data-on="{{ data.label_on }}" data-off="{{ data.label_off }}"></span>
				<span class="rb-switch-handle"></span>
			</label>
		</div>
	</div>
	
	<# if ( data.description ) { #>
		<div class="rb-control-description">{{{ data.description }}}</div>
	<# } #>
</div><?php }
}
