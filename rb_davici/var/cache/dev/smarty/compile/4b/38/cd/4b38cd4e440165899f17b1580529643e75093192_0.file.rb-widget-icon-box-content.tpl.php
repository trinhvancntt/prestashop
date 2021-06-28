<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-26 03:03:42
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\widget\rb-widget-icon-box-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608665ce0985c0_07160277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b38cd4e440165899f17b1580529643e75093192' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\widget\\rb-widget-icon-box-content.tpl',
      1 => 1612599910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./rb-base.tpl' => 1,
  ),
),false)) {
function content_608665ce0985c0_07160277 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./rb-base.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'icon-box'), 0, false);
?>

<div class="rb-widget-container">
	<# var link = settings.link.url ? 'href="' + settings.link.url + '"' : '',
		iconTag = link ? 'a' : 'span'; #>
	<div class="rb-icon-box-wrapper">
		<div class="rb-icon-box-icon">
			<{{{ iconTag + ' ' + link }}} class="rb-icon rb-animation-{{ settings.hover_animation }}">
			<i class="{{ settings.icon }}"></i>
			</{{{ iconTag }}}>
		</div>
		<div class="rb-icon-box-content">
			<{{{ settings.title_size }}} class="rb-icon-box-title">
			<{{{ iconTag + ' ' + link }}}>{{{ settings.title_text }}}</{{{ iconTag }}}>
			</{{{ settings.title_size }}}>
			<div class="rb-icon-box-description">{{{ settings.description_text }}}</div>
		</div>
	</div>
</div><?php }
}
