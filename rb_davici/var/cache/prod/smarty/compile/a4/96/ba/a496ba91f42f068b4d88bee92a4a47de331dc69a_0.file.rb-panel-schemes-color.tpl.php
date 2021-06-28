<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:40
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\include\rb-panel-schemes-color.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c63148de5989_05875795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a496ba91f42f068b4d88bee92a4a47de331dc69a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\include\\rb-panel-schemes-color.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c63148de5989_05875795 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-panel-scheme-buttons">
	<div class="rb-panel-scheme-button-wrapper rb-panel-scheme-reset">
		<button class="rb-button">
			<i class="fa fa-undo"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

		</button>
	</div>
	<div class="rb-panel-scheme-button-wrapper rb-panel-scheme-discard">
		<button class="rb-button">
			<i class="fa fa-times"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discard','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

		</button>
	</div>
	<div class="rb-panel-scheme-button-wrapper rb-panel-scheme-save">
		<button class="rb-button rb-button-success" disabled>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

		</button>
	</div>
</div>

<div class="rb-panel-scheme-content rb-panel-box">
	<div class="rb-panel-heading">
		<div class="rb-panel-heading-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Color Palette','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</div>
	</div>
	<div class="rb-panel-scheme-items rb-panel-box-content"></div>
</div>

<div class="rb-panel-scheme-colors-more-palettes rb-panel-box">
	<div class="rb-panel-heading">
		<div class="rb-panel-heading-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More Palettes','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</div>
	</div>
	<div class="rb-panel-box-content">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['schemes']->value, 'scheme', false, 'key_scheme');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key_scheme']->value => $_smarty_tpl->tpl_vars['scheme']->value) {
?>
			<div class="rb-panel-scheme-color-system-scheme" data-scheme-name="<?php echo $_smarty_tpl->tpl_vars['key_scheme']->value;?>
">
				<div class="rb-panel-scheme-color-system-items">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['print_colors_index']->value, 'color_name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['color_name']->value) {
?>
						<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['colors_to_print']) ? $_smarty_tpl->tpl_vars['colors_to_print']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['color_name']->value] = $_smarty_tpl->tpl_vars['scheme']->value['items'][$_smarty_tpl->tpl_vars['color_name']->value];
$_smarty_tpl->_assignInScope('colors_to_print', $_tmp_array);?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colors_to_print']->value, 'color_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['color_value']->value) {
?>
						<div class="rb-panel-scheme-color-system-item" style='background-color:<?php echo $_smarty_tpl->tpl_vars['color_value']->value;?>
'>
							
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>

				<div class="rb-title"><?php echo $_smarty_tpl->tpl_vars['scheme']->value['title'];?>
</div>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div><?php }
}
