<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:40
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\include\rb-panel-schemes-typography.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c63148ccc090_39302440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ba01d9a86473df4864b20dd59e3007d47e3404c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\include\\rb-panel-schemes-typography.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c63148ccc090_39302440 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-panel-scheme-buttons">
	<div class="rb-panel-scheme-button-wrapper rb-panel-scheme-reset">
		<button class="rb-button">
			<i class="fa fa-undo"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

		</button>
	</div>
	<div class="rb-panel-scheme-button-wrapper rb-panel-scheme-discard">
		<button class="rb-button">
			<i class="fa fa-times"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discard','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

		</button>
	</div>
	<div class="rb-panel-scheme-button-wrapper rb-panel-scheme-save">
		<button class="rb-button rb-button-success" disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</button>
	</div>
</div>
<div class="rb-panel-scheme-items"></div><?php }
}
