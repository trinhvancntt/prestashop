<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-24 14:57:17
  from 'D:\xampp\htdocs\prestashop\rb_davici\themes\rb_davici\modules\rbthemefunction\views\templates\hook\rb-wishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60846a0da97af5_67544032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcd16fa5f97d6c6b24bd4938673504acec6e5d74' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\themes\\rb_davici\\modules\\rbthemefunction\\views\\templates\\hook\\rb-wishlist.tpl',
      1 => 1617188122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60846a0da97af5_67544032 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rb-wishlist">
	<?php if (isset($_smarty_tpl->tpl_vars['wishlists']->value) && count($_smarty_tpl->tpl_vars['wishlists']->value) > 1) {?>
		<div class="dropdown rb-wishlist-dropdown">
			<button class="rb-wishlist-button rb-btn-product show-list btn-product btn<?php if ($_smarty_tpl->tpl_vars['added_wishlist']->value) {?> rb_added<?php }?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-id-wishlist="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_wishlist_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_wishlist_id_product_attribute']->value, ENT_QUOTES, 'UTF-8');?>
">
				<span class="rb-wishlist-content">
					<i class="icon-btn-product icon-wishlist icon-heart"></i>
					<span class="icon-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
				</span>
			</button>
		  <div class="dropdown-menu rb-list-wishlist rb-list-wishlist-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_wishlist_id_product']->value, ENT_QUOTES, 'UTF-8');?>
">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlists']->value, 'wishlists_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['wishlists_item']->value) {
?>
				<a href="#" class="rb-wishlist-link dropdown-item list-group-item list-group-item-action wishlist-item<?php if (in_array($_smarty_tpl->tpl_vars['wishlists_item']->value['id_rbthemefunction_wishlist'],$_smarty_tpl->tpl_vars['wishlists_added']->value)) {?> rb_added <?php }?>" data-id-wishlist="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlists_item']->value['id_rbthemefunction_wishlist'], ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_wishlist_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_wishlist_id_product_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if (in_array($_smarty_tpl->tpl_vars['wishlists_item']->value['id_rbthemefunction_wishlist'],$_smarty_tpl->tpl_vars['wishlists_added']->value)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove from Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}?>">
					<i class="icon-btn-product icon-wishlist icon-heart"></i>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlists_item']->value['name'], ENT_QUOTES, 'UTF-8');?>

				</a>			
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		  </div>
		</div>
	<?php } else { ?>
		<a class="rb-wishlist-link rb-btn-product <?php if ($_smarty_tpl->tpl_vars['added_wishlist']->value) {?> rb_added<?php }?>" href="#" data-id-wishlist="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_wishlist_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_wishlist_id_product_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" data-id_wishlist_product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_wishlist_product']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['added_wishlist']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove from Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}?>">
			<i class="icon-btn-product icon-wishlist icon-heart"></i>
			<span class="icon-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
		</a>
	<?php }?>
</div><?php }
}
