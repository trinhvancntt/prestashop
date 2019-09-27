<?php
/* Smarty version 3.1.33, created on 2019-09-25 01:49:28
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\leoblog\views\templates\hook\left_leoblogtags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8affe8bd1008_91807480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d562922a3fb3fce6c81d8e1c3ee4e6ed9f7206b' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\leoblog\\views\\templates\\hook\\left_leoblogtags.tpl',
      1 => 1548295651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8affe8bd1008_91807480 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['leoblogtags']->value) && !empty($_smarty_tpl->tpl_vars['leoblogtags']->value)) {?>
    <section id="tags_blog_block_left" class="block leo-blog-tags hidden-sm-down">
        <h4 class='title_block'><a href=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tags Post','mod'=>'leoblog'),$_smarty_tpl ) );?>
</a></h4>
        <div class="block_content clearfix">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leoblogtags']->value, 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </section>
<?php }
}
}
