<?php
/* Smarty version 3.1.33, created on 2019-09-17 11:45:53
  from 'W:\xampp\htdocs\prestashop\at_undu\themes\at_undu\modules\appagebuilder\views\templates\front\profiles\id_gencode_5c0ff59493760_1544549780.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d80ffb141eb06_11966436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '612bc19ec24a8524534bece06ecf33138821f245' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\themes\\at_undu\\modules\\appagebuilder\\views\\templates\\front\\profiles\\id_gencode_5c0ff59493760_1544549780.tpl',
      1 => 1568735153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d80ffb141eb06_11966436 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="button-list">  <li>    <a class="ap-btn-wishlist" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'leofeature','controller'=>'mywishlist'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" rel="nofollow">      <i class="icon-heart"></i>      <span class="ap-total-wishlist ap-total"></span>    </a>      </li></ul><?php }
}
