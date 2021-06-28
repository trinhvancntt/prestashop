<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:43
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\control\rb-control-image_dimensions-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6314bad5c23_19250749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9d7e00cfe4b32cc4aa25f53bade619ba2672698' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\control\\rb-control-image_dimensions-content.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c6314bad5c23_19250749 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-control-content">
	<# if ( data.description ) { #>
		<div class="rb-control-description">{{{ data.description }}}</div>
	<# } #>
	<div class="rb-control-field">
		<label class="rb-control-title">{{{ data.label }}}</label>
		<div class="rb-control-input-wrapper">
			<div class="rb-image-dimensions-field">
				<input type="text" data-setting="width" />
				<div class="rb-image-dimensions-field-description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Width','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</div>
			</div>
			<div class="rb-image-dimensions-separator">x</div>
			<div class="rb-image-dimensions-field">
				<input type="text" data-setting="height" />
				<div class="rb-image-dimensions-field-description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Height','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</div>
			</div>
			<button class="rb-button rb-button-success rb-image-dimensions-apply-button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</button>
		</div>
	</div>
</div><?php }
}
