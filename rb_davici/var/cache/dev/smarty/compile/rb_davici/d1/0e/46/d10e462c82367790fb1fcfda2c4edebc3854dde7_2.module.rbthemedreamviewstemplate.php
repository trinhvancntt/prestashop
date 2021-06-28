<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-24 14:57:16
  from 'module:rbthemedreamviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60846a0c245b74_40852778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd10e462c82367790fb1fcfda2c4edebc3854dde7' => 
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
function content_60846a0c245b74_40852778 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\rb_davici/modules/rbthemedream/views/templates/widget/rb-button.tpl --><div <?php echo $_smarty_tpl->tpl_vars['rb_wrapper']->value;?>
>
	<a <?php echo $_smarty_tpl->tpl_vars['rb_button']->value;?>
>
		<span <?php echo $_smarty_tpl->tpl_vars['rb_content_wrapper']->value;?>
>
			<?php if (!empty($_smarty_tpl->tpl_vars['instance']->value['icon'])) {?>
				<span <?php echo $_smarty_tpl->tpl_vars['rb_icon_align']->value;?>
>
					<i class="<?php echo htmlspecialchars(Tools::safeOutput($_smarty_tpl->tpl_vars['instance']->value['icon']), ENT_QUOTES, 'UTF-8');?>
"></i>
				</span>
			<?php }?>
			
			<span class="rb-button-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['instance']->value['text'], ENT_QUOTES, 'UTF-8');?>
</span>
		</span>
	</a>
</div><!-- end D:\xampp\htdocs\prestashop\rb_davici/modules/rbthemedream/views/templates/widget/rb-button.tpl --><?php }
}
