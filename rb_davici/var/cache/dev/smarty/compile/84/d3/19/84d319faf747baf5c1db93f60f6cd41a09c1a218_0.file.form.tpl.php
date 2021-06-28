<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-13 09:15:20
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_609d2668a21746_80784581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84d319faf747baf5c1db93f60f6cd41a09c1a218' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1612599910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609d2668a21746_80784581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1189135324609d26687fd2a3_60467747', "field");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_1189135324609d26687fd2a3_60467747 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_1189135324609d26687fd2a3_60467747',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'rb_file') {?>
		<div class="form-group">
			<div class="col-lg-6">
				<div class="row">
					<div class="input-group">
						<input  id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
							type="text"
							value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['input']->value['name'];
$_prefixVariable1 = ob_get_clean();
echo Configuration::get($_prefixVariable1);?>
"
							class="form-control"
							name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
						/>
						<div class="input-group-addon">
							<a href="filemanager/dialog.php?type=1&field_id=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
								class="js-img-upload"
	                            data-input-name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
	                            type="button">
	                            	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select image','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

	                            	<i class="icon-external-link"></i>
	                       	</a>
	                    </div>
                    </div>
				</div>
			</div>
		</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'rb_option1') {?>	
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>
	
	<?php }
}
}
/* {/block "field"} */
}
