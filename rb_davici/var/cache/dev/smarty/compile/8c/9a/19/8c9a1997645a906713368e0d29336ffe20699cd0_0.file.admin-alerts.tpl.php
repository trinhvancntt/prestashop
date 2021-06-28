<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-15 12:53:29
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthememenu\views\templates\hook\admin-alerts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_609ffc897f0379_78829591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c9a1997645a906713368e0d29336ffe20699cd0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthememenu\\views\\templates\\hook\\admin-alerts.tpl',
      1 => 1612599914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609ffc897f0379_78829591 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['alerts']->value['errors']) && $_smarty_tpl->tpl_vars['alerts']->value['errors']) {?>
    <div class="alert alert-danger rb-alert rb-alert-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['time']->value,'html','UTF-8' ));?>
"><?php echo implode('<br/>',$_smarty_tpl->tpl_vars['alerts']->value['errors']);?>
</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['alerts']->value['success']) && $_smarty_tpl->tpl_vars['alerts']->value['success']) {?>
    <div class="alert alert-success rb-alert rb-alert-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['time']->value,'html','UTF-8' ));?>
"><?php echo implode('<br/>',$_smarty_tpl->tpl_vars['alerts']->value['success']);?>
</div>
<?php }
}
}
