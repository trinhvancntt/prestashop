<?php
/* Smarty version 3.1.33, created on 2019-09-27 03:04:46
  from 'W:\xampp\htdocs\prestashop\at_undu\admincp\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8db48e253513_28151243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1d25b1959e67e828cb8fcf555ba21248bf6b55b' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\admincp\\themes\\default\\template\\content.tpl',
      1 => 1562774834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8db48e253513_28151243 (Smarty_Internal_Template $_smarty_tpl) {
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
