<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:45
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\widget\rb-widget-progress-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6314d3753e6_89691132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8e3733173704cd33c089916c8cf149ba7552cea' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\widget\\rb-widget-progress-content.tpl',
      1 => 1612599910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./rb-base.tpl' => 1,
  ),
),false)) {
function content_60c6314d3753e6_89691132 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./rb-base.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'progress'), 0, false);
?>

<div class="rb-widget-container">
	<# if ( settings.title ) { #>
		<span class="rb-title">{{{ settings.title }}}</span><#
	} #>

	<div class="rb-progress-wrapper progress-{{ settings.progress_type }}" role="timer">
		<div class="rb-progress-bar" data-max="{{ settings.percent.size }}">
			<span class="rb-progress-text">{{{ settings.inner_text }}}</span>
			<# if ( 'hide' !== settings.display_percentage ) { #>
			<span class="rb-progress-percentage">{{{ settings.percent.size }}}%</span>
			<# } #>
		</div>
	</div>
</div><?php }
}
