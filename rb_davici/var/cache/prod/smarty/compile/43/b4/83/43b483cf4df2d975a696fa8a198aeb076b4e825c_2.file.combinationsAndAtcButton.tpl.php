<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-17 12:12:40
  from 'D:\xampp\htdocs\prestashop\rb_davici\themes\rb_davici\modules\combinationsincatalog\views\templates\hook\ps17\combinationsAndAtcButton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60cb74785908d0_52757834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43b483cf4df2d975a696fa8a198aeb076b4e825c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\themes\\rb_davici\\modules\\combinationsincatalog\\views\\templates\\hook\\ps17\\combinationsAndAtcButton.tpl',
      1 => 1619163688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cb74785908d0_52757834 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="addToCartFormWrapper" data-product-id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productID']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
	<form action="#" method="post" class="addToCartForm">
		<div class="variantsProductWrapper">
		 	<div class="variants-product">
			  <?php if ($_smarty_tpl->tpl_vars['combinationsInCatalogConfigData']->value['combinations_display_type'] == 0) {?>
				  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productVariants']->value, 'group', false, 'id_attribute_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute_group']->value => $_smarty_tpl->tpl_vars['group']->value) {
?>
				  	<?php if (count($_smarty_tpl->tpl_vars['group']->value['attributes']) > 0) {?>
					    <div class="clearfix product-variants-item">
					    	<?php if ($_smarty_tpl->tpl_vars['combinationsInCatalogConfigData']->value['show_attributes_labels'] == 1) {?>
					      		<span class="control-label"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
					      	<?php }?>
					      <?php if ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'select') {?>
					        <select
					          class="form-control form-control-select"
					          id="group_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
					          data-product-attribute="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
					          name="group[<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
]">
					          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
?>
					            <option value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_attribute']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_attribute']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</option>
					          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					        </select>
					      <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'color') {?>
					      	<?php if ($_smarty_tpl->tpl_vars['combinationsInCatalogConfigData']->value['show_color_as_labels'] == 1) {?>
					      		<select
						          class="form-control form-control-select"
						          id="group_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
						          data-product-attribute="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
						          name="group[<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
]">
						          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
?>
						            <option value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_attribute']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_attribute']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</option>
						          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					        	</select>
				      		<?php } else { ?>
				      			<ul id="group_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="groupUl">
						          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
?>
						            <li class="float-xs-left input-container">
						              <label>
						                <input class="input-color" type="radio" data-product-attribute="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" name="group[<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked"<?php }?>>
						                <span
						                  <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code']) {?>class="color" style="background-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
						                  <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['texture']) {?>class="color texture" style="background-image: url(<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_attribute']->value['texture'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
						                ><span class="sr-only"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_attribute']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></span>
						              </label>
						            </li>
						          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						        </ul>	
					      	<?php }?>
					      <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'radio') {?>
					        <ul id="group_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="groupUl">
					          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
?>
					            <li class="input-container float-xs-left groupLi">
					              <label>
					                <input class="input-radio" type="radio" data-product-attribute="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" name="group[<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked"<?php }?>>
					                <span class="radio-label"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_attribute']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
					              </label>
					            </li>
					          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					        </ul>
					      <?php }?>
					    </div>
				    <?php }?>
				  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			  <?php } else { ?>
			  	<?php echo '<script'; ?>
 type="text/javascript">
					//<![CDATA[
						if (typeof productsVariantsJson == "undefined") {
						   var productsVariantsJson = [];
						}
						productsVariantsJson[<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productID']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
] = JSON.parse('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productsVariantsJson']->value,"javascript","UTF-8" ));?>
');
					//]]>
				<?php echo '</script'; ?>
>
		  		<?php if (count($_smarty_tpl->tpl_vars['productVariants']->value) > 0) {?>
				  	<select
			          class="form-control form-control-select"
			          id="productCombinations"
			          name="productCombinations">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productVariants']->value, 'group', false, 'id_attribute_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute_group']->value => $_smarty_tpl->tpl_vars['group']->value) {
?>
							 <option value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group']->value['default_on'] == 1) {?> selected="selected"<?php }?>><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['combinationsInCatalogConfigData']->value['show_price_for_combination'] == 1) {?> (<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value['price'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
)<?php }?></option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				<?php }?>
			  <?php }?>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['combinationsInCatalogConfigData']->value['display_add_to_cart'] == 1) {?>
			<input
				<?php if ($_smarty_tpl->tpl_vars['combinationsInCatalogConfigData']->value['show_quantity'] == 0) {?>style="display:none"<?php }?>
				id="addToCartNumber_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productID']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
				class="input-group form-control addToCartButtonNumber" 
				name="qty"
				placeholder=""
				type="number"
				value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['quantityWanted']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
				min="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['minimalQuantity']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
			/>
			<button 
				data-button-action="add-to-cart"
				class="btn btn-primary add-to-cart"
				style="width:<?php if ($_smarty_tpl->tpl_vars['combinationsInCatalogConfigData']->value['show_quantity'] == 1) {?>75<?php } else { ?>100<?php }?>%; height: 2.75rem; padding:0;<?php if ($_smarty_tpl->tpl_vars['combinationsInCatalogConfigData']->value['show_quantity'] == 1) {?>margin-left: 10px;<?php }?>"
				<?php if (!$_smarty_tpl->tpl_vars['allowToShowButton']->value) {?> disabled<?php }?>
			>
	        <?php if (!$_smarty_tpl->tpl_vars['allowToShowButton']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['combinationsInCatalogConfigData']->value['button_out_of_stock'][$_smarty_tpl->tpl_vars['idLang']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?><i class="material-icons shopping-cart">&#xE547;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions','mod'=>'combinationsincatalog'),$_smarty_tpl ) );
}?>
			</button>
		<?php }?>
		<input id="addToCartToken_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productID']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="addToCartButtonToken" name="token" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['staticToken']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" placeholder="" type="hidden" />
		<input id="addToCartIdProduct_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productID']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="addToCartButtonIdProduct" name="id_product" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productID']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" placeholder="" type="hidden" />
		<input id="addToCartIdCustomization_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productID']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="addToCartButtonIdCustomization" name="id_customization" value="0" placeholder="" type="hidden" />
	</form>
</div><?php }
}
