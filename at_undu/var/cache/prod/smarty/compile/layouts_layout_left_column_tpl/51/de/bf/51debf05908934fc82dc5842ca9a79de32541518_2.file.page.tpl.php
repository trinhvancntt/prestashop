<?php
/* Smarty version 3.1.33, created on 2019-08-30 01:53:24
  from 'W:\xampp\htdocs\prestashop\at_undu\themes\at_undu\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d68b9d4ea6c86_04036242',
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
function content_5d68b9d4ea6c86_04036242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10066234315d68b9d4ea2e07_59829464', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_2951857265d68b9d4ea2e06_55363822 extends Smarty_Internal_Block
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
class Block_13871265935d68b9d4ea2e08_04718294 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2951857265d68b9d4ea2e06_55363822', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_4912109645d68b9d4ea6c88_93309787 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_5379718905d68b9d4ea6c81_28854962 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2198606055d68b9d4ea6c81_40305626 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4912109645d68b9d4ea6c88_93309787', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5379718905d68b9d4ea6c81_28854962', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_17009803375d68b9d4ea6c86_36882110 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_15613155745d68b9d4ea6c85_29767576 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17009803375d68b9d4ea6c86_36882110', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_10066234315d68b9d4ea2e07_59829464 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10066234315d68b9d4ea2e07_59829464',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_13871265935d68b9d4ea2e08_04718294',
  ),
  'page_title' => 
  array (
    0 => 'Block_2951857265d68b9d4ea2e06_55363822',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_2198606055d68b9d4ea6c81_40305626',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4912109645d68b9d4ea6c88_93309787',
  ),
  'page_content' => 
  array (
    0 => 'Block_5379718905d68b9d4ea6c81_28854962',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_15613155745d68b9d4ea6c85_29767576',
  ),
  'page_footer' => 
  array (
    0 => 'Block_17009803375d68b9d4ea6c86_36882110',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13871265935d68b9d4ea2e08_04718294', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2198606055d68b9d4ea6c81_40305626', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15613155745d68b9d4ea6c85_29767576', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
