<?php
/* Smarty version 3.1.33, created on 2019-08-30 02:47:30
  from 'W:\xampp\htdocs\prestashop\at_undu\themes\at_undu\modules\appagebuilder\views\templates\hook\letter-blog\BlogItem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d68c682748104_41475539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '666d24427095278945c217ad972079b9307c47dd' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\themes\\at_undu\\modules\\appagebuilder\\views\\templates\\hook\\letter-blog\\BlogItem.tpl',
      1 => 1566804697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68c682748104_41475539 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\xampp\\htdocs\\prestashop\\at_undu\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
<div class="blog-container" itemscope itemtype="https://schema.org/Blog">
    <div class="left-block">
        <div class="blog-image-container">
            <a class="blog_img_link" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" itemprop="url">
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_sima']) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_sima']) {?>
				<img class="img-fluid" src="<?php if ((isset($_smarty_tpl->tpl_vars['blog']->value['preview_thumb_url']) && $_smarty_tpl->tpl_vars['blog']->value['preview_thumb_url'] != '')) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['preview_thumb_url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['preview_url'], ENT_QUOTES, 'UTF-8');
}?>" 
					 alt="<?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['legend'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['legend'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" 
					 title="<?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['legend'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['legend'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" 
					 <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_width'])) {?>width="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_width'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
					 <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_height'])) {?> height="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_height'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
					 itemprop="image" />
			<?php }?>
            </a>
        </div>
    </div>
    <div class="right-block">
    	<div class="blog-meta">
        	
        	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_saut']) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_saut']) {?>
				<span class="author">
					<i class="fa fa-user-o"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
<span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['author'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
				</span>
			<?php }?>

        	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scre']) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scre']) {?>
				<span class="created">
					<time class="date" datetime="<?php echo htmlspecialchars(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"), ENT_QUOTES, 'UTF-8');?>
">
						<i class="fa fa-calendar-o"></i>
						<span>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%d"),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
<!-- month-->
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%B"),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
<!-- day of month -->
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
   <!-- year -->
						</span>
					</time>
				</span>
			<?php }?>

	        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_title']) && $_smarty_tpl->tpl_vars['formAtts']->value['show_title']) {?>
	        	<h5 class="blog-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['blog']->value['title']),80,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h5>
	        <?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scoun']) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scoun']) {?>
				<span class="nbcomment">
					<span class="icon-comment"><i class="fa fa-comment-o"></i> <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['blog']->value['comment_count']), ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'comment','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
				</span>
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_shits']) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_shits']) {?>
				<span class="hits">
					<span class="fa fa-heart-o"> <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['blog']->value['hits']), ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'hit','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span> 
				</span>	
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_desc']) && $_smarty_tpl->tpl_vars['formAtts']->value['show_desc']) {?>
		        <p class="blog-desc" itemprop="description">
		            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['blog']->value['description']),100,'...' )), ENT_QUOTES, 'UTF-8');?>

		        </p>
	        <?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scat']) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scat']) {?>
				<span class="cat"> <span class="icon-list"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span> 
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['category_link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['category_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['category_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
				</span>
			<?php }?>
	    </div>
    </div>
</div>

<?php }
}
