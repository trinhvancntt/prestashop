<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-26 03:03:41
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\widget\rb-widget-text-live-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608665cdcf26a1_26230067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a39a8ee4cf8c6200ed3863516ed687dbab9a4ed' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\widget\\rb-widget-text-live-content.tpl',
      1 => 1612599910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./rb-base.tpl' => 1,
  ),
),false)) {
function content_608665cdcf26a1_26230067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./rb-base.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text-live'), 0, false);
?>

<div class="rb-widget-container">
	<div class="rb-text-live rte-content">{{{ settings.live }}}</div>
</div><?php }
}
