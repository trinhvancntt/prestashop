<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-13 09:15:20
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\rb-export.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_609d26682ac262_57261887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ced8645a51a0c437c27f7e2a61db85794da1f18' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\rb-export.tpl',
      1 => 1612599910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609d26682ac262_57261887 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-md-12">
	    <label class="rb-check-module" for="rb_rbthemedream">
	    	<input id="rb_rbthemedream" type="checkbox" name="rb_rbthemedream" value="1">
	    	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'rbthemedream','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</span>
		</label>

		<h3 class="block-title">
    		<p class="help-block" style="display: inline-block;">
    			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back Up: ','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

    			"<?php echo $_smarty_tpl->tpl_vars['rb_dir']->value;?>
rbthemedream/sql/same.php"
    		</p>
    	</h3>
	</div>

	<div class="col-md-12">
		<label class="rb-check-module" for="rb_rbthememenu">
	    	<input id="rb_rbthememenu" type="checkbox" name="rb_rbthememenu" value="1">
	    	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'rbthememenu','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</span>
		</label>

		<h3 class="block-title">
    		<p class="help-block" style="display: inline-block;">
    			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back Up: ','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

    			"<?php echo $_smarty_tpl->tpl_vars['rb_dir']->value;?>
rbthememenu/sql/same.php"
    		</p>
    	</h3>
	</div>

	<div class="col-md-12">
		<label class="rb-check-module" for="rb_rbthemeblog">
	    	<input id="rb_rbthemeblog" type="checkbox" name="rb_rbthemeblog" value="1">
	    	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'rbthemeblog','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</span>
		</label>

		<h3 class="block-title">
    		<p class="help-block" style="display: inline-block;">
    			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back Up: ','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

    			"<?php echo $_smarty_tpl->tpl_vars['rb_dir']->value;?>
rbthemeblog/sql/same.php"
    		</p>
    	</h3>
	</div>

	<div class="col-md-12">
		<label class="rb-check-module" for="rb_slider">
	    	<input id="rb_slider" type="checkbox" name="rb_slider" value="1">
	    	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'rbthemeslider','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</span>
		</label>

		<h3 class="block-title">
    		<p class="help-block" style="display: inline-block;">
    			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back Up: ','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

    			"<?php echo $_smarty_tpl->tpl_vars['rb_dir']->value;?>
rbthemeslidersql/same.php"
    		</p>
    	</h3>
	</div>
	
	<div class="col-md-12">
		<button 
	    	id="submitExportSameRbthemedreamModule"
	    	type="submit" class="btn btn-success rb-export"
	    	name="submitExportSameRbthemedreamModule"
	    	value="1"
	    >
	    	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export data Same','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

		</button>

	    <button 
	    	id="submitExportRbthemedreamModule"
	    	type="submit" class="btn btn-success rb-export"
	    	name="submitExportRbthemedreamModule"
	    	value="1"
	    >
	    	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export data struct','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

		</button>
		
		<h3 class="block-title">
		    <p class="help-block" style="display: inline-block;">
		    	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back Up: ','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

		    	"<?php echo $_smarty_tpl->tpl_vars['rb_dir']->value;?>
rbthemedream/data/"
		    </p>
		</h3>
	</div>

	<div class="col-md-12">
		<a
			class="btn btn-default"
			onclick="javascript:return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure you want Update Module. Please backup all things before?','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
')"
			href="<?php echo $_smarty_tpl->tpl_vars['module_link']->value;?>
&submitUpdateModule=1"
		>
	        <i class="icon-AdminParentPreferences"></i>
	    	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update and Correct Module','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

	    </a>
	</div>
</div><?php }
}
