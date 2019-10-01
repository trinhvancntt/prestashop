<?php
/* Smarty version 3.1.33, created on 2019-09-27 13:26:43
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\appagebuilder\views\templates\admin\ap_page_builder_theme_configuration\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8e46539c7e85_29385606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8254bf458ec943728e71ed844a810b79c35d981' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_theme_configuration\\helpers\\form\\form.tpl',
      1 => 1547087528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8e46539c7e85_29385606 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_theme_configuration\helpers\form\form.tpl -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16920169625d8e46538d9a05_59851240', "field");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_16920169625d8e46538d9a05_59851240 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_16920169625d8e46538d9a05_59851240',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tabConfig') {?>
        <div class="row">
            <?php $_smarty_tpl->_assignInScope('tabList', $_smarty_tpl->tpl_vars['input']->value['values']);?>
            <ul class="nav nav-tabs" role="tablist">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabList']->value, 'value', false, 'key', 'tabList', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                <li role="presentation" class="tabConfig <?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['input']->value['default']) {?>active<?php }?>"><a href="#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="aptab-config" role="tab" data-toggle="tab" data-value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'html','UTF-8' ));?>
</a></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
            
        <input type="hidden" id="tab_open" name="tab_open" value="<?php echo $_smarty_tpl->tpl_vars['input']->value['default'];?>
">
        <?php echo '<script'; ?>
>
            $(document).ready(function(){
                $('.aptab-config').click(function(){
                    $('#tab_open').val( $(this).data('value') );
                });
            });
            
            $(document).on('click', '#configuration_form_submit_btn', function(e){
                e.preventDefault();
                var active_tab = $('.form-wrapper ul.nav-tabs li.active a').data('value');
                $('#tab_open').val( active_tab );
                $(this).closest('form').submit();
            });
        <?php echo '</script'; ?>
>
    <?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'modules_block') {?>
            <?php $_smarty_tpl->_assignInScope('moduleList', $_smarty_tpl->tpl_vars['input']->value['values']);?>
            <?php if (isset($_smarty_tpl->tpl_vars['input']->value['exist_module']) && !$_smarty_tpl->tpl_vars['input']->value['exist_module']) {?>
                <label class="control-label" style="color: red; margin-bottom: 15px; margin-left: 10px;"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Empty module because not exist file config.xml in theme folder.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</label>
                <br />
            <?php }?>
            <div class="col-lg-9 ">
            <?php if (isset($_smarty_tpl->tpl_vars['moduleList']->value) && count($_smarty_tpl->tpl_vars['moduleList']->value) > 0) {?>
                <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can select one or more Module.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</p>
                <table cellspacing="0" cellpadding="0" class="table" style="min-width:40em;">
                    <tr>
                        <th>
                            <input type="checkbox" name="checkme" id="checkme" class="noborder" onclick="checkDelBoxes(this.form, '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
[]', this.checked)" />
                        </th>
                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</th>
                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back-up File','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

                            <p class="help-block" style="display: inline;">
                            <?php echo $_smarty_tpl->tpl_vars['backup_dir']->value;?>

                            </p>
                        </th>
                    </tr>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['moduleList']->value, 'module', false, NULL, 'moduleItem', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_moduleItem']->value['index']++;
?>
                        <tr <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_moduleItem']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_moduleItem']->value['index'] : null)%2) {?>class="alt_row"<?php }?>>
                            <td> 
                                <input type="checkbox" class="cmsBox" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
[]" id="chk_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
"/>
                            </td>
                            <td><label for="chk_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
" class="t"><strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
</strong></label></td>
                            <td>
                                <?php if (isset($_smarty_tpl->tpl_vars['module']->value['files'])) {?>
                                <select style="max-width: 500px;" name="file_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module']->value['files'], 'file', false, NULL, 'Modulefile', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
                                    <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value,'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value,'html','UTF-8' ));?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                                <?php }?>
                            </td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </table>
            <?php }?>
            </div>
            <div class="form-group button-wrapper">
                    <div class="col-lg-9 col-lg-offset-3">
                        <button class="button btn btn-success" name="submitBackup" id="submitBackup" type="submit">
                                 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back-up to PHP file','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

                        </button>
                        <button class="button btn btn-danger" name="submitRestore" data-confirm="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure you want to restore from PHP file?','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" id="submitRestore" type="submit">
                                 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Restore from PHP file','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

                        </button>
                        
                        <button class="button btn btn-success" name="submitSample" id="submitSample" type="submit">
                                 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export Sample Data','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

                        </button>
                        <button class="button btn btn-danger" name="submitImport" data-confirm="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure you want to restore data sample of template. You will lost all data of module','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" id="submitImport" type="submit">
                                 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Restore Sample Data','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

                        </button>
                        <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data Sample is only for theme developer','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</p>
                    </div>
            </div>
            <div class="form-group">
                <div class="col-lg-9 col-lg-offset-3">
                    <div class="alert alert-info">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'With restore function, you will lost all data of module in site for all shop','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

                        <hr>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You should back-up before do any thing','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-9 col-lg-offset-3">
                    <button class="button btn btn-success" name="submitExportDBStruct" id="submitExportDBStruct" type="submit">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export Data Struct','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

                    </button>
                    <p class="help-block">
                        <?php echo $_smarty_tpl->tpl_vars['input']->value['folder_data_struct'];?>

                    </p>
                </div>
            </div>
                
            <div class="form-group">
                <div class="col-lg-9 col-lg-offset-3">
                    <button class="button btn btn-success" name="submitUpdateModule" id="submitUpdateModule" type="submit" onclick="javascript:return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure you want to Update and Correct Module. Please back-up all things before?','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
')">
                            <i class="icon-AdminParentPreferences"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update and Correct Module','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

                    </button>
                </div>
            </div>
                
            <?php echo '<script'; ?>
 type="text/javascript">
                $(".button-wrapper .button").click(function(){
                    hasCheckedE = 0;
                    $("[name='moduleList[]']").each(function(){
                        if($(this).is(":checked")){
                            hasCheckedE = 1;
                            return false;
                        }
                    });
                    if(!hasCheckedE){
                        alert("You have to select atleast one module");
                        return false;
                    }
                    dataConfirm = $(this).attr("data-confirm");
                    if(dataConfirm){
                        return confirm(dataConfirm);
                    }
                });
            <?php echo '</script'; ?>
>
	<?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'font_h') {?>
<div>
    <div class="col-lg-3">
        <h2><?php echo $_smarty_tpl->tpl_vars['input']->value['htitle'];?>
</h2>
        <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>
</p>
    </div>
    <div class="col-lg-9">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['items'], 'item', false, 'ikey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ikey']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
            
            <?php if (($_smarty_tpl->tpl_vars['item']->value['type'] == 'select')) {?>
                <div class="t_span4 col-lg-4">
                <?php if (isset($_smarty_tpl->tpl_vars['item']->value['label'])) {?><h4 class="title-item"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</h4><?php }?>
                <select name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['name'],'html','utf-8' ));?>
"
                        class="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['class'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['class'],'html','utf-8' ));
}?>"
                        id="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['id'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['id'],'html','utf-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['name'],'html','utf-8' ));
}?>"
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['multiple']) && $_smarty_tpl->tpl_vars['item']->value['multiple']) {?> multiple="multiple"<?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['size'])) {?> size="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['size'],'html','utf-8' ));?>
"<?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['onchange'])) {?> onchange="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['onchange'],'html','utf-8' ));?>
"<?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['disabled']) && $_smarty_tpl->tpl_vars['item']->value['disabled']) {?> disabled="disabled"<?php }?>>
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['options']['default'])) {?>
                        <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['options']['default']['value'],'html','utf-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['options']['default']['label'],'html','utf-8' ));?>
</option>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['options']['optiongroup'])) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['options']['optiongroup']['query'], 'optiongroup');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['optiongroup']->value) {
?>
                            <optgroup label="<?php echo $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['item']->value['options']['optiongroup']['label']];?>
">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['item']->value['options']['options']['query']], 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['options']['id']];?>
"
                                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['multiple'])) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']], 'field_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
?>
                                                <?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php } else { ?>
                                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']] == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
                                        <?php }?>
                                    ><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['options']['name']];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </optgroup>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php } else { ?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['options']['query'], 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
                            <?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['item']->value['options']['id']};?>
"
                                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['multiple'])) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']], 'field_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
?>
                                            <?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['item']->value['options']['id']}) {?>
                                                selected="selected"
                                            <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']] == $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['item']->value['options']['id']}) {?>
                                            selected="selected"
                                        <?php }?>
                                    <?php }?>
                                ><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['item']->value['options']['name']};?>
</option>
                            <?php } elseif ($_smarty_tpl->tpl_vars['option']->value == "-") {?>
                                <option value="">-</option>
                            <?php } else { ?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['id']];?>
"
                                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['multiple'])) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']], 'field_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
?>
                                            <?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['id']]) {?>
                                                selected="selected"
                                            <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']] == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['id']]) {?>
                                            selected="selected"
                                        <?php }?>
                                    <?php }?>
                                ><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['name']];?>
</option>

                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                </select>
                </div>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 'color') {?>
                <div class="t_span4 col-lg-4">
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['label'])) {?><h4 class="title-item"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</h4><?php }?>
                    <div class="input-group col-lg-5">
                        <input type="color"
                        data-hex="true"
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
"
                        <?php } else { ?> class="color mColorPickerInput"<?php }?>
                        name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                        value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']],'html','UTF-8' ));?>
" />
                    </div>
                </div>
                
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 'text') {?>
                <div class="t_span4 col-lg-4">
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['label'])) {?><h4 class="title-item"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</h4><?php }?>
                    <?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']]);?>
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['maxchar']) || isset($_smarty_tpl->tpl_vars['item']->value['prefix']) || isset($_smarty_tpl->tpl_vars['item']->value['suffix'])) {?>
                    <div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['item']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];
}?>">
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['maxchar']) && $_smarty_tpl->tpl_vars['item']->value['maxchar']) {?>
                    <span id="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['id'])) {
echo $_smarty_tpl->tpl_vars['item']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['item']->value['name'];
}?>_counter" class="input-group-addon"><span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['item']->value['maxchar']);?>
</span></span>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['prefix'])) {?>
                    <span class="input-group-addon">
                      <?php echo $_smarty_tpl->tpl_vars['item']->value['prefix'];?>

                    </span>
                    <?php }?>
                    <input type="text"
                        name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"
                        id="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['id'])) {
echo $_smarty_tpl->tpl_vars['item']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['item']->value['name'];
}?>"
                        value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['string_format']) && $_smarty_tpl->tpl_vars['item']->value['string_format']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( sprintf($_smarty_tpl->tpl_vars['item']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8' ));
}?>"
                        class="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['class'])) {
echo $_smarty_tpl->tpl_vars['item']->value['class'];
}
if ($_smarty_tpl->tpl_vars['item']->value['type'] == 'tags') {?> tagify<?php }?>"
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
"<?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['maxchar']) && $_smarty_tpl->tpl_vars['item']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['item']->value['maxchar']);?>
"<?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['maxlength']) && $_smarty_tpl->tpl_vars['item']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['item']->value['maxlength']);?>
"<?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['readonly']) && $_smarty_tpl->tpl_vars['item']->value['readonly']) {?> readonly="readonly"<?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['disabled']) && $_smarty_tpl->tpl_vars['item']->value['disabled']) {?> disabled="disabled"<?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['autocomplete']) && !$_smarty_tpl->tpl_vars['item']->value['autocomplete']) {?> autocomplete="off"<?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['required']) && $_smarty_tpl->tpl_vars['item']->value['required']) {?> required="required" <?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['placeholder']) && $_smarty_tpl->tpl_vars['item']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['item']->value['placeholder'];?>
"<?php }?>
                        />
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['suffix'])) {?>
                    <span class="input-group-addon">
                      <?php echo $_smarty_tpl->tpl_vars['item']->value['suffix'];?>

                    </span>
                    <?php }?>

                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['maxchar']) || isset($_smarty_tpl->tpl_vars['item']->value['prefix']) || isset($_smarty_tpl->tpl_vars['item']->value['suffix'])) {?>
                    </div>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['maxchar']) && $_smarty_tpl->tpl_vars['item']->value['maxchar']) {?>
                    <?php echo '<script'; ?>
 type="text/javascript">
                    $(document).ready(function(){
                        countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['item']->value['id'])) {
echo $_smarty_tpl->tpl_vars['item']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['item']->value['name'];
}?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['item']->value['id'])) {
echo $_smarty_tpl->tpl_vars['item']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['item']->value['name'];
}?>_counter"));
                    });
                    <?php echo '</script'; ?>
>
                    <?php }?>
                </div>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
    <?php }?>
    
	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'font_setup') {?>
		<h4 style="" class="t-group-attr">Google Fonts Setup </h4>
        <p class="t-help-block">Here you can setup the <a href="//www.google.com/fonts" target="blank">Google web fonts</a> that you want to use in your site.</p>
        <div>
            
            <select class="select_gfont" style="font-size: 13px;height: 34px;margin-bottom: 0;margin-left: 0;margin-right: 0;margin-top: 0;max-width: 250px;width: 100%;display: inline-block">
                <option value="">Please select a font</option>
                <?php $_smarty_tpl->_assignInScope('lgfonts', $_smarty_tpl->tpl_vars['input']->value['list_google_font']);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lgfonts']->value, 'value', false, 'key', 'lgfont', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <a class="btn btn-success add_gfont" href="#">Add Font</a>
        </div>
        <br  />
        <br  />

    

<div id="use_google_font" class="use_google_font panel col-lg-12" style="margin-top: 12px">
    <div class="table-responsive-row clearfix">
        <table class="table appagebuilder_positions">
            <thead>
                <tr class="nodrag nodrop">
                    <th class="center fixed-width-xs"></th>
                    <th class=""><span class="title_box">Name</span></th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody class="list_gfonts"></tbody>
        </table>
    </div>
</div>

        
<div>
    <h4 class="t-group-attr"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Fonts Subset','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</h4>
    <p class="t-help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select which subsets you want to load for the Google fonts.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</p>
    <div>
        <div class="leo_checkbox_wrapper ">
            <input name="gfonts_subsets[]" id="gfonts_subsets_latin" value="latin" type="checkbox">
            <label style="cursor: pointer !important;" for="gfonts_subsets_latin"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latin','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</label><br>

            <input name="gfonts_subsets[]" id="gfonts_subsets_latin-ext" value="latin-ext" type="checkbox">
            <label style="cursor: pointer !important;" for="gfonts_subsets_latin-ext"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latin Ext','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</label><br>

            <input name="gfonts_subsets[]" id="gfonts_subsets_greek" value="greek" type="checkbox">
            <label style="cursor: pointer !important;" for="gfonts_subsets_greek"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Greek','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</label><br>

            <input name="gfonts_subsets[]" id="gfonts_subsets_cyrillic" value="cyrillic" type="checkbox">
            <label style="cursor: pointer !important;" for="gfonts_subsets_cyrillic"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cyrillic','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</label><br>

            <input name="gfonts_subsets[]" id="gfonts_subsets_cyrillic-ext" value="cyrillic-ext" type="checkbox">
            <label style="cursor: pointer !important;" for="gfonts_subsets_cyrillic-ext"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cyrillic Ext','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</label><br>

            <input name="gfonts_subsets[]" id="gfonts_subsets_khmer" value="khmer" type="checkbox">
            <label style="cursor: pointer !important;" for="gfonts_subsets_khmer"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Khmer','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</label><br>

            <input name="gfonts_subsets[]" id="gfonts_subsets_greek-ext" value="greek-ext" type="checkbox">
            <label style="cursor: pointer !important;" for="gfonts_subsets_greek-ext"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Greek Ext','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</label><br>

            <input name="gfonts_subsets[]" id="gfonts_subsets_vietnamese" value="vietnamese" type="checkbox">
            <label style="cursor: pointer !important;" for="gfonts_subsets_vietnamese"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vietnamese','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</label><br>
        </div>
    </div>
</div>

<!-- template -->
<div class="modal fade" id="modal_form"  data-backdrop="0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
        <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</span></button>
        <h4 class="modal-title" id="myModalLabel" data-addnew="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new Widget','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" data-edit="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Editting','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
"></h4>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</button>
        <button type="button" class="btn btn-primary save_gfont"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save changes','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</button>
      </div>
    </div>
  </div>
    <div class="modal-backdrop fade in" style="height: 995px;"></div>
</div>

<!-- template -->
<table id="html_item_gfont" style="display:none">
    <tbody>
        <tr id="" class="tmp">
            <input type="hidden" class="data_gfont" value="" name=""/><!-- name, id, regular, italic-->
            <td class="row-selector text-center"><!--<input name="appagebuilder_positionsBox[]" value="23" class="noborder" type="checkbox">--></td>
            <td class="gfont_name"></td>
            <td class="text-right">
                <div class="btn-group-action">
                    <div class="btn-group pull-right">
                        <a href="javascript:void(0)" class="btn btn-default edit_gfont" title="View">
                            <i class="icon-pencil"></i> Edit
                        </a>
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-caret-down"></i>&nbsp;
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:void(0)" title="Delete" class="delete delete_gfont">
                                    <i class="icon-trash"></i> Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- template -->
<div id="temp_gfont_edit" style="display:none">
	<div>
            <h4 class="t-group-attr"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Font CSS Class','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</h4>
            <p class="t-help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Using the css property:','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 <code>font-family:"[gfont_name]";</code> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'to use this font.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</p>
	</div>
    
        <br />
	<div>
            <h4 class="t-group-attr"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Font variants','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</h4>
            <p class="t-help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here you can select the font variants you want to load.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</p>
            <div class="leo_checkbox_wrapper ">
                <!-- list variant here -->
            </div>
            
            <input id="gfont_id" value="" type="hidden">
            
            <div id="tmp-gfont-variant" style="display: none;">
                <!-- template variant -->
                <label style="cursor: pointer !important;"><input class="" name="[variant_name]" value="[variant_name]" [variant_checked] type="checkbox"> [variant_value]</label>
                <br>
            </div>
	</div>
</div>
<?php echo '<script'; ?>
>
    var global_gfont_list = jQuery.parseJSON('<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['gfont_list_ori'];?>
');
    var global_gfont_api = jQuery.parseJSON('<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['gfont_api'];?>
');
    var global_gfont_subset = jQuery.parseJSON('<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['gfont_subset'];?>
');
    
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function(){
        //$('.aptab-config:eq(3)').trigger('click');
        autoAddGoogleItem();
        autoAddGoogleSubset();
    });
    
    function autoAddGoogleItem()
    {
        $.each(global_gfont_list, function(index, value){
            addGoogleItem(value);
        });
    }
    
    function autoAddGoogleSubset()
    {
        $.each(global_gfont_subset, function(index, value){
            $('#gfonts_subsets_'+value).prop('checked', true);
        });
    }
    
    function addGoogleItem(obj)
    {
        $('.list_gfonts').append(   $('#html_item_gfont .tmp').parent().html()  );
        
        $('.list_gfonts tr.tmp .gfont_name').html( obj.gfont_name );
        $('.list_gfonts tr.tmp .data_gfont').val( JSON.stringify(obj) );
        $('.list_gfonts tr.tmp .data_gfont').attr( 'name', 'gfont_items[]' );
        $('.list_gfonts tr.tmp').attr("id", obj['gfont_id']);
        $('.list_gfonts tr.tmp').data("form", obj);


        $('.list_gfonts tr:even').addClass('odd');
        $('.list_gfonts tr:odd').removeClass('odd');
        $('.list_gfonts tr.tmp').removeClass('tmp');
    }
    
    $('.add_gfont').click(function(e) {
        e.preventDefault();
        var gfont_name = $('.select_gfont').val();

        // VALIDATE
        if ( gfont_name == "" || gfont_name == undefined ) {
            alert ('Please select a font.');
            return false;
        }
        var gfont_name_exist = false;
        $('.list_gfonts tr').each(function(){
            var tmp = $(this).data('form').gfont_name;
            if( gfont_name == tmp){
                gfont_name_exist = true;
            }
        });
        if(gfont_name_exist){
            alert ('Font is exist.');
            return false;
        }
        
        // set attribute
        var tmp = {};
        tmp['gfont_id'] = "gfont_" + getRandomNumber();
        tmp['gfont_name'] = gfont_name;
        
        addGoogleItem(tmp);
        
        $('.chk_font_exist').each(function(){
            $(this).append($('<option>', {
                value: gfont_name,
                text: gfont_name,
            }));
        });
    });

    $(document).on('click', '.edit_gfont', function(e){
        var tr_parent = $(this).closest('tr').data('form');
        var gfont_name = tr_parent.gfont_name;
        
        // HTML LIST VARIANT
        var html_variant = '';
        $.each( global_gfont_api[gfont_name]['variants'] , function( key, value ) {
            var output = '';
            output = $('#tmp-gfont-variant').html();
            output = output.replaceAll('[variant_name]', key);
            output = output.replaceAll('[variant_value]', value);
            
            if(tr_parent.hasOwnProperty(key))
                output = output.replaceAll('[variant_checked]', 'checked="checked"');
            else
                output = output.replaceAll('[variant_checked]', '');
            
            html_variant += output;
        });
        $('#temp_gfont_edit .leo_checkbox_wrapper').html(html_variant);
        
        // HTML FONT NAME
        var html = $('#temp_gfont_edit').html();
        html = html.replace("[gfont_name]", tr_parent['gfont_name']);
        
        // HTML MODAL
        $('#myModalLabel').html( $(this).closest('tr').data('form').gfont_name + " font options");
        $('.modal-body').html( html );
        
        // HTML FONT ID
        $('#gfont_id').val(tr_parent['gfont_id']);
        $('#modal_form').modal('show');
    });

    $(document).on('click', '.delete_gfont', function(e){
        if (!confirm('Delete selected item?'))
            return true;    // auto hide dropdow
        
        var gfont_name = $(this).closest('tr').data('form').gfont_name;
        
        $(this).closest('tr').remove();
        $('.list_gfonts tr:even').addClass('odd');
        $('.list_gfonts tr:odd').removeClass('odd');
        
        
        $(".chk_font_exist option[value='"+gfont_name+"']").remove();
    });
    
    $('.save_gfont').click(function(e){
        var gfont_id =  $('#gfont_id').val();
        var tmp = $('#'+gfont_id).data('form');
        
        // SET VARIANT
        $('#modal_form .leo_checkbox_wrapper input:checked').each(function(){
            var value = $(this).val();
            tmp[value] = value;
        });
        
        // SET TO FORM
        $('#'+gfont_id).data('form', tmp);
        $('#'+gfont_id+' .data_gfont').val( JSON.stringify(tmp) );
        
        $('#modal_form').modal('hide');
    });
    

    function getRandomNumber(){
        return (+new Date() + (Math.random() * 10000000000000000)).toString().replace('.', '');
    };
    String.prototype.replaceAll = function(target, replacement) {
      return this.split(target).join(replacement);
    };
<?php echo '</script'; ?>
>
  
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
