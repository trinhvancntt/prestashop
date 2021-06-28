<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-25 23:37:47
  from 'D:\xampp\htdocs\prestashop\rb_davici\admincp\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6086358b6efec8_02744476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e1236854b46b829e7be7e1e2d914790a93b27e3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\admincp\\themes\\default\\template\\content.tpl',
      1 => 1610363806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6086358b6efec8_02744476 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
