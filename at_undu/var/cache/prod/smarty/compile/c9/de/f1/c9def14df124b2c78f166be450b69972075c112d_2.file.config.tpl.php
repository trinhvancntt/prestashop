<?php
/* Smarty version 3.1.33, created on 2019-08-30 01:12:02
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\appagebuilder\views\templates\hook\config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d68b022043304_23283497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9def14df124b2c78f166be450b69972075c112d' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\appagebuilder\\views\\templates\\hook\\config.tpl',
      1 => 1547087529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68b022043304_23283497 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="group-input group-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_cf']->value, ENT_QUOTES, 'UTF-8');?>
 clearfix">
		<label class="col-sm-12 control-label">
				<i class="fa fa-tags"></i>
				<?php if ($_smarty_tpl->tpl_vars['ap_cf']->value == 'profile') {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home version','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

				<?php } elseif ($_smarty_tpl->tpl_vars['ap_cf']->value == 'header') {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Header version','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

				<?php } elseif ($_smarty_tpl->tpl_vars['ap_cf']->value == 'footer') {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Footer version','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

				<?php } elseif ($_smarty_tpl->tpl_vars['ap_cf']->value == 'product') {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product version','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

				<?php } elseif ($_smarty_tpl->tpl_vars['ap_cf']->value == 'content') {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Content Home','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

				<?php } elseif ($_smarty_tpl->tpl_vars['ap_cf']->value == 'product_builder') {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Builder','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

				<?php }?>
		</label>
		<div class="col-sm-12">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ap_cfdata']->value, 'cfdata');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cfdata']->value) {
?>
                <?php if (isset($_smarty_tpl->tpl_vars['cfdata']->value['friendly_url']) && $_smarty_tpl->tpl_vars['cfdata']->value['friendly_url'] != '' && ($_smarty_tpl->tpl_vars['ap_controller']->value == 'index' || $_smarty_tpl->tpl_vars['ap_controller']->value == 'appagebuilderhome')) {?>
                                        <a class="apconfig apconfig-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_cf']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['cfdata']->value['active']) {?> active<?php }?>" data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_type']->value, ENT_QUOTES, 'UTF-8');?>
" data-id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cfdata']->value['id'], ENT_QUOTES, 'UTF-8');?>
' data-enableJS="false" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_current_url']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['cfdata']->value['friendly_url'], ENT_QUOTES, 'UTF-8');?>
.html"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cfdata']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                <?php } elseif (($_smarty_tpl->tpl_vars['ap_controller']->value == 'index' && $_smarty_tpl->tpl_vars['ap_cf']->value == 'profile')) {?>
                                        <a class="apconfig apconfig-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_cf']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['cfdata']->value['active']) {?> active<?php }?>" data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_type']->value, ENT_QUOTES, 'UTF-8');?>
" data-id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cfdata']->value['id'], ENT_QUOTES, 'UTF-8');?>
' data-enableJS="true" data-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_current_url']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_current_url']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['cfdata']->value['friendly_url'], ENT_QUOTES, 'UTF-8');?>
.html"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cfdata']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                <?php } else { ?>
                    <a class="apconfig apconfig-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_cf']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['cfdata']->value['active']) {?> active<?php }?>" data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_type']->value, ENT_QUOTES, 'UTF-8');?>
" data-id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cfdata']->value['id'], ENT_QUOTES, 'UTF-8');?>
' data-enableJS="true" href="index.php?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_type']->value, ENT_QUOTES, 'UTF-8');?>
=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cfdata']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cfdata']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
</div><?php }
}
