<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-26 03:03:43
  from 'module:rbthemedreamviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608665cff2b191_06847474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d25f654361aeae99db46c7b6a9f3d1e4b79c2bb' => 
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
function content_608665cff2b191_06847474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin D:\xampp\htdocs\prestashop\rb_davici/modules/rbthemedream/views/templates/front/view.tpl -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1317825316608665cff21255_68515336', 'page_content');
?>
<!-- end D:\xampp\htdocs\prestashop\rb_davici/modules/rbthemedream/views/templates/front/view.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content'} */
class Block_1317825316608665cff21255_68515336 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_1317825316608665cff21255_68515336',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="rb" class="rb">
    	<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
    		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    	<?php }?>	
    </div>
<?php
}
}
/* {/block 'page_content'} */
}
