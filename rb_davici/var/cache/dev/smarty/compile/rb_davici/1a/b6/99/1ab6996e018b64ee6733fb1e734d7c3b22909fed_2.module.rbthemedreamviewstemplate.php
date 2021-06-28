<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-15 05:52:17
  from 'module:rbthemedreamviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_609f99d1214046_84713498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ab6996e018b64ee6733fb1e734d7c3b22909fed' => 
    array (
      0 => 'module:rbthemedreamviewstemplate',
      1 => 1614022398,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609f99d1214046_84713498 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\rb_davici/themes/rb_davici/modules/rbthemedream/views/templates/widget/rb-countdown.tpl --><div class="rb-countdown">
	<?php if (isset($_smarty_tpl->tpl_vars['instance']->value['title']) && $_smarty_tpl->tpl_vars['instance']->value['title'] != '') {?>
		<div class="rb-coundown-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['instance']->value['title'], ENT_QUOTES, 'UTF-8');?>
</div>
	<?php }?>
	<ul
		class="rb-clock"
		data-time="<?php if (isset($_smarty_tpl->tpl_vars['instance']->value['time']) && $_smarty_tpl->tpl_vars['instance']->value['time'] != '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['instance']->value['time'], ENT_QUOTES, 'UTF-8');
} else { ?>12/30/2100 00:00:00<?php }?>"
	></ul>
	<?php if (isset($_smarty_tpl->tpl_vars['instance']->value['description']) && $_smarty_tpl->tpl_vars['instance']->value['description'] != '') {?>
		<div class="rb-coundown-description"><?php echo $_smarty_tpl->tpl_vars['instance']->value['description'];?>
</div>
	<?php }?>
</div><!-- end D:\xampp\htdocs\prestashop\rb_davici/themes/rb_davici/modules/rbthemedream/views/templates/widget/rb-countdown.tpl --><?php }
}
