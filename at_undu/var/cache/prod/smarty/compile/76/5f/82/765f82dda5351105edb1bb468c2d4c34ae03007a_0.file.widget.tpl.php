<?php
/* Smarty version 3.1.33, created on 2019-09-27 03:31:58
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\leobootstrapmenu\views\templates\admin\leo_widgets\widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8dbaee4a1297_12438973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '765f82dda5351105edb1bb468c2d4c34ae03007a' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\leobootstrapmenu\\views\\templates\\admin\\leo_widgets\\widget.tpl',
      1 => 1548660708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8dbaee4a1297_12438973 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['widget_selected']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
	 <?php echo '<script'; ?>
 type="text/javascript">
		$('#widget_type').change( function(){
			location.href = '<?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' )));?>
&wtype='+$(this).val();
		} );
	<?php echo '</script'; ?>
>	
 <?php } else { ?>
 <div class="col-lg-12" style="padding:20px;">
		 <?php if ($_smarty_tpl->tpl_vars['is_using_managewidget']->value) {?>
		<div class="col-lg-5">
		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Only for Module leomanagewidgets','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</h3> 
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'text', false, 'widget');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value => $_smarty_tpl->tpl_vars['text']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['text']->value['for'] == 'manage') {?>
					<div class="col-lg-6">
						<h4><a href="<?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' )));?>
&wtype=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value,'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['text']->value['label'],'html','UTF-8' ));?>
</a></h4>
						<p><i><?php echo $_smarty_tpl->tpl_vars['text']->value['explain'];?>
</i></p>	
					</div>
				<?php }?>	
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
		</div>
		<?php }?>
		<div class="col-lg-6 col-lg-offset-1">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'text', false, 'widget');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value => $_smarty_tpl->tpl_vars['text']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['text']->value['for'] != 'manage') {?>
					<div class="col-lg-6">
						<h4><a href="<?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' )));?>
&wtype=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value,'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['text']->value['label'],'html','UTF-8' ));?>
</a></h4>
						<p><i><?php echo $_smarty_tpl->tpl_vars['text']->value['explain'];?>
</i></p>	
					</div>
				<?php }?>	
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
		</div>
</div>		
<?php }
}
}
