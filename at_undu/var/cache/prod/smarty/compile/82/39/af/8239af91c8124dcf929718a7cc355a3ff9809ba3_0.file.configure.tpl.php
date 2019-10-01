<?php
/* Smarty version 3.1.33, created on 2019-09-27 13:27:09
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\appagebuilder\views\templates\admin\configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8e466ddbba04_63418593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8239af91c8124dcf929718a7cc355a3ff9809ba3' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\appagebuilder\\views\\templates\\admin\\configure.tpl',
      1 => 1547087526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8e466ddbba04_63418593 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\admin\configure -->
<?php if (isset($_smarty_tpl->tpl_vars['errors']->value) && count($_smarty_tpl->tpl_vars['errors']->value) && current($_smarty_tpl->tpl_vars['errors']->value) != '' && (!isset($_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value) || $_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value == false)) {?>

	<div class="bootstrap">
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
		<?php if (count($_smarty_tpl->tpl_vars['errors']->value) == 1) {?>
			<?php echo reset($_smarty_tpl->tpl_vars['errors']->value);?>

		<?php } else { ?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d errors','sprintf'=>array(count($_smarty_tpl->tpl_vars['errors']->value)),'mod'=>'appagebuilder'),$_smarty_tpl ) );?>

			<br/>
			<ol>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
					<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ol>
		<?php }?>
		</div>
	</div>
<?php }
echo $_smarty_tpl->tpl_vars['guide_box']->value;?>
<div class="panel">
	<h3><i class="icon icon-book"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Documentation','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</h3>
	<p>
        &raquo; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Before Start You can click here to read guide','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 :
        <ul>
            <li><a href="http://demothemes.info/prestashop/appagebuilder/guide/" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read Guide','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a></li>
        </ul>
		&raquo; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can start with Ap Page Builder following steps','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 :
		<ul>
			<li><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['create_profile_link']->value,'html','UTF-8' ));?>
" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create new Profile','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a></li>
		</ul>
		&raquo; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Others management function:','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

		<ul>
			<li><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile_link']->value,'html','UTF-8' ));?>
" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manager Profile','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
				<span> - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This function enables you to manage all profiles in the module. This function is useful when you\'re building plans before the home interface changes, the product page for the event discounts, holidays ... by changing the options Default profile','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</span>
			</li>
			<li><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position_link']->value,'html','UTF-8' ));?>
" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manager Position','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
				<span> - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This function enables you to manage all of the position of all profiles. This function is useful when you have multiple profiles','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</span>
			</li>
			<li><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_link']->value,'html','UTF-8' ));?>
" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manager Product List Builder','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
				<span> - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A function to help you design the details of the composition of the products displayed in the list of products on the website.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</span>
			</li>
		</ul>
	</p>
</div>
<div class="panel">
	<h3>
        <i class="icon icon-credit-card"></i> <span class="open-content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sample Data','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</span>
        </h3>
        <div class="panel-content-builder">
            <p>
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here is my module page builder!','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</strong><br />
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thanks to PrestaShop, now I have a great module.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
<br />
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can configure it using the following configuration form.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

            </p>
            <div class="alert alert-info">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can click here to import demo data','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

            </div>
            <a class="btn btn-default btn-primary" onclick="javascript:return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure you want to install demo?','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
')" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_link']->value,'html','UTF-8' ));?>
&installdemo=1"><i class="icon-AdminTools"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Install Demo Data','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
            <br/><br/>
            <div class="alert alert-info">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can download demo image in','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
<br/>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Then you can unzip and copy folder appagebuilder to Root/themes/THEME_NAME/assets/img/modules','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

            </div>
            <a class="btn btn-default btn-primary" href="http://demothemes.info/prestashop/appagebuilder/appagebuilder.zip"><i class="icon-AdminCatalog"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Demo Image','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a><br/>
						<br/><br/>
												        </div>
</div>
<div class="panel">
	<h3>
        <i class="icon icon-credit-card"></i> <span class="open-content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back-up and Update','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</span>
        </h3>
        <div class="panel-content-builder">
            <div class="alert alert-info">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please click back-up button to back-up database','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_link']->value,'html','UTF-8' ));?>
&backup=1">
                        <i class="icon-AdminParentPreferences"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back-up to PHP file','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

                    </a>                
                </div>
                
            </div>
            <hr/><br/>
            <div class="alert alert-info">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can select a file by date backup to restore data','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

            </div>
            <div class="row">
                <form class="defaultForm form-horizontal" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_link']->value,'html','UTF-8' ));?>
" method="post" enctype="multipart/form-data" novalidate="">
                    <div class="col-sm-12">
                        <?php if ($_smarty_tpl->tpl_vars['back_up_file']->value) {?>
                            <select name="backupfile" style="width:50%">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['back_up_file']->value, 'file', false, NULL, 'Modulefile', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
                                <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value,'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value,'html','UTF-8' ));?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        <?php } else { ?>
                            <i style="color:red"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No file to select in : ','mod'=>'appagebuilder'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['backup_dir']->value;?>
</i>
                        <?php }?>
                        <br/>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-default" name="restore">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Restore from PHP file','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

                        </button>
                    </div>
                </form>
            </div>
            <hr/><br/>
            <div class="alert alert-warning">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete position do not use (fix error when create profile)','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

            </div>
            <a class="btn btn-default" onclick="javascript:return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure you want to Delete do not use position. Please back-up all thing before?','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
')" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_link']->value,'html','UTF-8' ));?>
&deleteposition=1">
                <i class="icon-AdminParentPreferences"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete do not use position','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
            <hr/><br/>
            <div class="alert alert-info">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please click on update and correct button to update module to latest version. Please backup database and file before process','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

            </div>
			<p>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guide to use product and category layout (advanced user and developer)','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 <a href="https://www.leotheme.com/guides/prestashop17/ap_page_builder/#!/Update_Multiple_Product_Layout" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click Here','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

			</p>
            <a class="btn btn-default" onclick="javascript:return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure you want to Update Database. Please back-up all things before?','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
')" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_link']->value,'html','UTF-8' ));?>
&submitUpdateModule=1">
                <i class="icon-AdminParentPreferences"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update and Correct Module','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
            <a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_link']->value,'html','UTF-8' ));?>
&submitUpdateModule=1&action=productcategory">
                <i class="icon-AdminParentPreferences"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update to use product and category layout','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>					
        </div>
</div><?php }
}
