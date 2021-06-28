<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:43
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\control\rb-control-url-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6314bc7ea52_01614736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6259435f518bb586abd480d47b7b52785fefdda' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\control\\rb-control-url-content.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c6314bc7ea52_01614736 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-control-content">
	<div class="rb-control-field rb-control-url-external-{{{ data.show_external ? 'show' : 'hide' }}}">
		<label class="rb-control-title">{{{ data.label }}}</label>
		<div class="rb-control-input-wrapper">
			<input type="url"
				data-setting="url"
				placeholder="{{ data.placeholder }}"
				id="rb-control-url-field-{{ data._cid }}"
			/>
			<button class="rb-control-url-target tooltip-target"
				data-tooltip="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open Link In New Tab','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
"
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open Link In New Tab','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
"
			>
				<span class="rb-control-url-external"
					title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New Window','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
"
				>
					<i class="fa fa-external-link"></i>
				</span>
			</button>

			<button class="rb-control-url-media tooltip-target"
				data-tooltip="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Media Link','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
"
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose Media Link','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
"
			>
				<span class="rb-control-url-external" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Media Link','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
">
					<i class="fa fa-paperclip"></i>
				</span>
			</button>
		</div>
	</div>
	<# if ( data.description ) { #>
		<div class="rb-control-description">{{{ data.description }}}</div>
	<# } #>
</div><?php }
}
