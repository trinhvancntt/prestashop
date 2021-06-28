<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-24 14:57:17
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemefunction\views\templates\hook\rb-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60846a0dbf4ba8_41083307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60d6f497fae02b44defcad3a9a1cbca047e3ce73' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemefunction\\views\\templates\\hook\\rb-add-to-cart.tpl',
      1 => 1612599932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:rbthemefunction/views/templates/hook/rb-cart.tpl' => 1,
  ),
),false)) {
function content_60846a0dbf4ba8_41083307 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" class="add-to-cart-or-refresh">
	<input type="hidden" name="token" value="<?php if ((isset($_smarty_tpl->tpl_vars['static_token']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');
}?>">
	<input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product_page_product_id">

	<?php $_smarty_tpl->_subTemplateRender('module:rbthemefunction/views/templates/hook/rb-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form><?php }
}
