<?php
/* Smarty version 3.1.33, created on 2019-09-27 03:05:11
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\appagebuilder\views\templates\hook\ApModule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8db4a762bb14_75950830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0d329877beb16e958b912cfaabd49e69ab3db86' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\appagebuilder\\views\\templates\\hook\\ApModule.tpl',
      1 => 1547087530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8db4a762bb14_75950830 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';
echo $_smarty_tpl->tpl_vars['apContent']->value;
echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';
}
}
