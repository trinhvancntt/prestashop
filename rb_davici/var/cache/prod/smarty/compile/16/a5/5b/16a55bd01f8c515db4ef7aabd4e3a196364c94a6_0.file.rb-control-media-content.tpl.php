<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:43
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\control\rb-control-media-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6314b217a94_99905264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16a55bd01f8c515db4ef7aabd4e3a196364c94a6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\control\\rb-control-media-content.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c6314b217a94_99905264 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-control-content">
	<div class="rb-control-field">
		<label class="rb-control-title">{{{ data.label }}}</label>
		<div class="rb-control-input-wrapper">
			<div class="rb-control-media">
				<div class="rb-control-media-upload-button">
					<i class="fa fa-plus-circle"></i>
				</div>
				<div class="rb-control-media-image-area">
					<div class="rb-control-media-image" style="background-image: url({{ data.controlValue.url }});"></div>
					<div class="rb-control-media-delete"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</div>
				</div>
			</div>
			<input type="text"
				id="rb-control-media-field-{{ data._cid }}"
				class="rb-control-media-field"
				value="{{ data.controlValue.url }}"
			/>
		</div>

		<# if ( data.description ) { #>
			<div class="rb-control-description">{{{ data.description }}}</div>
		<# } #>

		<input type="hidden" data-setting="{{ data.name }}"/>
	</div>
</div><?php }
}
