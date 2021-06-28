<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-24 14:57:19
  from 'module:rbthemedreamviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60846a0f787998_96788603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e36d64f759afc91851ca4c4bbc6adaca7e7904da' => 
    array (
      0 => 'module:rbthemedreamviewstemplate',
      1 => 1612599910,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60846a0f787998_96788603 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\rb_davici/modules/rbthemedream/views/templates/widget/rb-brand.tpl --><div class="rb-brands">
	<?php if ($_smarty_tpl->tpl_vars['widgetOptions']->value['view'] == 'grid') {?>
	    <div class="row">
	        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgetOptions']->value['brands'], 'brand', false, NULL, 'brand_list', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
?>
	            <div class="col-sm-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widgetOptions']->value['slidesToShow']['mobile'], ENT_QUOTES, 'UTF-8');?>
 col-xs-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widgetOptions']->value['slidesToShow']['mobile'], ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widgetOptions']->value['slidesToShow']['tablet'], ENT_QUOTES, 'UTF-8');?>
 col-lg-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widgetOptions']->value['slidesToShow']['desktop'], ENT_QUOTES, 'UTF-8');?>
 col-xl-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widgetOptions']->value['slidesToShow']['desktop'], ENT_QUOTES, 'UTF-8');?>
">
	                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['link'], ENT_QUOTES, 'UTF-8');?>
">
	                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"/>
	                </a>
	            </div>
	        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	    </div>
	<?php } else { ?>
	    <div class="rb-brands-carousel slick-arrows-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widgetOptions']->value['arrows_position'], ENT_QUOTES, 'UTF-8');?>
"  data-slider_options='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['widgetOptions']->value['options'] ));?>
'>
	        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgetOptions']->value['brands'], 'brand', false, NULL, 'brand_list', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
?>
	            <div class="rb-brands-item">
	                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['link'], ENT_QUOTES, 'UTF-8');?>
">
	                    <img class="img-fluid slick-loading" data-lazy="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
	                    <div class="rb-image-loading"></div>
	                </a>
	            </div>
	        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	    </div>
	<?php }?>
</div><!-- end D:\xampp\htdocs\prestashop\rb_davici/modules/rbthemedream/views/templates/widget/rb-brand.tpl --><?php }
}
