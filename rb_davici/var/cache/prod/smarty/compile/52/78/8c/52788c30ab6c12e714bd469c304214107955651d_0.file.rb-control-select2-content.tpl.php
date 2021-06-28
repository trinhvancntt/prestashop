<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:44
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\control\rb-control-select2-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6314c1410f0_03980611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52788c30ab6c12e714bd469c304214107955651d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\control\\rb-control-select2-content.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c6314c1410f0_03980611 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-control-content">
	<div class="rb-control-field">
		<label class="rb-control-title">{{{ data.label }}}</label>
		<div class="rb-control-input-wrapper">
			<# var multiple = ( data.multiple ) ? 'multiple' : ''; #>
			<select class="rb-select2" type="select2" {{ multiple }} data-setting="{{ data.name }}">
				<# _.each( data.options, function( option_title, option_value ) {
				var value = data.controlValue;
				if ( typeof value == 'string' ) {
				var selected = ( option_value === value ) ? 'selected' : '';
				} else {
				var selected = ( -1 !== value.indexOf( option_value ) ) ? 'selected' : '';
				}
				#>
					<option {{ selected }} value="{{ option_value }}">{{{ option_title }}}</option>
				<# } ); #>
			</select>
		</div>
	</div>
	<# if ( data.description ) { #>
		<div class="rb-control-description">{{{ data.description }}}</div>
	<# } #>
</div><?php }
}
