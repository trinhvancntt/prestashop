<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-26 03:03:41
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\control\rb-control-repeater-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608665cd39c2c2_95586446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0e946280ecfe408472aeafff28d837c5c90065e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\control\\rb-control-repeater-content.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608665cd39c2c2_95586446 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-control-content">
	<label>
		<span class="rb-control-title">{{{ data.label }}}</span>
	</label>

	<div class="rb-repeater-fields"></div>

	<div class="rb-button-wrapper">
		<button class="rb-button rb-repeater-add">
			<span class="eicon-plus"></span>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Item','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

		</button>
	</div>
</div><?php }
}
