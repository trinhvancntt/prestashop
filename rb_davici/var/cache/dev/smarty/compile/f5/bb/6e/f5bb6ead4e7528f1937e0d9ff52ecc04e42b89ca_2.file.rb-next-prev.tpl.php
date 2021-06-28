<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-13 00:31:16
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemefunction\views\templates\hook\rb-next-prev.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_609cab94d13ed9_04959669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5bb6ead4e7528f1937e0d9ff52ecc04e42b89ca' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemefunction\\views\\templates\\hook\\rb-next-prev.tpl',
      1 => 1612599932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609cab94d13ed9_04959669 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-button-next-prev">
	<div class="product-button-prev">
		<?php if (isset($_smarty_tpl->tpl_vars['productPrev']->value) && !empty($_smarty_tpl->tpl_vars['productPrev']->value)) {?>
			<a class="btn btn-default button button-prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productPrev']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productPrev']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
				<i class="fa fa-angle-left"></i>
            </a>

            <div class="button-hover">
            	<img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productPrev']->value['image'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productPrev']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            	<h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productPrev']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h5>
            </div>
		<?php }?>
	</div>

	<div class="product-button-next">
		<?php if (isset($_smarty_tpl->tpl_vars['productNext']->value) && !empty($_smarty_tpl->tpl_vars['productNext']->value)) {?>
			<a class="btn btn-default button button-prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productNext']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productNext']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
				<i class="fa fa-angle-right"></i>
            </a>

            <div class="button-hover">
            	<img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productNext']->value['image'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productNext']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            	<h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productNext']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h5>
            </div>
		<?php }?>
	</div>
</div><?php }
}
