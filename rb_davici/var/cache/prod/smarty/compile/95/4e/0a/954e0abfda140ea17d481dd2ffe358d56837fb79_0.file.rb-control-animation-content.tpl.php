<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:44
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\control\rb-control-animation-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6314c365fa2_94085826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '954e0abfda140ea17d481dd2ffe358d56837fb79' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\control\\rb-control-animation-content.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c6314c365fa2_94085826 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-control-content">
	<div class="rb-control-field">
		<label class="rb-control-title">{{{ data.label }}}</label>

		<div class="rb-control-input-wrapper">
			<select data-setting="{{ data.name }}">
				<option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'None','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['animations']->value, 'animations_group', false, 'animations_group_name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['animations_group_name']->value => $_smarty_tpl->tpl_vars['animations_group']->value) {
?>
					<optgroup label="<?php echo $_smarty_tpl->tpl_vars['animations_group_name']->value;?>
">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['animations_group']->value, 'animation_title', false, 'animation_name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['animation_name']->value => $_smarty_tpl->tpl_vars['animation_title']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['animation_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['animation_title']->value;?>
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
			</select>
		</div>
	</div>

	<# if ( data.description ) { #>
		<div class="rb-control-description">{{{ data.description }}}</div>
	<# } #>
</div><?php }
}
