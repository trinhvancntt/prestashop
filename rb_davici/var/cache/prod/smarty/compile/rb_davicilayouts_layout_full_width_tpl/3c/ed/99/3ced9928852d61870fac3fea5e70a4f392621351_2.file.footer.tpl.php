<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-02 15:32:17
  from 'D:\xampp\htdocs\prestashop\rb_davici\themes\rb_davici\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603ea0d1919dd0_26708375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ced9928852d61870fac3fea5e70a4f392621351' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\themes\\rb_davici\\templates\\_partials\\footer.tpl',
      1 => 1614022406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/footer/footer-".((string)$_smarty_tpl->tpl_vars[\'id_footer\']->value).".tpl' => 1,
    'file:_partials/footer/footer-2.tpl' => 1,
    'file:_partials/footer/footer-3.tpl' => 1,
    'file:_partials/footer/footer-4.tpl' => 1,
    'file:_partials/footer/footer-5.tpl' => 1,
    'file:_partials/footer/footer-6.tpl' => 1,
    'file:_partials/footer/footer-7.tpl' => 1,
    'file:_partials/footer/footer-1.tpl' => 1,
  ),
),false)) {
function content_603ea0d1919dd0_26708375 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['id_footer']->value) && $_smarty_tpl->tpl_vars['id_footer']->value != '') {?>
	<?php $_smarty_tpl->_subTemplateRender("file:_partials/footer/footer-".((string)$_smarty_tpl->tpl_vars['id_footer']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif (Configuration::get('RBTHEMEDREAM_FOOTER') == 2) {?>
  	<?php $_smarty_tpl->_subTemplateRender('file:_partials/footer/footer-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif (Configuration::get('RBTHEMEDREAM_FOOTER') == 3) {?>
	<?php $_smarty_tpl->_subTemplateRender('file:_partials/footer/footer-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif (Configuration::get('RBTHEMEDREAM_FOOTER') == 4) {?>
	<?php $_smarty_tpl->_subTemplateRender('file:_partials/footer/footer-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif (Configuration::get('RBTHEMEDREAM_FOOTER') == 5) {?>
	<?php $_smarty_tpl->_subTemplateRender('file:_partials/footer/footer-5.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif (Configuration::get('RBTHEMEDREAM_FOOTER') == 6) {?>
	<?php $_smarty_tpl->_subTemplateRender('file:_partials/footer/footer-6.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif (Configuration::get('RBTHEMEDREAM_FOOTER') == 7) {?>
	<?php $_smarty_tpl->_subTemplateRender('file:_partials/footer/footer-7.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
  	<?php $_smarty_tpl->_subTemplateRender('file:_partials/footer/footer-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
