<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-26 03:03:39
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\include\rb-template-library-save-template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608665cba19bc7_72347821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42852587cb9f83d173fc03a78a8d37a76ac7f7b7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\include\\rb-template-library-save-template.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608665cba19bc7_72347821 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-template-library-blank-title">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save Your To Library','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

</div>

<div class="rb-template-library-blank-excerpt">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your designs will be available for export and reuse on any page or website','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

</div>

<form id="rb-template-library-save-template-form">
	<input id="rb-template-library-save-template-name"
		name="title"
		placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter Template Name','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
"
		required
	>
	<button id="rb-template-library-save-template-submit" class="rb-button rb-button-success">
		<span class="rb-state-icon">
			<i class="fa fa-spin fa-circle-o-notch "></i>
		</span>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

	</button>
</form>

<div class="rb-template-library-blank-footer">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'What is Library','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

	<a class="rb-template-library-blank-footer-link" href="#" target="_blank">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read our tutorial on using Library templates','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

	</a>
</div><?php }
}
