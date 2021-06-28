<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:42
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\control\rb-control-select_big-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6314a852a18_00383465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12826e363d6dc5c9e37ddf41938ce9a39965ba62' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\control\\rb-control-select_big-content.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c6314a852a18_00383465 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-control-content">
	<div class="rb-control-field">
		<label class="rb-control-title">{{{ data.label }}}</label>
		<div class="rb-control-input-wrapper">
			<select data-setting="{{ data.name }}" 	<# if ( data.multiple ) { #> multiple <# } #>>
				<# _.each( data.options, function( option_title, option_value ) { #>
				<option value="{{ option_value }}">{{{ option_title }}}</option>
				<# } ); #>
			</select>
		</div>
	</div>

	<# if ( data.description ) { #>
	<div class="rb-control-description">{{{ data.description }}}</div>
	<# } #>
</div><?php }
}
