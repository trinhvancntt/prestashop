<?php
/* Smarty version 3.1.33, created on 2019-09-05 23:19:17
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\appagebuilder\views\templates\admin\_configure\ap_page_builder_products\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d71d0359eb109_79153436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01ab656612fe0ecaa3b16616077ab46332e43648' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\appagebuilder\\views\\templates\\admin\\_configure\\ap_page_builder_products\\helpers\\form\\form.tpl',
      1 => 1547087527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d71d0359eb109_79153436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- @file modules\appagebuilder\views\templates\admin\_configure\ap_page_builder_products\helpers\form\form -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17662767775d71d035943184_17806462', "field");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_17662767775d71d035943184_17806462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_17662767775d71d035943184_17806462',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'ap_proGrid') {?>
        <div class="col-lg-9 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['type'],'html','UTF-8' ));?>
">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="panel product-container">
                        <div class="desc-box">product-container</div>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['blockList'], 'vblock', false, 'kBlock');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kBlock']->value => $_smarty_tpl->tpl_vars['vblock']->value) {
?>
                                <div class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['vblock']->value['class'],'html','UTF-8' ));?>
">
                                    <div class="panel-heading"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['vblock']->value['title'],'html','UTF-8' ));?>
</div>
                                    <div class="content <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['kBlock']->value,'html','UTF-8' ));?>
-block-content">
                                    <?php $_smarty_tpl->_assignInScope('blockElement', $_smarty_tpl->tpl_vars['input']->value['params'][$_smarty_tpl->tpl_vars['kBlock']->value]);?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blockElement']->value, 'gridElement');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gridElement']->value) {
?>
                                        <?php if ($_smarty_tpl->tpl_vars['gridElement']->value['name'] == 'functional_buttons') {?>
                                            <?php $_smarty_tpl->_assignInScope('iconVal', 'icon-puzzle-piece');?>
                                            <?php $_smarty_tpl->_assignInScope('NameVal', $_smarty_tpl->tpl_vars['gridElement']->value['name']);?>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['gridElement']->value['name'] == 'code') {?>
                                            <?php $_smarty_tpl->_assignInScope('iconVal', 'icon-code');?>
                                            <?php $_smarty_tpl->_assignInScope('NameVal', 'code');?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('iconVal', $_smarty_tpl->tpl_vars['input']->value['elements'][$_smarty_tpl->tpl_vars['gridElement']->value['name']]['icon']);?>
                                            <?php $_smarty_tpl->_assignInScope('NameVal', $_smarty_tpl->tpl_vars['input']->value['elements'][$_smarty_tpl->tpl_vars['gridElement']->value['name']]['name']);?>
                                        <?php }?>
                                        <div class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridElement']->value['name'],'html','UTF-8' ));?>
 plist-element" data-element='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridElement']->value['name'],'html','UTF-8' ));?>
'><i class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iconVal']->value,'html','UTF-8' ));?>
"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['NameVal']->value,'html','UTF-8' ));?>

                                            <?php if ($_smarty_tpl->tpl_vars['gridElement']->value['name'] == 'code') {?>
                                            <div class="desc-box"><i class="icon-code"></i> tpl code</div>
                                            <?php }?>
                                            <div class="pull-right">
                                                <a class="plist-eremove"><i class="icon-trash"></i></a>
                                                <a class="plist-eedit" data-element='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridElement']->value['name'],'html','UTF-8' ));?>
'><i class="icon-edit"></i></a>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['gridElement']->value['name'] == 'functional_buttons') {?>
                                                <div class="content">
                                                    <?php if (isset($_smarty_tpl->tpl_vars['gridElement']->value['element'])) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gridElement']->value['element'], 'gridSubElement');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gridSubElement']->value) {
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['gridSubElement']->value['name'] == 'code') {?>
                                                            <?php $_smarty_tpl->_assignInScope('iconVal', 'icon-code');?>
                                                            <?php $_smarty_tpl->_assignInScope('NameVal', 'code');?>
                                                        <?php } else { ?>
                                                            <?php $_smarty_tpl->_assignInScope('iconVal', $_smarty_tpl->tpl_vars['input']->value['elements'][$_smarty_tpl->tpl_vars['gridSubElement']->value['name']]['icon']);?>
                                                            <?php $_smarty_tpl->_assignInScope('NameVal', $_smarty_tpl->tpl_vars['input']->value['elements'][$_smarty_tpl->tpl_vars['gridSubElement']->value['name']]['name']);?>
                                                        <?php }?>
                                                        <div class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridSubElement']->value['name'],'html','UTF-8' ));?>
 plist-element" data-element='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridSubElement']->value['name'],'html','UTF-8' ));?>
'><i class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iconVal']->value,'html','UTF-8' ));?>
"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['NameVal']->value,'html','UTF-8' ));?>

                                                            <?php if ($_smarty_tpl->tpl_vars['gridSubElement']->value['name'] == 'code') {?>
                                                            <div class="desc-box"><i class="icon-code"></i> tpl code</div>
                                                            <?php }?>
                                                            <div class="pull-right">
                                                                <a class="plist-eremove"><i class="icon-trash"></i></a>
                                                                <a class="plist-eedit" data-element='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridSubElement']->value['name'],'html','UTF-8' ));?>
'><i class="icon-edit"></i></a>
                                                            </div>
                                                            <?php if ($_smarty_tpl->tpl_vars['gridSubElement']->value['name'] == 'code') {?>
                                                                <div class="content-code">
                                                                    <textarea name="filecontent" id="filecontent" rows="5" value="" class=""><?php echo $_smarty_tpl->tpl_vars['gridSubElement']->value['code'];?>
</textarea>
                                                                </div>
                                                            <?php }?>
                                                        </div>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php }?>
                                                </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['gridElement']->value['name'] == 'code') {?>
																								
                                                <div class="content-code">
                                                    <textarea name="filecontent" rows="5" class=""><?php echo $_smarty_tpl->tpl_vars['gridElement']->value['code'];?>
</textarea>
                                                </div>
                                            <?php }?>
                                        </div>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 element-list content">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['elements'], 'eItem', false, 'eKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['eItem']->value) {
?>
                    <div class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['eKey']->value,'html','UTF-8' ));?>
 plist-element" data-element='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['eKey']->value,'html','UTF-8' ));?>
'><i class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['eItem']->value['icon'],'html','UTF-8' ));?>
"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['eItem']->value['name'],'html','UTF-8' ));?>

                        <div class="pull-right">
                            <a class="plist-eremove"><i class="icon-trash"></i></a>
                            <a class="plist-eedit" data-element='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['eKey']->value,'html','UTF-8' ));?>
'><i class="icon-edit"></i></a>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <div class="code plist-element" data-element='code'>
                        <div class="desc-box"><i class="icon-code"></i> tpl code</div>
                        <div class="pull-right">
                            <a class="plist-code"><i class="icon-code"></i></a>
                            <a class="plist-eremove"><i class="icon-trash"></i></a>
                        </div>
                        <div class="content-code">
                            <textarea name="filecontent" rows="5" class=""></textarea>
                        </div>
                    </div>
                    
                    <div class="functional_buttons plist-element" data-element='functional_buttons'>
                        <div class="desc-box"><i class="icon-puzzle-piece"></i> functional-buttons</div>
                        <div class="pull-right">
                            <a class="plist-eremove"><i class="icon-trash"></i></a>
                        </div>
                        <div class="content"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
    
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
