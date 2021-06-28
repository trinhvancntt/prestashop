<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-18 14:25:43
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemefunction\views\templates\admin\setting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60cce52760a5c1_61366163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16c533917ab3865b4b32b93652cd1468a543c439' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemefunction\\views\\templates\\admin\\setting.tpl',
      1 => 1612599932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cce52760a5c1_61366163 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="rbthemefunction-group" data-url="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
">
	<div class="panel panel-default">
		<div class="panel-heading">
			<i class="icon-cogs"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Config','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>

		</div>

		<div class="panel-content" id="rbthemefunction-setting">
			<ul class="nav nav-tabs rbthemefunction-tablist" role="tablist">
				<li class="nav-item active">
					<a class="nav-link" href="#fieldset_0" role="tab" data-toggle="tab">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings General','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>

					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#fieldset_1_1" role="tab" data-toggle="tab">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings Facebook','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>

					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#fieldset_2_2" role="tab" data-toggle="tab">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings Popup','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>

					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#fieldset_3_3" role="tab" data-toggle="tab">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings Slick Thumb','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>

					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#fieldset_4_4" role="tab" data-toggle="tab">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings Zoom Product','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>

					</a>
				</li>
			</ul>
			<div class="tab-content">
				<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

			</div>
		</div>
	</div>
</div>

<style type="text/css">
	#rbthemefunction-setting .panel {
		display: none;
	}
	#rbthemefunction-setting .active {
		display: block;
	}
</style><?php }
}
