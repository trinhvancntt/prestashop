<?php
/* Smarty version 3.1.33, created on 2019-08-30 02:33:15
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\leoblog\views\templates\admin\genTreeForApPageBuilder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d68c32bca3289_11637985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f2432500c395b8ea463af53678e839c83992020' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\leoblog\\views\\templates\\admin\\genTreeForApPageBuilder.tpl',
      1 => 1548383083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68c32bca3289_11637985 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="level<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
        <li id="list_<?php echo $_smarty_tpl->tpl_vars['menu']->value['id_leoblogcat'];?>
">
            <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['randkey'];?>
" name="chk_cat[]" id="chk-<?php echo $_smarty_tpl->tpl_vars['menu']->value['id_leoblogcat'];?>
" <?php if (array_search($_smarty_tpl->tpl_vars['menu']->value['id_leoblogcat'],$_smarty_tpl->tpl_vars['select']->value) !== false) {?>checked="checked"<?php }?>/>
            <label for="chk-<?php echo $_smarty_tpl->tpl_vars['menu']->value['id_leoblogcat'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
 (ID:<?php echo $_smarty_tpl->tpl_vars['menu']->value['id_leoblogcat'];?>
)</label>
            <?php if ($_smarty_tpl->tpl_vars['menu']->value['id_leoblogcat'] != $_smarty_tpl->tpl_vars['parent']->value) {?>
                <?php echo $_smarty_tpl->tpl_vars['model_leoblogcat']->value->genTreeForApPageBuilder($_smarty_tpl->tpl_vars['menu']->value['id_leoblogcat'],$_smarty_tpl->tpl_vars['level']->value+1,$_smarty_tpl->tpl_vars['select']->value);?>

            <?php }?>
        </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ol>
<?php }
}
