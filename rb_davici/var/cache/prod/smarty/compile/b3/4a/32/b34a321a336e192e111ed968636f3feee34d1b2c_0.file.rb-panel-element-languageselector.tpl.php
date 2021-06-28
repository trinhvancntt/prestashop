<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:24:41
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\include\rb-panel-element-languageselector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c631494d6686_48212669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b34a321a336e192e111ed968636f3feee34d1b2c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\include\\rb-panel-element-languageselector.tpl',
      1 => 1616654010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c631494d6686_48212669 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="rb-noname">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit:','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

	
	<select>
		<# _.each(rb.config.languages, function( language ) { #>
		<option value="{{{ language.id_lang }}}" <# if (rb.config.id_lang == language.id_lang) {#> selected <# } #> >{{{ language.name }}}</option>
		<# } ); #>
	</select>
</div>
<?php }
}
