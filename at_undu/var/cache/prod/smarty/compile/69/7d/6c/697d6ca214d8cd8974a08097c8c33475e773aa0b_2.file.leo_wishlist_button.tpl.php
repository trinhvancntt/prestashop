<?php
/* Smarty version 3.1.33, created on 2019-08-30 02:47:29
  from 'W:\xampp\htdocs\prestashop\at_undu\themes\at_undu\modules\leofeature\views\templates\hook\leo_wishlist_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d68c681665804_40603809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '697d6ca214d8cd8974a08097c8c33475e773aa0b' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\themes\\at_undu\\modules\\leofeature\\views\\templates\\hook\\leo_wishlist_button.tpl',
      1 => 1553050753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68c681665804_40603809 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wishlist">
<?php if (isset($_smarty_tpl->tpl_vars['wishlists']->value) && count($_smarty_tpl->tpl_vars['wishlists']->value) > 1) {?>
	
	<div class="dropdown leo-wishlist-button-dropdown">
	  <button class="leo-wishlist-button btn-product dropdown-toggle show-list btn<?php if ($_smarty_tpl->tpl_vars['added_wishlist']->value) {?> added<?php }?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-id-wishlist="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product_attribute']->value, ENT_QUOTES, 'UTF-8');?>
">
			<span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
			<span class="leo-wishlist-bt-content">
				<i class="nova-heart"></i>
				<span class="btn-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
			</span>
	  </button>
	  <div class="dropdown-menu leo-list-wishlist leo-list-wishlist-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product']->value, ENT_QUOTES, 'UTF-8');?>
">
		
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlists']->value, 'wishlists_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['wishlists_item']->value) {
?>
			<a href="#" class="dropdown-item list-group-item list-group-item-action wishlist-item<?php if (in_array($_smarty_tpl->tpl_vars['wishlists_item']->value['id_wishlist'],$_smarty_tpl->tpl_vars['wishlists_added']->value)) {?> added <?php }?>" data-id-wishlist="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlists_item']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if (in_array($_smarty_tpl->tpl_vars['wishlists_item']->value['id_wishlist'],$_smarty_tpl->tpl_vars['wishlists_added']->value)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove from Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlists_item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>			
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	  </div>
	</div>
<?php } else { ?>
	<a class="leo-wishlist-button btn-product btn<?php if ($_smarty_tpl->tpl_vars['added_wishlist']->value) {?> added<?php }?>" href="#" data-id-wishlist="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['added_wishlist']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove from Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}?>">
		<span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
		<span class="leo-wishlist-bt-content">
			<i class="nova-heart"></i>
			<span class="btn-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
		</span>
	</a>
<?php }?>
</div>

<?php }
}
