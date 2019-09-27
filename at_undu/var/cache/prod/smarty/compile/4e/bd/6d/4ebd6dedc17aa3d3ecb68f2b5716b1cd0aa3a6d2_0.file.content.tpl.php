<?php
/* Smarty version 3.1.33, created on 2019-09-27 03:04:41
  from 'W:\xampp\htdocs\prestashop\at_undu\admincp\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8db489096014_69521450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ebd6dedc17aa3d3ecb68f2b5716b1cd0aa3a6d2' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\admincp\\themes\\new-theme\\template\\content.tpl',
      1 => 1562774834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8db489096014_69521450 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
