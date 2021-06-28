<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-24 14:57:19
  from 'module:rbthemedreamviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60846a0f9591b1_04988575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7455a12110e3352479c975414754395cc0b23d8c' => 
    array (
      0 => 'module:rbthemedreamviewstemplate',
      1 => 1612599910,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60846a0f9591b1_04988575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin D:\xampp\htdocs\prestashop\rb_davici/modules/rbthemedream/views/templates/hook/rb_content.tpl --><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77239919360846a0f957a03_30939433', 'rbthemedream');
?>
<!-- end D:\xampp\htdocs\prestashop\rb_davici/modules/rbthemedream/views/templates/hook/rb_content.tpl --><?php }
/* {block 'rbthemedream'} */
class Block_77239919360846a0f957a03_30939433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'rbthemedream' => 
  array (
    0 => 'Block_77239919360846a0f957a03_30939433',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php
}
}
/* {/block 'rbthemedream'} */
}
