<?php
/* Smarty version 3.1.33, created on 2019-09-17 05:44:25
  from 'W:\xampp\htdocs\prestashop\at_undu\themes\at_undu\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d80aaf9242200_57030936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9e3205ddda439561a260b9cac6620c2dc190935' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\themes\\at_undu\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1553050754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d80aaf9242200_57030936 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info"> 
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
