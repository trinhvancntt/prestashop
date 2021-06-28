<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:41
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\include\rb-template-library-template-local.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c63149afce54_07818866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fae39cbd76dfce57efde63258d5e62e26b39e7f0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\include\\rb-template-library-template-local.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c63149afce54_07818866 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-template-library-template-icon">
	<i class="fa fa-{{ 'section' === type ? 'columns' : 'file-text-o' }}"></i>
</div>

<div class="rb-template-library-template-name">{{{ title }}}</div>

<div class="rb-template-library-template-controls">
	<button class="rb-template-library-template-insert rb-button rb-button-success">
		<i class="eicon-file-download"></i>
		<span class="rb-button-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Insert','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</span>
	</button>

	<div class="rb-template-library-template-export">
		<a href="{{ export_link }}">
			<i class="fa fa-sign-out"></i>
			<span class="rb-template-library-template-control-title">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

			</span>
		</a>
	</div>

	<div class="rb-template-library-template-delete">
		<i class="fa fa-trash-o"></i>
		<span class="rb-template-library-template-control-title">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

		</span>
	</div>

	<div class="rb-template-library-template-preview">
		<i class="eicon-zoom-in"></i>
		<span class="rb-template-library-template-control-title">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

		</span>
	</div>
</div><?php }
}
