<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-15 12:53:02
  from 'D:\xampp\htdocs\prestashop\rb_davici\admincp\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_609ffc6eec39b6_41119344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9496a6c8af60266699f8c11018f12fd9f322a9ef' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\admincp\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1610363806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609ffc6eec39b6_41119344 (Smarty_Internal_Template $_smarty_tpl) {
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
