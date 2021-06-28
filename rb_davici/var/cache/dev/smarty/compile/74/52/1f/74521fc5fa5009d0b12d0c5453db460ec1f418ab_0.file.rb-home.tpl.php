<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-13 09:15:19
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\rb-home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_609d2667a9b612_58104282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74521fc5fa5009d0b12d0c5453db460ec1f418ab' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\rb-home.tpl',
      1 => 1612599910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609d2667a9b612_58104282 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['rbthemedreams']->value)) {?>
	<div class="row">
		<p class="help-block" style="display: inline-block;">

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rbthemedreams']->value, 'rbthemedream');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rbthemedream']->value) {
?>
			<h3 class="block-title">
    			<p class="help-block" style="display: inline-block;">
    			<?php echo $_smarty_tpl->tpl_vars['rbthemedream']->value['name'];?>

    		</h3>

    		<div class="form-group">						
				<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fullwidth Homepage','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</label>

				<div class="col-lg-9">
					<span class="switch prestashop-switch fixed-width-lg">
						<input
							type="radio"
							name="RBTHEMEDREAM_HOME_<?php echo $_smarty_tpl->tpl_vars['rbthemedream']->value['id_rbthemedream_home'];?>
"
							id="RBTHEMEDREAM_HOME_<?php echo $_smarty_tpl->tpl_vars['rbthemedream']->value['id_rbthemedream_home'];?>
_on"
							<?php if ($_smarty_tpl->tpl_vars['rbthemedream']->value['home'] == 1) {?>checked="checked"<?php }?>
							value="1"
						>

						<label for="RBTHEMEDREAM_HOME_<?php echo $_smarty_tpl->tpl_vars['rbthemedream']->value['id_rbthemedream_home'];?>
_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</label>

						<input
							type="radio"
							name="RBTHEMEDREAM_HOME_<?php echo $_smarty_tpl->tpl_vars['rbthemedream']->value['id_rbthemedream_home'];?>
"
							id="RBTHEMEDREAM_HOME_<?php echo $_smarty_tpl->tpl_vars['rbthemedream']->value['id_rbthemedream_home'];?>
_off"
							value="0"
							<?php if ($_smarty_tpl->tpl_vars['rbthemedream']->value['home'] != 1) {?>checked="checked"<?php }?>
						>

						<label for="RBTHEMEDREAM_HOME_<?php echo $_smarty_tpl->tpl_vars['rbthemedream']->value['id_rbthemedream_home'];?>
_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</label>

						<a class="slide-button btn"></a>
					</span>																												
				</div>			
			</div>

			<div class="form-group">						
				<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fullwidth Other Page','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</label>

				<div class="col-lg-9">
					<span class="switch prestashop-switch fixed-width-lg">
						<input
							type="radio"
							name="RBTHEMEDREAM_PAGE_<?php echo $_smarty_tpl->tpl_vars['rbthemedream']->value['id_rbthemedream_home'];?>
"
							id="RBTHEMEDREAM_PAGE_<?php echo $_smarty_tpl->tpl_vars['rbthemedream']->value['id_rbthemedream_home'];?>
_on"
							<?php if ($_smarty_tpl->tpl_vars['rbthemedream']->value['page'] == 1) {?>checked="checked"<?php }?>
							value="1"
						>

						<label for="RBTHEMEDREAM_PAGE_<?php echo $_smarty_tpl->tpl_vars['rbthemedream']->value['id_rbthemedream_home'];?>
_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</label>

						<input
							type="radio"
							name="RBTHEMEDREAM_PAGE_<?php echo $_smarty_tpl->tpl_vars['rbthemedream']->value['id_rbthemedream_home'];?>
"
							id="RBTHEMEDREAM_PAGE_<?php echo $_smarty_tpl->tpl_vars['rbthemedream']->value['id_rbthemedream_home'];?>
_off"
							value="0"
							<?php if ($_smarty_tpl->tpl_vars['rbthemedream']->value['page'] != 1) {?>checked="checked"<?php }?>
						>

						<label for="RBTHEMEDREAM_PAGE_<?php echo $_smarty_tpl->tpl_vars['rbthemedream']->value['id_rbthemedream_home'];?>
_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</label>

						<a class="slide-button btn"></a>
					</span>																												
				</div>			
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
<?php }
}
}
