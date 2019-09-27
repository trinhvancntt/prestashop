<?php
/* Smarty version 3.1.33, created on 2019-09-27 03:05:11
  from 'W:\xampp\htdocs\prestashop\at_undu\themes\at_undu\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8db4a7b48497_62375298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51debf05908934fc82dc5842ca9a79de32541518' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\themes\\at_undu\\templates\\page.tpl',
      1 => 1553050754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8db4a7b48497_62375298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_217602345d8db4a7b40797_50304320', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_14420559125d8db4a7b40791_66570294 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_14739807395d8db4a7b40791_30372998 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14420559125d8db4a7b40791_66570294', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_8117330295d8db4a7b48495_89431332 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_10766488775d8db4a7b48498_69275199 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2548400265d8db4a7b44614_77677767 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8117330295d8db4a7b48495_89431332', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10766488775d8db4a7b48498_69275199', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_12054364395d8db4a7b48497_64667194 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_11919592815d8db4a7b48490_59010537 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12054364395d8db4a7b48497_64667194', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_217602345d8db4a7b40797_50304320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_217602345d8db4a7b40797_50304320',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_14739807395d8db4a7b40791_30372998',
  ),
  'page_title' => 
  array (
    0 => 'Block_14420559125d8db4a7b40791_66570294',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_2548400265d8db4a7b44614_77677767',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_8117330295d8db4a7b48495_89431332',
  ),
  'page_content' => 
  array (
    0 => 'Block_10766488775d8db4a7b48498_69275199',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11919592815d8db4a7b48490_59010537',
  ),
  'page_footer' => 
  array (
    0 => 'Block_12054364395d8db4a7b48497_64667194',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14739807395d8db4a7b40791_30372998', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2548400265d8db4a7b44614_77677767', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11919592815d8db4a7b48490_59010537', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
