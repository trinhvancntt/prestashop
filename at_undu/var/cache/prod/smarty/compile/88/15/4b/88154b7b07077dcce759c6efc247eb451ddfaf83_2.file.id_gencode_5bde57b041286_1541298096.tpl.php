<?php
/* Smarty version 3.1.33, created on 2019-09-26 12:56:00
  from 'W:\xampp\htdocs\prestashop\at_undu\themes\at_undu\modules\appagebuilder\views\templates\front\profiles\id_gencode_5bde57b041286_1541298096.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8ceda0b23905_00676825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88154b7b07077dcce759c6efc247eb451ddfaf83' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\themes\\at_undu\\modules\\appagebuilder\\views\\templates\\front\\profiles\\id_gencode_5bde57b041286_1541298096.tpl',
      1 => 1569516960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8ceda0b23905_00676825 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="button-list">  <li>    <a class="ap-btn-wishlist" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'leofeature','controller'=>'mywishlist'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" rel="nofollow">      <i class="nova-heart"></i>      <span class="ap-total-wishlist ap-total"></span>    </a>      </li></ul><?php }
}
