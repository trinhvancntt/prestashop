<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:32:39
  from 'D:\xampp\htdocs\prestashop\rb_davici\themes\rb_davici\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c63327319741_17279896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38817cbdb7131abf005f49e7826d66005f67fe9c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\themes\\rb_davici\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1614022400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c63327319741_17279896 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}