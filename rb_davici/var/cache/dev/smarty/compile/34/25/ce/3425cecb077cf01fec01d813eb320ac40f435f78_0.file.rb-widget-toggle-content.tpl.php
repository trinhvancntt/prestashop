<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-26 03:03:42
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\widget\rb-widget-toggle-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608665ce2e1480_90658384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3425cecb077cf01fec01d813eb320ac40f435f78' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\widget\\rb-widget-toggle-content.tpl',
      1 => 1612599910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./rb-base.tpl' => 1,
  ),
),false)) {
function content_608665ce2e1480_90658384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./rb-base.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'toggle'), 0, false);
?>

<div class="rb-widget-container">
	<div class="rb-toggle">
		<#
			if ( settings.tabs ) {
				var counter = 1;
				_.each(settings.tabs, function( item ) { #>
					<div class="rb-toggle-title" data-tab="{{ counter }}">
						<span class="rb-toggle-icon">
					</span>
						{{{ item.tab_title }}}
					</div>
					<div class="rb-toggle-content" data-tab="{{ counter }}">{{{ item.tab_content }}}</div>
				<#
					counter++;
				} );
			}
		#>
	</div>
</div><?php }
}
