<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-24 14:57:18
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemefunction\views\templates\hook\rb-brand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60846a0ee181f9_83094557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b199d74c553945c4690387e06c69a2e3aeac4e85' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemefunction\\views\\templates\\hook\\rb-brand.tpl',
      1 => 1612599932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60846a0ee181f9_83094557 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="h3 product-brand" itemprop="brand">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand: ','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>

	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8');?>
" tabindex="0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</a>
</h3><?php }
}
