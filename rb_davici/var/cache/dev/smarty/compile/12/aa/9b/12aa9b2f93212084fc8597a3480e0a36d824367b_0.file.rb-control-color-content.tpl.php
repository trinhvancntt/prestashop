<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-26 03:03:40
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\control\rb-control-color-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608665ccdd8546_17414483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12aa9b2f93212084fc8597a3480e0a36d824367b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\control\\rb-control-color-content.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608665ccdd8546_17414483 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-control-content">
	<# var defaultValue = '', dataAlpha = '';
	if ( data.default ) {
	if ( '#' !== data.default.substring( 0, 1 ) ) {
	defaultValue = '#' + data.default;
	} else {
	defaultValue = data.default;
	}
	defaultValue = ' data-default-color=' + defaultValue; // Quotes added automatically.
	}
	if ( data.alpha ) {
	dataAlpha = ' data-alpha=true';
	} #>

	<div class="rb-control-field">
			<label class="rb-control-title">
				<# if ( data.label ) { #>
					{{{ data.label }}}
					<# } #>
						<# if ( data.description ) { #>
							<span class="rb-control-description">{{{ data.description }}}</span>
						<# } #>
			</label>

			<div class="rb-control-input-wrapper">
				<input data-setting="{{ name }}" class="color-picker-hex" type="text" maxlength="7" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hex Value','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
" {{ defaultValue }}{{ dataAlpha }} />
			</div>
		</div>
</div><?php }
}
