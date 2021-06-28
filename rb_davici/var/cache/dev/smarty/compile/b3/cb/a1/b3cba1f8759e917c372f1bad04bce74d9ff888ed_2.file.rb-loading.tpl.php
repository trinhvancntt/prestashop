<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-24 14:57:20
  from 'D:\xampp\htdocs\prestashop\rb_davici\themes\rb_davici\modules\rbthemefunction\views\templates\hook\rb-loading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60846a1059d190_21507388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3cba1f8759e917c372f1bad04bce74d9ff888ed' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\themes\\rb_davici\\modules\\rbthemefunction\\views\\templates\\hook\\rb-loading.tpl',
      1 => 1614022398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60846a1059d190_21507388 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-loading" style="background: <?php if (isset($_smarty_tpl->tpl_vars['color_back']->value) && $_smarty_tpl->tpl_vars['color_back']->value != '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['color_back']->value, ENT_QUOTES, 'UTF-8');
} else { ?>#f1f1f1<?php }?>">
	<div id="loadFacebookG">
		<div id="blockG_1" class="facebook_blockG"></div>
		<div id="blockG_2" class="facebook_blockG"></div>
		<div id="blockG_3" class="facebook_blockG"></div>
	</div>
</div><?php }
}
