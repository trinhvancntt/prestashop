<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-02 15:32:06
  from 'module:rbthemefunctionviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603ea0c61c5656_61581951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1315805672cc1d5d6cf2e1b162e0f97a8b8f97f' => 
    array (
      0 => 'module:rbthemefunctionviewstempl',
      1 => 1612599932,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603ea0c61c5656_61581951 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-content">
	<div class="modal-header">
		<h5 class="modal-title text-xs-center">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete selected item ?','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>

		</h5>
	</div>

	<div class="modal-footer">
		<button type="button" class="rb-modal-no rb-modal-accept btn btn-primary" data-dismiss="modal">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>

		</button>

		<button type="button" class="rb-modal-yes rb-modal-accept btn btn-primary">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>

		</button>
	</div>
</div><?php }
}
