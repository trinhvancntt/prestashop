<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-02 15:32:10
  from 'D:\xampp\htdocs\prestashop\rb_davici\themes\rb_davici\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603ea0ca6a0a71_73136427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6043f11658569ae4e5571a3a4db1127030156b99' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\themes\\rb_davici\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1614022400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-list/product-".((string)$_smarty_tpl->tpl_vars[\'rb_list\']->value).".tpl' => 2,
    'file:catalog/_partials/miniatures/product-list/product-1.tpl' => 1,
  ),
),false)) {
function content_603ea0ca6a0a71_73136427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2101050684603ea0ca698017_72667893', 'product_miniature_item');
?>

<?php }
/* {block 'product_miniature_item'} */
class Block_2101050684603ea0ca698017_72667893 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_2101050684603ea0ca698017_72667893',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_smarty_tpl->tpl_vars['rb_list']->value) && $_smarty_tpl->tpl_vars['rb_list']->value != '') {?>
      <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-list/product-".((string)$_smarty_tpl->tpl_vars['rb_list']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } elseif (Configuration::get('RBTHEMEDREAM_PRODUCT_LIST') != '') {?>
      <?php $_smarty_tpl->_assignInScope('rb_list', Configuration::get('RBTHEMEDREAM_PRODUCT_LIST'));?>

      <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-list/product-".((string)$_smarty_tpl->tpl_vars['rb_list']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } else { ?>
      <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-list/product-1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}
}
/* {/block 'product_miniature_item'} */
}
