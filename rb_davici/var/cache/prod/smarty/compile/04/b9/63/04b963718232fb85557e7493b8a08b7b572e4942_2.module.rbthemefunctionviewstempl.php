<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-02 15:32:08
  from 'module:rbthemefunctionviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603ea0c8b86780_53428342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04b963718232fb85557e7493b8a08b7b572e4942' => 
    array (
      0 => 'module:rbthemefunctionviewstempl',
      1 => 1614370577,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603ea0c8b86780_53428342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1903018553603ea0c8b73580_80156703', 'product_add_to_cart');
}
/* {block 'product_availability'} */
class Block_1329596534603ea0c8b7c107_20779098 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<span class="product-availability hidden">
									<?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
										<?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
											<i class="material-icons product-available">available</i>
										<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
											<i class="material-icons product-last-items">last-items</i>
										<?php } else { ?>
											<i class="material-icons product-unavailable">unavailable</i>
										<?php }?>
									<?php }?>
								</span>
							<?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_quantity'} */
class Block_513902423603ea0c8b7a1a0_62592215 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<div class="product-quantity">
						<div class="add">
							<button class="btn rb-btn-product add-to-cart" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'rbthemefunction'),$_smarty_tpl ) );?>
" data-button-action="add-to-cart" type="submit">
								<i class="icon-bag"></i>
								<span class="icon-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add To Cart','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
							</button>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1329596534603ea0c8b7c107_20779098', 'product_availability', $this->tplIndex);
?>

						</div>
					</div>
				<?php
}
}
/* {/block 'product_quantity'} */
/* {block 'product_minimal_quantity'} */
class Block_1151663753603ea0c8b819b3_10491521 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<p class="product-minimal-quantity hidden">
						<?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > 1) {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'rbthemefunction','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl ) );?>

						<?php }?>
					</p>
				<?php
}
}
/* {/block 'product_minimal_quantity'} */
/* {block 'product_add_to_cart'} */
class Block_1903018553603ea0c8b73580_80156703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_add_to_cart' => 
  array (
    0 => 'Block_1903018553603ea0c8b73580_80156703',
  ),
  'product_quantity' => 
  array (
    0 => 'Block_513902423603ea0c8b7a1a0_62592215',
  ),
  'product_availability' => 
  array (
    0 => 'Block_1329596534603ea0c8b7c107_20779098',
  ),
  'product_minimal_quantity' => 
  array (
    0 => 'Block_1151663753603ea0c8b819b3_10491521',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="product-add-to-cart-rb">
		<?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] != 'unavailable') {?>
			<?php if ((((Configuration::get('PS_ATTRIBUTE_CATEGORY_DISPLAY') == 1) && (!empty($_smarty_tpl->tpl_vars['product']->value['main_variants']))) || (Configuration::get('PS_ATTRIBUTE_CATEGORY_DISPLAY') == 1 || empty($_smarty_tpl->tpl_vars['product']->value['main_variants'])))) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_513902423603ea0c8b7a1a0_62592215', 'product_quantity', $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1151663753603ea0c8b819b3_10491521', 'product_minimal_quantity', $this->tplIndex);
?>
	
			<?php }?>
		<?php }?>
	</div>
<?php
}
}
/* {/block 'product_add_to_cart'} */
}
