<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-21 06:55:40
  from 'D:\xampp\htdocs\prestashop\rb_davici\themes\rb_davici\templates\_partials\pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60a791ac551638_63275491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb75577117881b1da1d3f78a63b6947a96ebc2dd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\themes\\rb_davici\\templates\\_partials\\pagination.tpl',
      1 => 1614022406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a791ac551638_63275491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<nav class="pagination">
    <div class="col-xs-12 col-md-6 col-lg-5 text-md-left text-xs-center hidden-sm-down">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106500123260a791ac5454e0_61620677', 'pagination_summary');
?>

    </div>
    <div class="col-xs-12 col-md-6 col-lg-7">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13581028060a791ac547489_74920350', 'pagination_page_list');
?>

    </div>
</nav>

<?php }
/* {block 'pagination_summary'} */
class Block_106500123260a791ac5454e0_61620677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_summary' => 
  array (
    0 => 'Block_106500123260a791ac5454e0_61620677',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['pagination']->value['total_items'])),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'pagination_summary'} */
/* {block 'pagination_page_list'} */
class Block_13581028060a791ac547489_74920350 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_page_list' => 
  array (
    0 => 'Block_13581028060a791ac547489_74920350',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['pagination']->value['should_be_displayed']) {?>
            <ul class="page-list clearfix text-md-right text-xs-center">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['pages'], 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
                    <?php if ((($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous' || $_smarty_tpl->tpl_vars['page']->value['type'] === 'next') && $_smarty_tpl->tpl_vars['page']->value['clickable']) || $_smarty_tpl->tpl_vars['page']->value['type'] === 'page') {?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?>spacer<?php }?> <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> current <?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?>
                                <span class="spacer">&hellip;</span>
                            <?php } else { ?>
                                <a
                                        rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next<?php } else { ?>nofollow<?php }?>"
                                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?> id="infinity-url" <?php }?>
                                        class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next <?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
                                >
                                    <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    <?php } else { ?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

                                    <?php }?>
                                </a>
                            <?php }?>
                        </li>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <?php }?>
        <?php
}
}
/* {/block 'pagination_page_list'} */
}
