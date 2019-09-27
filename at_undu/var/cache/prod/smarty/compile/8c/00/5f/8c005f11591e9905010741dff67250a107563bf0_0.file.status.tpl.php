<?php
/* Smarty version 3.1.33, created on 2019-09-27 04:12:21
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\leoslideshow\views\templates\hook\status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8dc46564ed99_14818952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c005f11591e9905010741dff67250a107563bf0' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\leoslideshow\\views\\templates\\hook\\status.tpl',
      1 => 1551685753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8dc46564ed99_14818952 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['gstatus']->value) || isset($_smarty_tpl->tpl_vars['status']->value)) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['status_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_link']->value;?>
" alt="" /></a>
<?php }?>

<?php }
}
