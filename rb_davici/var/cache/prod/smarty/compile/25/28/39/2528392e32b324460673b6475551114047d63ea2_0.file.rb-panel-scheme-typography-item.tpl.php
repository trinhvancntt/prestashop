<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:41
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\include\rb-panel-scheme-typography-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6314914ed35_46226515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2528392e32b324460673b6475551114047d63ea2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\include\\rb-panel-scheme-typography-item.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c6314914ed35_46226515 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-panel-heading">
	<div class="rb-panel-heading-toggle">
		<i class="fa"></i>
	</div>
	<div class="rb-panel-heading-title">{{{ title }}}</div>
</div>

<div class="rb-panel-scheme-typography-items rb-panel-box-content">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scheme_fields']->value, 'option', false, 'option_name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option_name']->value => $_smarty_tpl->tpl_vars['option']->value) {
?>
		<div class="rb-panel-scheme-typography-item">
			<div class="rb-panel-scheme-item-title rb-control-title"><?php echo $_smarty_tpl->tpl_vars['option']->value['label'];?>
</div>
			<div class="rb-panel-scheme-typography-item-value">
				<?php if ($_smarty_tpl->tpl_vars['option']->value['type'] == 'select') {?>
					<select name="<?php echo $_smarty_tpl->tpl_vars['option_name']->value;?>
" class="rb-panel-scheme-typography-item-field">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['options'], 'field_value', false, 'field_key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field_key']->value => $_smarty_tpl->tpl_vars['field_value']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['field_value']->value;?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				<?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type'] == 'font') {?>
					<select name="<?php echo $_smarty_tpl->tpl_vars['option_name']->value;?>
" class="rb-panel-scheme-typography-item-field">
						<option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
></option>
						<optgroup label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'System','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['font_systems']->value, 'system', false, 'key_system');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key_system']->value => $_smarty_tpl->tpl_vars['system']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['key_system']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['key_system']->value;?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</optgroup>

						<optgroup label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['font_googles']->value, 'google', false, 'key_google');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key_google']->value => $_smarty_tpl->tpl_vars['google']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['key_google']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['key_google']->value;?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</optgroup>
					</select>
				<?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type'] == 'text') {?>
					<input name="<?php echo $_smarty_tpl->tpl_vars['option_name']->value;?>
" class="rb-panel-scheme-typography-item-field"/>
				<?php }?>
			</div>
		</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
