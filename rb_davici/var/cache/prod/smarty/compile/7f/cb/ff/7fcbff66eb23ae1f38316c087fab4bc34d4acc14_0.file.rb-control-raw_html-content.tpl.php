<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:42
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\control\rb-control-raw_html-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6314adb6ed4_46084016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fcbff66eb23ae1f38316c087fab4bc34d4acc14' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\control\\rb-control-raw_html-content.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c6314adb6ed4_46084016 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-control-content">
	<# if ( data.label ) { #>
		<span class="rb-control-title">{{{ data.label }}}</span>
	<# } #>
	<div class="rb-control-raw-html {{ data.classes }}">{{{ data.raw }}}</div>
</div><?php }
}
