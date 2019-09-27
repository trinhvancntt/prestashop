<?php
/* Smarty version 3.1.33, created on 2019-09-27 04:12:21
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\leoslideshow\views\templates\hook\panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8dc465827812_62355891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '625dbede7a1c78aff5a9b8595050d9be7c300499' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\leoslideshow\\views\\templates\\hook\\panel.tpl',
      1 => 1551685753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8dc465827812_62355891 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="leoslideshow-group">

	<div class="panel panel-default">
		<div class="panel-heading"><i class="icon-cogs"></i> <?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</div>
		
		<div class="panel-content" id="slideshowgeneralsetting">
			<ul class="nav nav-tabs leoslideshow-tablist" role="tablist">
				<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_0') {?> active<?php }?>">
					<a class="nav-link" href="#fieldset_0" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'General Setting','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
				</li>
				<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_1_1') {?> active<?php }?>">
					<a class="nav-link" href="#fieldset_1_1" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image Setting','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
				</li>
				<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_2_2') {?> active<?php }?>">
					<a class="nav-link" href="#fieldset_2_2" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CSS Setting','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
				</li>
				<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_3_3') {?> active<?php }?>">
					<a class="nav-link" href="#fieldset_3_3" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Navigator and Direction','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
				</li>
				<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_4_4') {?> active<?php }?>">
					<a class="nav-link" href="#fieldset_4_4" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Timer Options','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
				</li>
				<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_5_5') {?> active<?php }?>">
					<a class="nav-link" href="#fieldset_5_5" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Animation','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
				</li>
			</ul>
			<div class="tab-content">
				<?php echo $_smarty_tpl->tpl_vars['globalform']->value;?>
			</div>
		</div>	

	</div>
		
</div><?php }
}
