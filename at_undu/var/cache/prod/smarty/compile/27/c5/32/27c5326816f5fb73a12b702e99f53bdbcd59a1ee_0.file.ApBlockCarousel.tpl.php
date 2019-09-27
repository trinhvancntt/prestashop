<?php
/* Smarty version 3.1.33, created on 2019-09-13 04:28:55
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\appagebuilder\views\templates\admin\shortcodes\ApBlockCarousel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7b5347509101_44191022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27c5326816f5fb73a12b702e99f53bdbcd59a1ee' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\appagebuilder\\views\\templates\\admin\\shortcodes\\ApBlockCarousel.tpl',
      1 => 1549869340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7b5347509101_44191022 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\xampp\\htdocs\\prestashop\\at_undu\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<ul id="list-slider">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['i']->value) {?>
    <li id="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['default_lang']->value == $_smarty_tpl->tpl_vars['lang']->value['id_lang']) {?>
                <div class="col-lg-9">
                    <?php if ($_smarty_tpl->tpl_vars['config_val']->value['tit'][$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['lang']->value['id_lang']]) {?>
                    <div class="col-lg-5"><?php echo $_smarty_tpl->tpl_vars['config_val']->value['tit'][$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['lang']->value['id_lang']];?>
</div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['config_val']->value['img'][$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['lang']->value['id_lang']]) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;
echo $_smarty_tpl->tpl_vars['config_val']->value['img'][$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['lang']->value['id_lang']];?>
">
                    <?php }?>
                </div>
                <div class="col-lg-3">
                    <button class="btn-edit-fullslider btn btn-info" type="button"><i class="icon-pencil"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</button>
                    <button class="btn-delete-fullslider btn btn-danger" type="button"><i class="icon-trash"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</button>
                </div>
            <?php }?>

            <?php $_smarty_tpl->_assignInScope('descript', $_smarty_tpl->tpl_vars['config_val']->value['descript'][$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['lang']->value['id_lang']]);?>
            <?php $_smarty_tpl->_assignInScope('descript', htmlspecialchars($_smarty_tpl->tpl_vars['descript']->value));?>
            <?php $_smarty_tpl->_assignInScope('descript', smarty_modifier_replace($_smarty_tpl->tpl_vars['descript']->value,'\r\n',''));?>
            <?php $_smarty_tpl->_assignInScope('descript', stripslashes($_smarty_tpl->tpl_vars['descript']->value));?>
            <?php $_smarty_tpl->_assignInScope('temp_name', ((string)$_smarty_tpl->tpl_vars['i']->value)."_".((string)$_smarty_tpl->tpl_vars['lang']->value['id_lang']));?>
            <input type="hidden" id="tit_<?php echo $_smarty_tpl->tpl_vars['temp_name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config_val']->value['tit'][$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['lang']->value['id_lang']]);?>
" name="tit_<?php echo $_smarty_tpl->tpl_vars['temp_name']->value;?>
"/>
            <input type="hidden" id="sub_tit_<?php echo $_smarty_tpl->tpl_vars['temp_name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config_val']->value['sub_tit'][$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['lang']->value['id_lang']]);?>
" name="sub_tit_<?php echo $_smarty_tpl->tpl_vars['temp_name']->value;?>
"/>
            <input type="hidden" id="img_<?php echo $_smarty_tpl->tpl_vars['temp_name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config_val']->value['img'][$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['lang']->value['id_lang']]);?>
" name="img_<?php echo $_smarty_tpl->tpl_vars['temp_name']->value;?>
"/>
            <input type="hidden" id="link_<?php echo $_smarty_tpl->tpl_vars['temp_name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config_val']->value['link'][$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['lang']->value['id_lang']]);?>
" name="link_<?php echo $_smarty_tpl->tpl_vars['temp_name']->value;?>
"/>
            <input type="hidden" id="descript_<?php echo $_smarty_tpl->tpl_vars['temp_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['descript']->value;?>
" name="descript_<?php echo $_smarty_tpl->tpl_vars['temp_name']->value;?>
"/>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </li>
    <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<ul id="temp-list" class="hide">
    <li id="">
        <div class="col-lg-9"></div>
        <div class="col-lg-3">
            <button class="btn-edit-fullslider btn btn-info" type="button"><i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</button>
            <button class="btn-delete-fullslider btn btn-danger" type="button"><i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</button>
        </div>
    </li>
</ul><?php }
}
