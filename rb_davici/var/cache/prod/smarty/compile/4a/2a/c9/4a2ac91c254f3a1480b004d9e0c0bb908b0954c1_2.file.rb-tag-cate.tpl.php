<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-18 14:26:36
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemefunction\views\templates\hook\rb-tag-cate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60cce55c4c8135_41748464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a2ac91c254f3a1480b004d9e0c0bb908b0954c1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemefunction\\views\\templates\\hook\\rb-tag-cate.tpl',
      1 => 1612599932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cce55c4c8135_41748464 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-tag-cate">
	<?php if (!empty('categories')) {?>
		<div class="rb-category">
			<label class="title-cate">
				<i class="material-icons">edit</i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories:','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>

			</label>

			<?php $_smarty_tpl->_assignInScope('count_cate', "1");?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['count_cate']->value == 1) {?>
					<span class="rb-items">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" target="_blank" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>

						</a>
					</span>
				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>', ','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>

					<span class="rb-items">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" target="_blank" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>

						</a>
					</span>	
				<?php }?>

				<?php $_smarty_tpl->_assignInScope('count_cate', $_smarty_tpl->tpl_vars['count_cate']->value+1);?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php }?>

	<?php if (!empty($_smarty_tpl->tpl_vars['tags']->value)) {?>
		<div class="rb-tag">
			<label class="title-tag">
				<i class="material-icons">bookmark_border</i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tags:','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>

			</label>

			<?php $_smarty_tpl->_assignInScope('count_tag', "1");?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['count_tag']->value == 1) {?>
					<span class="rb-items">
						<a href="<?php ob_start();
echo htmlspecialchars(trim($_smarty_tpl->tpl_vars['tag']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,NULL,"tag=".$_prefixVariable1), ENT_QUOTES, 'UTF-8');?>
" target="_blank" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>
">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>

						</a>
					</span>
				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>', ','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>

					
					<span class="rb-items">
						<a href="<?php ob_start();
echo htmlspecialchars(trim($_smarty_tpl->tpl_vars['tag']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,NULL,"tag=".$_prefixVariable2), ENT_QUOTES, 'UTF-8');?>
" target="_blank" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>
">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>

						</a>
					</span>	
				<?php }?>

				<?php $_smarty_tpl->_assignInScope('count_tag', $_smarty_tpl->tpl_vars['count_tag']->value+1);?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php }?>
</div><?php }
}
