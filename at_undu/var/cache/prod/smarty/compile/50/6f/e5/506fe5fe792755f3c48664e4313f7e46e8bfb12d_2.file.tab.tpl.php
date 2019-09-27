<?php
/* Smarty version 3.1.33, created on 2019-09-27 04:22:02
  from 'W:\xampp\htdocs\prestashop\at_undu\themes\at_undu\templates\sub\product_info\tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8dc6aa2c0b13_28882511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '506fe5fe792755f3c48664e4313f7e46e8bfb12d' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\themes\\at_undu\\templates\\sub\\product_info\\tab.tpl',
      1 => 1553050754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-details.tpl' => 1,
  ),
),false)) {
function content_5d8dc6aa2c0b13_28882511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2476080765d8dc6aa29d897_00127384', 'product_tabs');
}
/* {block 'product_description'} */
class Block_6360480035d8dc6aa2ad296_98539277 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		       		<div class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
		     	<?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_16842791155d8dc6aa2ad290_17724693 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		     	<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		   	<?php
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
class Block_19578194895d8dc6aa2ad297_05538663 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		     	<?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
		      	<div class="tab-pane fade in" id="attachments" role="tabpanel">
		         	<section class="product-attachments">
		           		<h3 class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h3>
			           	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
?>
			             	<div class="attachment">
				               	<h4><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4>
				               	<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
				               	<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
				                 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)
				               	</a>
			             	</div>
			           	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		         	</section>
		       	</div>
		     	<?php }?>
		   	<?php
}
}
/* {/block 'product_attachments'} */
/* {block 'product_tabs'} */
class Block_2476080765d8dc6aa29d897_00127384 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_tabs' => 
  array (
    0 => 'Block_2476080765d8dc6aa29d897_00127384',
  ),
  'product_description' => 
  array (
    0 => 'Block_6360480035d8dc6aa2ad296_98539277',
  ),
  'product_details' => 
  array (
    0 => 'Block_16842791155d8dc6aa2ad290_17724693',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_19578194895d8dc6aa2ad297_05538663',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="product-tabs tabs">
	  	<ul class="nav nav-tabs" role="tablist">
		    <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
		    	<li class="nav-item">
				   <a
					 class="nav-link<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>"
					 data-toggle="tab"
					 href="#description"
					 role="tab"
					 aria-controls="description"
					 <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
				</li>
	    	<?php }?>
		    <li class="nav-item">
				<a
				  class="nav-link<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>"
				  data-toggle="tab"
				  href="#product-details"
				  role="tab"
				  aria-controls="product-details"
				  <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
			</li>
		    <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
				<li class="nav-item">
				  <a
					class="nav-link"
					data-toggle="tab"
					href="#attachments"
					role="tab"
					aria-controls="attachments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
				</li>
			 <?php }?>
		    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
			    <li class="nav-item">
				  <a
					class="nav-link"
					data-toggle="tab"
					href="#extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"
					role="tab"
					aria-controls="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
				</li>
		    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProductTab','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

	  	</ul>

	  	<div class="tab-content" id="tab-content">
		   	<div class="tab-pane fade in<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" id="description" role="tabpanel">
		     	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6360480035d8dc6aa2ad296_98539277', 'product_description', $this->tplIndex);
?>

		   	</div>

		   	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16842791155d8dc6aa2ad290_17724693', 'product_details', $this->tplIndex);
?>


		   	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19578194895d8dc6aa2ad297_05538663', 'product_attachments', $this->tplIndex);
?>

		   	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProductTabContent','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

		   	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
			   	<div class="tab-pane fade in <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" role="tabpanel" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
			       <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

			   	</div>
		   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
<?php
}
}
/* {/block 'product_tabs'} */
}
