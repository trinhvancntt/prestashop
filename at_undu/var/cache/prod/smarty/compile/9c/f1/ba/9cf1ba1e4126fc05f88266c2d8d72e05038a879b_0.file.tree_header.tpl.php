<?php
/* Smarty version 3.1.33, created on 2019-08-30 01:03:15
  from 'W:\xampp\htdocs\prestashop\at_undu\admincp\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d68ae13c55088_19012651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cf1ba1e4126fc05f88266c2d8d72e05038a879b' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\admincp\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1562774834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68ae13c55088_19012651 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
