<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:41
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\include\rb-template-library-load-template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c63149d75442_43865721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77d60c4cf2f864454caa0c3ee3d0ad24d6d919fb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\include\\rb-template-library-load-template.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c63149d75442_43865721 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-template-library-blank-title">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Load Template From File','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

</div>

<div class="rb-template-library-blank-excerpt">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import .json Design File From Your PC','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

</div>

<form id="rb-template-library-load-template-form">
	<div id="rb-template-library-load-wrapper">
		<button id="rb-template-library-load-btn-file">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select template .json file','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

		</button>
		<input id="rb-template-library-load-template-file" type="file" name="file" required>
	</div>
	<button id="rb-template-library-load-template-submit" class="rb-button rb-button-success">
		<span class="rb-state-icon">
			<i class="fa fa-spin fa-circle-o-notch "></i>
		</span>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Load','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

	</button>
</form><?php }
}
