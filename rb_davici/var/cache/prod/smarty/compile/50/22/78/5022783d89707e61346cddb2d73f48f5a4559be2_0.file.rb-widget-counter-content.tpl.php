<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:45
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\widget\rb-widget-counter-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6314d2de9d9_66854894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5022783d89707e61346cddb2d73f48f5a4559be2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\widget\\rb-widget-counter-content.tpl',
      1 => 1612599910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./rb-base.tpl' => 1,
  ),
),false)) {
function content_60c6314d2de9d9_66854894 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./rb-base.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'counter'), 0, false);
?>

<div class="rb-widget-container">
	<div class="rb-counter">
		<div class="rb-counter-number-wrapper">
			<#
			var prefix = '',
			suffix = '';

			if ( settings.prefix ) {
			prefix = '<span class="rb-counter-number-prefix">' + settings.prefix + '</span>';
		}

		var duration = '<span class="rb-counter-number" data-duration="' + settings.duration + '" data-to_value="' + settings.ending_number + '">' + settings.starting_number + '</span>';

		if ( settings.suffix ) {
		suffix = '<span class="rb-counter-number-suffix">' + settings.suffix + '</span>';
		}

		print( prefix + duration + suffix );
		#>
		</div>
		<# if ( settings.title ) { #>
			<div class="rb-counter-title">{{{ settings.title }}}</div>
		<# } #>
	</div>
</div><?php }
}
