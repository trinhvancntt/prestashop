<?php
/* Smarty version 3.1.33, created on 2019-08-30 01:03:15
  from 'W:\xampp\htdocs\prestashop\at_undu\admincp\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d68ae13c35c80_43652914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '725ffcc6df2fc50b4bf06024b63a166043c7c577' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\admincp\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1562774834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68ae13c35c80_43652914 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
