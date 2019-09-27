<?php
/* Smarty version 3.1.33, created on 2019-09-17 11:45:33
  from 'W:\xampp\htdocs\prestashop\at_undu\themes\at_undu\modules\appagebuilder\views\templates\hook\letter-blog\BlogSlickCarousel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d80ff9d55f006_35037880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db1324ceb330de24840e49613efe23eb61b4dfd1' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\themes\\at_undu\\modules\\appagebuilder\\views\\templates\\hook\\letter-blog\\BlogSlickCarousel.tpl',
      1 => 1553050753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d80ff9d55f006_35037880 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\BlogSlickCarousel -->

<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>
	<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
		<div class="slick-row">
			<div class="timeline-wrapper clearfix prepare"
				data-item="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['number_fake_item'], ENT_QUOTES, 'UTF-8');?>
" 
				data-xl="<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['xl'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['xl'], ENT_QUOTES, 'UTF-8');
}?>" 
				data-lg="<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['lg'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['lg'], ENT_QUOTES, 'UTF-8');
}?>" 
				data-md="<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['md'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['md'], ENT_QUOTES, 'UTF-8');
}?>" 
				data-sm="<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['sm'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['sm'], ENT_QUOTES, 'UTF-8');
}?>" 
				data-m="<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['m'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['m'], ENT_QUOTES, 'UTF-8');
}?>"
			>
				<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['formAtts']->value['number_fake_item']+1 - (1) : 1-($_smarty_tpl->tpl_vars['formAtts']->value['number_fake_item'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>			
					<div class="timeline-parent">
						<?php
$_smarty_tpl->tpl_vars['foo_child'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo_child']->step = 1;$_smarty_tpl->tpl_vars['foo_child']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo_child']->step > 0 ? $_smarty_tpl->tpl_vars['formAtts']->value['slick_row']+1 - (1) : 1-($_smarty_tpl->tpl_vars['formAtts']->value['slick_row'])+1)/abs($_smarty_tpl->tpl_vars['foo_child']->step));
if ($_smarty_tpl->tpl_vars['foo_child']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo_child']->value = 1, $_smarty_tpl->tpl_vars['foo_child']->iteration = 1;$_smarty_tpl->tpl_vars['foo_child']->iteration <= $_smarty_tpl->tpl_vars['foo_child']->total;$_smarty_tpl->tpl_vars['foo_child']->value += $_smarty_tpl->tpl_vars['foo_child']->step, $_smarty_tpl->tpl_vars['foo_child']->iteration++) {
$_smarty_tpl->tpl_vars['foo_child']->first = $_smarty_tpl->tpl_vars['foo_child']->iteration === 1;$_smarty_tpl->tpl_vars['foo_child']->last = $_smarty_tpl->tpl_vars['foo_child']->iteration === $_smarty_tpl->tpl_vars['foo_child']->total;?>
							<div class="timeline-item">
								<div class="animated-background">					
									<div class="background-masker content-top"></div>							
									<div class="background-masker content-second-line"></div>							
									<div class="background-masker content-third-line"></div>							
									<div class="background-masker content-fourth-line"></div>
								</div>
							</div>
						<?php }
}
?>
					</div>
				<?php }
}
?>
			</div>
			<div class="list-blog-slick-carousel slick-slider slick-loading" id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
				<?php $_smarty_tpl->_assignInScope('leo_include_file', $_smarty_tpl->tpl_vars['leo_helper']->value->getTplTemplate('BlogItem.tpl',$_smarty_tpl->tpl_vars['formAtts']->value['override_folder']));?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'blog', false, NULL, 'mypLoop', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']++;
?>					
					<div class="slick-slide <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index'] : null) == 0) {?> first<?php }?>">
						<div class="item">		                    	
							<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['leo_include_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
						</div>
					</div>	               
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				
			</div>
		</div>
	<?php } else { ?>
		<p class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products at this time.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>	
	<?php }
}?>

<?php echo '<script'; ?>
 type="text/javascript">
ap_list_functions.push(function(){
	$('#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').imagesLoaded( function() {
		$('#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').slick(
			<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_custom_status']) {?>
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_custom'], ENT_QUOTES, 'UTF-8');?>

			<?php } else { ?>
			{
				centerMode: <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_centermode']) && $_smarty_tpl->tpl_vars['formAtts']->value['slick_centermode']) {?>true<?php } else { ?>false<?php }?>,
				centerPadding: '<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding']) && $_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding'], ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>px',
				dots: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_dot']) {?>true<?php } else { ?>false<?php }?>,
				infinite: <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_loopinfinite']) && $_smarty_tpl->tpl_vars['formAtts']->value['slick_loopinfinite']) {?>true<?php } else { ?>false<?php }?>,
				vertical: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_vertical']) {?>true<?php } else { ?>false<?php }?>,
				autoplay: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_autoplay']) {?>false<?php } else { ?>false<?php }?>,
				pauseonhover: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_pauseonhover']) {?>true<?php } else { ?>false<?php }?>,
				autoplaySpeed: 2000,
				arrows: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_arrows']) {?>true<?php } else { ?>false<?php }?>,
				rows: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_row'], ENT_QUOTES, 'UTF-8');?>
,
				slidesToShow: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_slidestoshow'], ENT_QUOTES, 'UTF-8');?>
,
				slidesToScroll: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_dot']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_slidestoshow'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_slidestoscroll'], ENT_QUOTES, 'UTF-8');
}?>,
				rtl: <?php if (isset($_smarty_tpl->tpl_vars['IS_RTL']->value) && $_smarty_tpl->tpl_vars['IS_RTL']->value) {?>true<?php } else { ?>false<?php }?>,
				responsive: [
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formAtts']->value['slick_items_custom'], 'mobile', false, NULL, 'mobiles', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mobile']->value) {
?>
					{
					  breakpoint: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mobile']->value[0], ENT_QUOTES, 'UTF-8');?>
,
					  settings: {
						centerMode: <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_centermode']) && $_smarty_tpl->tpl_vars['formAtts']->value['slick_centermode']) {?>true<?php } else { ?>false<?php }?>,
						centerPadding: '<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding']) && $_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding'], ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>px',
						slidesToShow: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mobile']->value[1], ENT_QUOTES, 'UTF-8');?>
,
						slidesToScroll: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_dot']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['mobile']->value[1], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_slidestoscroll'], ENT_QUOTES, 'UTF-8');
}?>,
					  }
					},
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				]
			}
			<?php }?>
		);
		$('#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').removeClass('slick-loading').addClass('slick-loaded').parents('.slick-row').addClass('hide-loading');
	});
});
<?php echo '</script'; ?>
>


<?php }
}
