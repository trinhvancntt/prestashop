<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-13 09:15:20
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\setting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_609d2668e690f1_41695309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8a64f0ed2f8628ff0d150f3264c53ee8aff0458' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\setting.tpl',
      1 => 1612599910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609d2668e690f1_41695309 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="rbthemedream-group" data-url="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
">
	<div class="panel panel-default">
		<div class="panel-heading"><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme Config','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</div>
		
		<div class="panel-content" id="rbthemedream-setting">
			<ul class="nav nav-tabs rbthemedream-tablist" role="tablist">
				<li class="nav-item active">
					<a class="nav-link" href="#fieldset_0" role="tab" data-toggle="tab">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layout','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#fieldset_1_1" role="tab" data-toggle="tab">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact Page','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#fieldset_2_2" role="tab" data-toggle="tab">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Social Link','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#fieldset_3_3" role="tab" data-toggle="tab">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data Same','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#fieldset_4_4" role="tab" data-toggle="tab">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom Style','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

					</a>
				</li>
			</ul>
			<div class="tab-content">
				<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

			</div>
		</div>	
	</div>	
</div><?php }
}
