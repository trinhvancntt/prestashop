<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-26 03:03:39
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\include\rb-live-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608665cb082671_40389626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cc2466286c75943603d0a3fe0b4a14275dd66d9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\include\\rb-live-content.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608665cb082671_40389626 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-tabs-controls">
	<ul>
		<# _.each( elementData.tabs_controls, function( tabTitle, tabSlug ) { #>
			<# if (tabSlug == 'content') { #>
				<li class="rb-tab-control-{{ tabSlug }}">
					<a href="#" data-tab="{{ tabSlug }}">
						{{{ tabTitle }}}
					</a>
				</li>
			<# } #>
		<# } ); #>
	</ul>
</div>
<div class="rb-controls"></div><?php }
}
