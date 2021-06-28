<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-17 13:13:49
  from 'D:\xampp\htdocs\prestashop\rb_davici\themes\rb_davici\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60cb82cd5c5352_00913867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '323b86fbcd4ad7fa0040dd469c7dd1ac242e51d3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\themes\\rb_davici\\templates\\_partials\\header.tpl',
      1 => 1614022406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/header/header-".((string)$_smarty_tpl->tpl_vars[\'id_header\']->value).".tpl' => 1,
    'file:_partials/header/header-2.tpl' => 1,
    'file:_partials/header/header-3.tpl' => 1,
    'file:_partials/header/header-4.tpl' => 1,
    'file:_partials/header/header-5.tpl' => 1,
    'file:_partials/header/header-6.tpl' => 1,
    'file:_partials/header/header-7.tpl' => 1,
    'file:_partials/header/header-1.tpl' => 1,
  ),
),false)) {
function content_60cb82cd5c5352_00913867 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['id_header']->value) && $_smarty_tpl->tpl_vars['id_header']->value != '') {?>
	<?php $_smarty_tpl->_subTemplateRender("file:_partials/header/header-".((string)$_smarty_tpl->tpl_vars['id_header']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif (Configuration::get('RBTHEMEDREAM_HEADER') == 2) {?>
  	<?php $_smarty_tpl->_subTemplateRender('file:_partials/header/header-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif (Configuration::get('RBTHEMEDREAM_HEADER') == 3) {?>
	<?php $_smarty_tpl->_subTemplateRender('file:_partials/header/header-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif (Configuration::get('RBTHEMEDREAM_HEADER') == 4) {?>
	<?php $_smarty_tpl->_subTemplateRender('file:_partials/header/header-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif (Configuration::get('RBTHEMEDREAM_HEADER') == 5) {?>
	<?php $_smarty_tpl->_subTemplateRender('file:_partials/header/header-5.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif (Configuration::get('RBTHEMEDREAM_HEADER') == 6) {?>
	<?php $_smarty_tpl->_subTemplateRender('file:_partials/header/header-6.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif (Configuration::get('RBTHEMEDREAM_HEADER') == 7) {?>
	<?php $_smarty_tpl->_subTemplateRender('file:_partials/header/header-7.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
  	<?php $_smarty_tpl->_subTemplateRender('file:_partials/header/header-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
