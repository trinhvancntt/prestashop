<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:45
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\widget\rb-widget-social-icons-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6314d58d5b5_60845680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cdad6e51efd25bebfeac17870cc21d74e96e66a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\widget\\rb-widget-social-icons-content.tpl',
      1 => 1612599910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./rb-base.tpl' => 1,
  ),
),false)) {
function content_60c6314d58d5b5_60845680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./rb-base.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'social-icons'), 0, false);
?>

<div class="rb-widget-container">
	<div class="rb-social-icons-wrapper">
		<# _.each( settings.social_icon_list, function( item ) {
			var link = item.link ? item.link.url : '',
				social = item.social.replace( 'fa fa-', '' ); #>
			<a class="rb-icon rb-social-icon rb-social-icon-{{ social }}" href="{{ link }}">
				<i class="{{ item.social }}"></i>
			</a>
		<# } ); #>
	</div>
</div><?php }
}
