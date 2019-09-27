<?php
/* Smarty version 3.1.33, created on 2019-08-30 01:53:26
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\appagebuilder\views\templates\front\shortcodes\ApGmap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d68b9d60b4784_05212691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bbb1648301cc87e4cf38156b6ad53734917cbea' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\appagebuilder\\views\\templates\\front\\shortcodes\\ApGmap.tpl',
      1 => 1547087529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68b9d60b4784_05212691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('j', $_smarty_tpl->tpl_vars['i']->value-1);?>
<p><strong class="dark" style="clear:both;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['days']->value[$_smarty_tpl->tpl_vars['i']->value], ENT_QUOTES, 'UTF-8');?>
:</strong>&nbsp<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hours']->value[$_smarty_tpl->tpl_vars['j']->value], ENT_QUOTES, 'UTF-8');?>
</span></p><?php }
}
