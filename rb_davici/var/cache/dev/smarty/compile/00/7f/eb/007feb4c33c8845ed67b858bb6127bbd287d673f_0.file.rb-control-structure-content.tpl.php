<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-26 03:03:41
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\control\rb-control-structure-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608665cd4e1268_26909390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '007feb4c33c8845ed67b858bb6127bbd287d673f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\control\\rb-control-structure-content.tpl',
      1 => 1612599908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608665cd4e1268_26909390 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-control-content">
	<div class="rb-control-field">
	<div class="rb-control-input-wrapper">
		<div class="rb-control-structure-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Structure','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</div>
			<# var currentPreset = rb.presetsFactory.getPresetByStructure( data.controlValue ); #>
			<div class="rb-control-structure-preset rb-control-structure-current-preset">
				{{{ rb.presetsFactory.getPresetSVG( currentPreset.preset, 233, 72, 5 ).outerHTML }}}
			</div>
			<div class="rb-control-structure-reset">
				<i class="fa fa-undo"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset Structure','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

			</div>
			<#
			var morePresets = getMorePresets();

			if ( morePresets.length > 1 ) { #>
				<div class="rb-control-structure-more-presets-title">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More Structures','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

				</div>
				<div class="rb-control-structure-more-presets">
					<# _.each( morePresets, function( preset ) { #>
						<div class="rb-control-structure-preset-wrapper">
							<input id="rb-control-structure-preset-{{ data._cid }}-{{ preset.key }}" type="radio" name="rb-control-structure-preset-{{ data._cid }}" data-setting="structure" value="{{ preset.key }}">
							<label class="rb-control-structure-preset" for="rb-control-structure-preset-{{ data._cid }}-{{ preset.key }}">
								{{{ rb.presetsFactory.getPresetSVG( preset.preset, 102, 42 ).outerHTML }}}
							</label>
							<div class="rb-control-structure-preset-title">{{{ preset.preset.join( ', ' ) }}}</div>
						</div>
					<# } ); #>
				</div>
			<# } #>
		</div>
	</div>
		
	<# if ( data.description ) { #>
		<div class="rb-control-description">{{{ data.description }}}</div>
	<# } #>
</div><?php }
}
