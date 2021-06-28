<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-05 07:33:34
  from 'module:rbthemedreamviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60bb610e80b570_22571173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '224f037d711703a452a4c31dbd3e96aae04ec346' => 
    array (
      0 => 'module:rbthemedreamviewstemplate',
      1 => 1622892762,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bb610e80b570_22571173 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\rb_davici/themes/rb_davici/modules/rbthemedream/views/templates/widget/rb-testimonial.tpl --><?php if (isset($_smarty_tpl->tpl_vars['testimonials_lists']->value) && !empty($_smarty_tpl->tpl_vars['testimonials_lists']->value)) {?>
	<div class="rb-testimonial-carousel-wrapper rb-slick-slider">
		<div class="rb-testimonial-carousel" data-slider_options="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slick_options']->value, ENT_QUOTES, 'UTF-8');?>
">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testimonials_lists']->value, 'testimonials_list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['testimonials_list']->value) {
?>
				<div class="rb-testimonial-meta-inner">
					<div class="item">
						<?php if ($_smarty_tpl->tpl_vars['testimonials_list']->value['content'] != '') {?>
							<div class="rb-testimonial-content"><?php echo $_smarty_tpl->tpl_vars['testimonials_list']->value['content'];?>
</div>
						<?php }?>

						<div class="rb-testimonial-info">
							<?php if ($_smarty_tpl->tpl_vars['testimonials_list']->value['image']['url'] != '') {?>
								<div class="rb-testimonial-image">
									<img class="" data-lazy="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['testimonials_list']->value['image']['url'], ENT_QUOTES, 'UTF-8');?>
">
									<div class="rb-image-loading"></div>
								</div>
							<?php }?>

							<div class="rb-testimonial-details">
								<div class="rb-testimonial-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['testimonials_list']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div>
								<div class="rb-testimonial-job"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['testimonials_list']->value['job'], ENT_QUOTES, 'UTF-8');?>
</div>
							</div>
						</div>	
					</div>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
<?php }?><!-- end D:\xampp\htdocs\prestashop\rb_davici/themes/rb_davici/modules/rbthemedream/views/templates/widget/rb-testimonial.tpl --><?php }
}
