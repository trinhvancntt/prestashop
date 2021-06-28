<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-26 03:03:41
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\widget\rb-widget-heading-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608665cdbae7a9_51323471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e82072f62a75be26470dfb570a1da47c8f0387eb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\widget\\rb-widget-heading-content.tpl',
      1 => 1612599910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./rb-base.tpl' => 1,
  ),
),false)) {
function content_608665cdbae7a9_51323471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./rb-base.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'heading'), 0, false);
?>

<div class="rb-widget-container">
	<#
		if ( '' !== settings.title ) {
			var title_html = '<' + settings.header_size  + ' class="rb-heading-title rb-size-' + settings.size + ' ' +  settings.header_style + '"><span>' + settings.title + '</span></' + settings.header_size + '>';
		}
		
		if ( '' !== settings.link.url ) {
			var title_html = '<' + settings.header_size  + ' class="rb-heading-title rb-size-' + settings.size + ' ' +  settings.header_style + '"><a href="' + settings.link.url + '"><span>' + title_html + '</span></a></' + settings.header_size + '>';
		}

		print( title_html );
	#>
</div>
<?php }
}
