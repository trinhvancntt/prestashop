<?php
/* Smarty version 3.1.33, created on 2019-09-25 01:49:28
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\leoblog\views\templates\hook\left_recent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8affe8b50180_99252321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db02766a5600b86768c9601533340201d67f310f' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\leoblog\\views\\templates\\hook\\left_recent.tpl',
      1 => 1548295651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8affe8b50180_99252321 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\xampp\\htdocs\\prestashop\\at_undu\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<?php if (isset($_smarty_tpl->tpl_vars['leading_blogs']->value) && !empty($_smarty_tpl->tpl_vars['leading_blogs']->value)) {?>
    <section id="blogRecentBlog" class="block leo-block-sidebar hidden-sm-down">
        <h4 class='title_block'><a href=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recent Articles','mod'=>'leoblog'),$_smarty_tpl ) );?>
</a></h4>
            <div class="block_content products-block">
                <ul class="lists">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leading_blogs']->value, 'blog', false, NULL, 'leading_blog', array (
  'last' => true,
  'first' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['total'];
?>
                        <li class="list-item clearfix<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['last'] : null)) {?> last_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['first'] : null)) {?> first_item<?php } else {
}?>">
                            <div class="blog-image">
                                <a class="products-block-image" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                    <img alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['preview_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img-fluid">
                                </a>
                            </div>
                            <div class="blog-content">
                            	<h3 class="post-name"><a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></h3>
                            	<span class="info"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['blog']->value['date_add'],"%b %d, %Y"), ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                        </li> 
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
    </section>
<?php }?>

<?php }
}
