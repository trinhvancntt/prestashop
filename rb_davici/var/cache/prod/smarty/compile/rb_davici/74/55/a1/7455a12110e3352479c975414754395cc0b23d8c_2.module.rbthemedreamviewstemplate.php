<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-02 15:32:11
  from 'module:rbthemedreamviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603ea0cb484291_91605452',
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
function content_603ea0cb484291_91605452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1268853220603ea0cb482e20_93604867', 'rbthemedream');
}
/* {block 'rbthemedream'} */
class Block_1268853220603ea0cb482e20_93604867 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'rbthemedream' => 
  array (
    0 => 'Block_1268853220603ea0cb482e20_93604867',
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
