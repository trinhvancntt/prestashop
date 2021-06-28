<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-24 14:57:19
  from 'module:rbthemedreamviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60846a0f512707_97132321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bc8f1b3b65ef87922345ca426935fd3af1c29b6' => 
    array (
      0 => 'module:rbthemedreamviewstemplate',
      1 => 1616669426,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60846a0f512707_97132321 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\prestashop\\rb_davici\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!-- begin D:\xampp\htdocs\prestashop\rb_davici/themes/rb_davici/modules/rbthemedream/views/templates/widget/rb-blog.tpl --><?php if (isset($_smarty_tpl->tpl_vars['posts']->value) && count($_smarty_tpl->tpl_vars['posts']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['view']->value == 'carousel') {?>
        <section class="rb-blog-posts rb-blog-posts-carousel rb-slick-slider rbthemeblog">
            <div class="rb-blog-carousel simpleblog-posts <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" data-slider_options='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['options']->value ));?>
'>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                    <div class="simpleblog-posts-column">
                        <?php if (isset($_smarty_tpl->tpl_vars['post']->value['banner_thumb'])) {?>
                            <div class="rb-left-block">
                                <div class="rb-blog-image-container">
                                    <a class="rb-blog-img-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
" itemprop="url">
                                        <img class="img-fluid slick-loading" data-lazy="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['banner_thumb'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
                                        <div class="rb-image-loading"></div>
                                    </a>
                                    <div class="rb-date-block">
                                        <span class="day">
                                            <?php $_smarty_tpl->_assignInScope('blog_day', smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['post']->value['date_add']),"%e"));?>    
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['blog_day']->value,'mod'=>'rbthemeblog'),$_smarty_tpl ) );?>
           
                                        </span>
    
                                        <span class="month">
                                            <?php $_smarty_tpl->_assignInScope('blog_month', smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['post']->value['date_add']),"%b"));?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['blog_month']->value,'mod'=>'rbthemeblog'),$_smarty_tpl ) );?>

                                        </span>
    
                                                                            </div>
                                </div>
                            </div>
                        <?php }?>

                        <div class="right-block">
                            <div class="rb-blog-meta">
                                <div class="rb-blog-category">
                                    <a  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['category_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['category'], ENT_QUOTES, 'UTF-8');?>
">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['category'], ENT_QUOTES, 'UTF-8');?>

                                    </a>
                                </div>
                                <h5 class="rb-blog-title" itemprop="name">
                                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                                </h5>

                                <div class="rb-blog-desc" itemprop="description">
                                    <?php echo $_smarty_tpl->tpl_vars['post']->value['short_content'];?>

                                </div>

                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
" class="post-btn-more"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read More','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</a>
                            </div>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </section>
    <?php } else { ?>
        <section class="rb-blog-posts rb-blog-posts-grid rbthemeblog">
            <div class="row simpleblog-posts">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                    <div class="simpleblog-posts-column <?php echo $_smarty_tpl->tpl_vars['options']->value['gridClasses'];?>
">
                        <div class="simpleblog-posts-column">
                            <?php if (isset($_smarty_tpl->tpl_vars['post']->value['banner_thumb'])) {?>
                                <div class="rb-left-block">
                                    <div class="rb-blog-image-container">
                                        <a class="rb-blog-img-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
" itemprop="url">
                                            <img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['banner_thumb'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
                                        </a>
                                    </div>
                                </div>
                            <?php }?>

                            <div class="right-block">
                                <div class="rb-blog-meta">
                                    <div class="rb-blog-category">
                                        <a  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['category_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['category'], ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['category'], ENT_QUOTES, 'UTF-8');?>

                                        </a>
                                    </div>

                                    <h5 class="rb-blog-title" itemprop="name">
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                                    </h5>

                                    <div class="rb-blog-desc" itemprop="description">
                                        <?php echo $_smarty_tpl->tpl_vars['post']->value['short_content'];?>

                                    </div>
                                    
                                    <div class="rb-date-block">
                                        <span class="day">
                                            <?php $_smarty_tpl->_assignInScope('blog_day', smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['post']->value['date_add']),"%e"));?>    
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['blog_day']->value,'mod'=>'rbthemeblog'),$_smarty_tpl ) );?>
           
                                        </span>

                                        <span class="month">
                                            <?php $_smarty_tpl->_assignInScope('blog_month', smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['post']->value['date_add']),"%b"));?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['blog_month']->value,'mod'=>'rbthemeblog'),$_smarty_tpl ) );?>

                                        </span>

                                                                            </div>

                                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
" class="post-btn-more"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read More','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </section>
    <?php }?>
    <div>
        <div class="blog-viewall">
            <a class="btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_list_blog']->value, ENT_QUOTES, 'UTF-8');?>
" title="View All"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View All','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</a>
        </div>
    </div>
<?php }?><!-- end D:\xampp\htdocs\prestashop\rb_davici/themes/rb_davici/modules/rbthemedream/views/templates/widget/rb-blog.tpl --><?php }
}
