<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:42
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\control\rb-control-modules-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6314aa8c991_72141147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '185dfff9f95fd29be4d5b067e53cdf78d8a8aa4d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\control\\rb-control-modules-content.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c6314aa8c991_72141147 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-control-content">
	<# if ( data.description ) { #>
		<div class="rb-control-description">{{{ data.description }}}</div>
		<# } 
	#>
	<div class="rb-control-field">
		<label class="rb-control-title">{{{ data.label }}}</label>
		<div class="rb-control-input-wrapper">
			<select data-setting="{{ data.name }}">
				<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Module','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</option>
				<# _.each( data.options, function( module ) { #>
				<option value="{{ module.name }}">{{{ module.name }}}</option>
				<# } ); #>
			</select>
		</div>
	</div>
	<div class="rb-control-field">
		<label class="rb-control-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hook','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</label>
		<div class="rb-control-input-wrapper">
			<input type="text" class="rb-control-autocomplete-search" placeholder="{{ data.placeholder }}" />
		</div>
	</div>
</div><?php }
}
