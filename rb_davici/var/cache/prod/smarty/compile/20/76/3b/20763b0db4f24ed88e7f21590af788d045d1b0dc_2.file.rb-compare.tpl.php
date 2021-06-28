<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 06:43:08
  from 'D:\xampp\htdocs\prestashop\rb_davici\themes\rb_davici\modules\rbthemefunction\views\templates\hook\rb-compare.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c5e13c28db39_09275951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20763b0db4f24ed88e7f21590af788d045d1b0dc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\themes\\rb_davici\\modules\\rbthemefunction\\views\\templates\\hook\\rb-compare.tpl',
      1 => 1617188039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c5e13c28db39_09275951 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_compare']->value['url'], ENT_QUOTES, 'UTF-8');?>
" data-id_product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Comparison','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" class="rb-compare-link rb-btn-product <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_class']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
	<i class="icon-random"></i>
	<span class="icon-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
</a><?php }
}
