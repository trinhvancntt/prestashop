<?php
/* Smarty version 3.1.33, created on 2019-09-25 01:49:28
  from 'W:\xampp\htdocs\prestashop\at_undu\themes\at_undu\modules\leoblog\views\templates\hook\categories_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8affe8aa4387_69887949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5b7654ebd0667e19ac436a7a061892028145397' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\themes\\at_undu\\modules\\leoblog\\views\\templates\\hook\\categories_menu.tpl',
      1 => 1553050753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8affe8aa4387_69887949 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Block categories module -->
    <?php if ($_smarty_tpl->tpl_vars['tree']->value) {?>
    <div id="categories_blog_menu" class="block blog-menu hidden-sm-down">
      <h4 class="title_block"><?php if (isset($_smarty_tpl->tpl_vars['currentCategory']->value)) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentCategory']->value->title,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blog Categories','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}?></h4>
        <div class="block_content">
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>
        </div>
    </div>
    <?php }?>
    <!-- /Block categories module -->
<?php }
}
