<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-26 03:03:41
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\control\rb-control-box_shadow-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608665cd6749a4_69499992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1a19cb4e88e6f405e747c9d4f9734d6d80f759e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\control\\rb-control-box_shadow-content.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608665cd6749a4_69499992 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-control-content">
	<#
		var defaultColorValue = '';
		if ( data.default.color ) {
			if ( '#' !== data.default.color.substring( 0, 1 ) ) {
				defaultColorValue = '#' + data.default.color;
			} else {
				defaultColorValue = data.default.color;
			}
			defaultColorValue = ' data-default-color=' + defaultColorValue; // Quotes added automatically.
		}
	#>

	<div class="rb-control-field">
		<label class="rb-control-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Color','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</label>
			<div class="rb-control-input-wrapper">
			<input data-setting="color"
				class="rb-box-shadow-color-picker"
				type="text" maxlength="7"
				placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hex Value','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
"
				data-alpha="true"{{{ defaultColorValue }}}
			/>
		</div>
	</div>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sliders']->value, 'slider');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->value) {
?>
		<div class="rb-box-shadow-slider">
			<label class="rb-control-title"><?php echo $_smarty_tpl->tpl_vars['slider']->value['label'];?>
</label>
			<div class="rb-control-input-wrapper">
				<div class="rb-slider" data-input="<?php echo $_smarty_tpl->tpl_vars['slider']->value['type'];?>
"></div>
				<div class="rb-slider-input">
					<input type="number"
						min="<?php echo $_smarty_tpl->tpl_vars['slider']->value['min'];?>
"
						max="<?php echo $_smarty_tpl->tpl_vars['slider']->value['max'];?>
"
						step="{{ data.step }}"
						data-setting="<?php echo $_smarty_tpl->tpl_vars['slider']->value['type'];?>
"
					/>
				</div>
			</div>
		</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
