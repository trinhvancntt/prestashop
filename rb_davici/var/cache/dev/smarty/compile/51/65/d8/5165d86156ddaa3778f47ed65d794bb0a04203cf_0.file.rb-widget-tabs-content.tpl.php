<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-26 03:03:42
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\widget\rb-widget-tabs-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608665ce2694d6_10818110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5165d86156ddaa3778f47ed65d794bb0a04203cf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\widget\\rb-widget-tabs-content.tpl',
      1 => 1612599910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./rb-base.tpl' => 1,
  ),
),false)) {
function content_608665ce2694d6_10818110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./rb-base.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'tabs'), 0, false);
?>

<div class="rb-widget-container">
	<div class="rb-tabs tabs" data-active-tab="{{ editSettings.activeItemIndex ? editSettings.activeItemIndex : 0 }}">
		<#
			if ( settings.tabs ) {
				var counter = 1; #>
				<ul class="nav nav-tabs">
					<#
					_.each( settings.tabs, function( item ) { #>

						<li class="nav-item"><a class="nav-link rb-tab-title" data-tab="{{ counter }}">{{{ item.tab_title }}}</a></li>
					<#
						counter++;
					} ); #>
				</ul>

				<# counter = 1; #>
				<div class="rb-tabs-content-wrapper tab-content">
					<#
					_.each( settings.tabs, function( item ) { #>
						<div class="rb-tab-content tab-pane" data-tab="{{ counter }}">{{{ item.tab_content }}}</div>
					<#
					counter++;
					} ); #>
				</div>
			<# }
		#>
	</div>
</div><?php }
}
