<?php
/* Smarty version 3.1.33, created on 2019-08-30 02:42:02
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\appagebuilder\views\templates\admin\shortcodes\ApRow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d68c53a982607_43280033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b91a197886db4b9bdc2a9b6338c6d2b4e9a0b09e' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\appagebuilder\\views\\templates\\admin\\shortcodes\\ApRow.tpl',
      1 => 1547087526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68c53a982607_43280033 (Smarty_Internal_Template $_smarty_tpl) {
?><p><input type="text" name="controller_pages" value="<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
" class="em_text"/></p>
<p><select size="25" name="controller_pages_select" class="em_list" multiple="multiple">

<option disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['_core_']->value;?>
</option>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['controllers']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
    <?php if (in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['arr_controllers']->value)) {?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</option>
    <?php } else { ?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</option>
    <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules_controllers_type']->value, 'label', false, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>
    <option disabled="disabled">________________________________________ <?php echo $_smarty_tpl->tpl_vars['label']->value;?>
 ________________________________________</option>
    <?php $_smarty_tpl->_assignInScope('all_modules_controllers', $_smarty_tpl->tpl_vars['controllers_modules']->value[$_smarty_tpl->tpl_vars['type']->value]);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_modules_controllers']->value, 'modules_controllers', false, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value => $_smarty_tpl->tpl_vars['modules_controllers']->value) {
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules_controllers']->value, 'cont');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cont']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('key', "module-".((string)$_smarty_tpl->tpl_vars['module']->value)."-".((string)$_smarty_tpl->tpl_vars['cont']->value));?>
            <?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['arr_controllers']->value)) {?>
                <option value="module-<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
" selected="selected">module__<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
__<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
</option>
            <?php } else { ?>
                <option value="module-<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
">module__<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
__<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
</option>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select></p><?php }
}
