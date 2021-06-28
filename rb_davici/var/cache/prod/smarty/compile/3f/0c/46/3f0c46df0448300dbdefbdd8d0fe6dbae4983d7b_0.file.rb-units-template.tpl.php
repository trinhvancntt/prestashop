<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:43
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\control\rb-units-template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6314b42afd9_44258374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f0c46df0448300dbdefbdd8d0fe6dbae4983d7b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\control\\rb-units-template.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c6314b42afd9_44258374 (Smarty_Internal_Template $_smarty_tpl) {
?><# if ( data.size_units.length > 1 ) { #>
	<div class="rb-units-choices">
		<# _.each( data.size_units, function( unit ) { #>
		<input id="rb-choose-{{ data._cid + data.name + unit }}" type="radio" name="rb-choose-{{ data.name }}" data-setting="unit" value="{{ unit }}">
		<label class="rb-units-choices-label" for="rb-choose-{{ data._cid + data.name + unit }}">{{{ unit }}}</label>
		<# } ); #>
	</div>
<# } #><?php }
}
