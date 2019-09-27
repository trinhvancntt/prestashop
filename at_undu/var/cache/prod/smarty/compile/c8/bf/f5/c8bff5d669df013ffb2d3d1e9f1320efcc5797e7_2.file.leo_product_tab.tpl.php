<?php
/* Smarty version 3.1.33, created on 2019-09-27 04:22:02
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\leofeature\views\templates\hook\leo_product_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8dc6aa2dc098_38044055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8bff5d669df013ffb2d3d1e9f1320efcc5797e7' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\leofeature\\views\\templates\\hook\\leo_product_tab.tpl',
      1 => 1532488910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8dc6aa2dc098_38044055 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value) && $_smarty_tpl->tpl_vars['USE_PTABS']->value == 'default') {?>
	<h4 class="title-info-product leo-product-show-review-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'leofeature'),$_smarty_tpl ) );?>
</h4>
<?php } elseif (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value) && $_smarty_tpl->tpl_vars['USE_PTABS']->value == 'accordion') {?>
	<div class="card-header" role="tab" id="headingleofeatureproductreview">
	  <h5 class="h5">
		<a class="collapsed leo-product-show-review-title leofeature-accordion" data-toggle="collapse" data-parent="#accordion" href="#collapseleofeatureproductreview" aria-expanded="false" aria-controls="collapseleofeatureproductreview">
		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'leofeature'),$_smarty_tpl ) );?>

		</a>
	 </h5>
  </div>
<?php } else { ?>
	<li class="nav-item">
	  <a class="nav-link leo-product-show-review-title" data-toggle="tab" href="#leo-product-show-review-content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'leofeature'),$_smarty_tpl ) );?>
</a>
	</li>
<?php }?>

<?php }
}
