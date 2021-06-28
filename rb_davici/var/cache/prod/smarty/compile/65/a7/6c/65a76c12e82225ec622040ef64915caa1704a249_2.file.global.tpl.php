<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 06:43:06
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\combinationsincatalog\views\templates\hook\ps17\global.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c5e13ab4fde5_03731094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65a76c12e82225ec622040ef64915caa1704a249' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\combinationsincatalog\\views\\templates\\hook\\ps17\\global.tpl',
      1 => 1617689225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c5e13ab4fde5_03731094 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
//<![CDATA[
	var combinationsInCatalogData = JSON.parse('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['combinationsInCatalogData']->value,"javascript","UTF-8" ));?>
');
	var advancedFormFields = JSON.parse('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['advancedFormFields']->value,"javascript","UTF-8" ));?>
');
	var productCombinationsControllerLink = '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productCombinationsControllerLink']->value,"javascript","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
';
	var cartControllerLink = '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartControllerLink']->value,"javascript","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
';
	var greaterThan1750 = Boolean('<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['greaterThan1750']->value,"javascript","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
');
	var idLang = '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['idLang']->value,"javascript","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
';
	var addToCartLabel = '<i class="material-icons shopping-cart">&#xE547;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions','mod'=>'combinationsincatalog'),$_smarty_tpl ) );?>
';
//]]>
<?php echo '</script'; ?>
>


<?php }
}
