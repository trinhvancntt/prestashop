<?php
/* Smarty version 3.1.33, created on 2019-09-27 04:22:20
  from 'W:\xampp\htdocs\prestashop\at_undu\themes\at_undu\templates\_partials\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8dc6bc132416_54008997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75daf85ac14faa38c899e75af12b3a0cc04eb244' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\themes\\at_undu\\templates\\_partials\\breadcrumb.tpl',
      1 => 1566874732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8dc6bc132416_54008997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
  <div class="container">
    <div class="box-breadcrumb">
      <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category' && $_smarty_tpl->tpl_vars['category']->value['image']['large']['url'] != '') {?>
        <h1 class="h1 category-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
      <?php }?>
      <ol itemscope itemtype="http://schema.org/BreadcrumbList">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5994736075d8dc6bc122a16_22753600', 'breadcrumb');
?>

      </ol>
    </div>
  </div>
  
  <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category' && $_smarty_tpl->tpl_vars['category']->value['image']['large']['url'] != '') {?>
    <?php if ($_smarty_tpl->tpl_vars['category']->value['image']) {?>
      <div class="category-cover hidden-sm-down">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
">
      </div>
    <?php }?>
  <?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars['tpl_uri']->value) && $_smarty_tpl->tpl_vars['tpl_uri']->value) {?>
      <div class="category-cover hidden-sm-down">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tpl_uri']->value, ENT_QUOTES, 'UTF-8');?>
/assets/img/bg-breadcrumb.jpg" class="img-fluid" alt="Breadcrumb image">
      </div>
    <?php } else { ?>  
      <div class="image-breadcrumb"></div>
    <?php }?>
  <?php }?>
</nav><?php }
/* {block 'breadcrumb_item'} */
class Block_12277926485d8dc6bc126898_78807186 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
              <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
            </a>
            <meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
          </li>
        <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_5994736075d8dc6bc122a16_22753600 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_5994736075d8dc6bc122a16_22753600',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_12277926485d8dc6bc126898_78807186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12277926485d8dc6bc126898_78807186', 'breadcrumb_item', $this->tplIndex);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block 'breadcrumb'} */
}
