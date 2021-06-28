<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 12:32:40
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbsizeguide\views\templates\hook\modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c63328e8ad69_11570248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dd62fb479d6c4134cd176b1f0fa3c25bb80c0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbsizeguide\\views\\templates\\hook\\modal.tpl',
      1 => 1612599932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c63328e8ad69_11570248 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal rbsizeguide-modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header">
            	<div class="modal-body">
            		<?php if (isset($_smarty_tpl->tpl_vars['show_img']->value) && $_smarty_tpl->tpl_vars['show_img']->value == 1 && $_smarty_tpl->tpl_vars['url_img']->value != '') {?>
            			<div class="row">
            				<?php if (!empty($_smarty_tpl->tpl_vars['lists']->value) || $_smarty_tpl->tpl_vars['show_default']->value == 1) {?>
	            				<div class="col-md-6">
	            					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_img']->value, ENT_QUOTES, 'UTF-8');?>
" style="max-width:100%;height:auto;">
	            				</div>

	            				<div class="col-md-6">
	            					<ul class="nav nav-tabs">
		            					<?php if ($_smarty_tpl->tpl_vars['show_default']->value == 1) {?>
		            						<li class="nav-item">
		            							<a
		            								class="nav-link active"
		            								href="#rb_sizeguide"
		            								title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Size Guide','mod'=>'rbsizeguide'),$_smarty_tpl ) );?>
"
		            								data-toggle="tab"
		            							>
													<h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Size Guide','mod'=>'rbsizeguide'),$_smarty_tpl ) );?>
</h5>
												</a>
		            						</li>
		            					<?php }?>

		            					<?php if (!empty($_smarty_tpl->tpl_vars['lists']->value)) {?>
		            						<?php $_smarty_tpl->_assignInScope('count_title', 1);?>

		            						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lists']->value, 'list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
?>
			            						<li class="nav-item">
			            							<a 
			            								class="nav-link<?php if ($_smarty_tpl->tpl_vars['show_default']->value != 1 && $_smarty_tpl->tpl_vars['count_title']->value == 1) {?> active<?php }?>"
			            								href="#rb_sizeguide_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_title']->value, ENT_QUOTES, 'UTF-8');?>
"
			            								title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['title'], ENT_QUOTES, 'UTF-8');?>
"
			            								data-toggle="tab"
			            							>
			            								<h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h5>
			            							</a>	
			            						</li>

			            						<?php $_smarty_tpl->_assignInScope('count_title', $_smarty_tpl->tpl_vars['count_title']->value+1);?>
		            						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		            					<?php }?>
	            					</ul>
	            					<div class="tab-content">
	            						<?php if ($_smarty_tpl->tpl_vars['show_default']->value == 1) {?>
	            							<div id="rb_sizeguide"  class="tab-pane rte fade active in">
	            								<?php echo $_smarty_tpl->tpl_vars['content_default']->value;?>

	            							</div>
	            						<?php }?>

	            						<?php if (!empty($_smarty_tpl->tpl_vars['lists']->value)) {?>
	            							<?php $_smarty_tpl->_assignInScope('count_content', 1);?>

	            							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lists']->value, 'list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
?>
	            								<div
	            									id="rb_sizeguide_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_content']->value, ENT_QUOTES, 'UTF-8');?>
"
	            									class="tab-pane rte fade <?php if ($_smarty_tpl->tpl_vars['show_default']->value != 1 && $_smarty_tpl->tpl_vars['count_title']->value == 1) {?> active in<?php }?>"
	            								>
	            									<?php echo $_smarty_tpl->tpl_vars['list']->value['content'];?>

	            								</div>

	            								<?php $_smarty_tpl->_assignInScope('count_content', $_smarty_tpl->tpl_vars['count_content']->value+1);?>
	            							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	            						<?php }?>
	            					</div>
	            				</div>
	            			<?php } else { ?>
	            				<div class="col-md-12">
	            					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_img']->value, ENT_QUOTES, 'UTF-8');?>
" style="max-width:100%;height:auto;">
	            				</div>	
            				<?php }?>
            			</div>
            		<?php } else { ?>
            			<div class="row">
            				<div class="col-md-12">
	            				<ul class="nav nav-tabs">
		            				<?php if ($_smarty_tpl->tpl_vars['show_default']->value == 1) {?>
		            					<li class="nav-item">
		            						<a
		            							class="nav-link active"
		            							href="#rb_sizeguide"
		            							title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Size Guide','mod'=>'rbsizeguide'),$_smarty_tpl ) );?>
"
		            							data-toggle="tab"
		            						>
												<h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Size Guide','mod'=>'rbsizeguide'),$_smarty_tpl ) );?>
</h5>
											</a>
		            					</li>
		            				<?php }?>

		            				<?php if (!empty($_smarty_tpl->tpl_vars['lists']->value)) {?>
		            					<?php $_smarty_tpl->_assignInScope('count_title', 1);?>

		            					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lists']->value, 'list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
?>
			            					<li class="nav-item">
			            						<a 
			            							class="nav-link<?php if ($_smarty_tpl->tpl_vars['show_default']->value != 1 && $_smarty_tpl->tpl_vars['count_title']->value == 1) {?> active<?php }?>"
			            							href="#rb_sizeguide_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_title']->value, ENT_QUOTES, 'UTF-8');?>
"
			            							title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['title'], ENT_QUOTES, 'UTF-8');?>
"
			            							data-toggle="tab"
			            						>
			            							<h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h5>
			            						</a>	
			            					</li>

			            					<?php $_smarty_tpl->_assignInScope('count_title', $_smarty_tpl->tpl_vars['count_title']->value+1);?>
		            					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		            				<?php }?>
	            				</ul>
	            				<div class="tab-content">
	            					<?php if ($_smarty_tpl->tpl_vars['show_default']->value == 1) {?>
	            						<div id="rb_sizeguide"  class="tab-pane rte fade active in">
	            							<?php echo $_smarty_tpl->tpl_vars['content_default']->value;?>

	            						</div>
	            					<?php }?>

	            					<?php if (!empty($_smarty_tpl->tpl_vars['lists']->value)) {?>
	            						<?php $_smarty_tpl->_assignInScope('count_content', 1);?>

	            						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lists']->value, 'list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
?>
	            							<div
	            								id="rb_sizeguide_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_content']->value, ENT_QUOTES, 'UTF-8');?>
"
	            								class="tab-pane rte fade <?php if ($_smarty_tpl->tpl_vars['show_default']->value != 1 && $_smarty_tpl->tpl_vars['count_title']->value == 1) {?> active in<?php }?>"
	            							>
	            								<?php echo $_smarty_tpl->tpl_vars['list']->value['content'];?>

	            							</div>

	            							<?php $_smarty_tpl->_assignInScope('count_content', $_smarty_tpl->tpl_vars['count_content']->value+1);?>
	            						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	            					<?php }?>
	            				</div>
	            			</div>
            			</div>
            		<?php }?>
            	</div>
            </div>
		</div>
	</div>
</div><?php }
}
