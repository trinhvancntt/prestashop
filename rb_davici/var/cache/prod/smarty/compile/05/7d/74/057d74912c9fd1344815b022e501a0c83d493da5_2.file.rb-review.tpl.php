<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-02 15:32:09
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemefunction\views\templates\hook\rb-review.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603ea0c904eb39_84595371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '057d74912c9fd1344815b022e501a0c83d493da5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemefunction\\views\\templates\\hook\\rb-review.tpl',
      1 => 1612599932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:rbthemefunction/views/templates/rb-ajax-loading.tpl' => 1,
  ),
),false)) {
function content_603ea0c904eb39_84595371 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['type']->value == 'num_star') {?>
	<div class="star_content clearfix"  itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
		<?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
			<?php if ($_smarty_tpl->tpl_vars['total_review']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
				<div class="star"></div>
			<?php } else { ?>
				<div class="star star_on"></div>
			<?php }?>
		<?php
}
}
?>
		<meta itemprop="worstRating" content="0"/>
		<meta itemprop="ratingValue" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total_review']->value, ENT_QUOTES, 'UTF-8');?>
"/>
		<meta itemprop="bestRating" content="5"/>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['type']->value == 'number') {?>
	<span class="rb-number-review">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8');?>
)</span>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['type']->value == 'edit') {?>
	<?php if ($_smarty_tpl->tpl_vars['rb_login']->value == 1) {?>
		<div class="product_reviews">
			<a class="rb-open-review" href="#rb_li_review">
				<i class="fa fa-pencil-square-o"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Review','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>

			</a>
		</div>
	<?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['type']->value == 'content') {?>
	<div class="product_reviews_block_tab">
		<div class="rb-review-list">
			<?php if (isset($_smarty_tpl->tpl_vars['reviews']->value) && !empty($_smarty_tpl->tpl_vars['reviews']->value)) {?>
				<div id="product_reviews_block">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['review']->value['content']) {?>
							<div class="review" itemprop="review" itemscope itemtype="https://schema.org/Review">
								<div class="review-info">
									<div class="author_image">
										<img alt="" src="../../modules/rbthemefunction/views/img/author.png" class="avatar avatar-60 photo" height="60" width="60">
									</div>
									<div class="comment-text">
										<div class="review_author">
											<div class="review_author_infos">
												<strong itemprop="author"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value['customer_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</strong>
												<meta itemprop="datePublished" content="<?php echo htmlspecialchars(substr(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value['date_add'],'html','UTF-8' )),0,10), ENT_QUOTES, 'UTF-8');?>
" />
												<em>- <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value['date_add'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</em>
											</div>
											<div class="star_content clearfix"  itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
												<?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= 5; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
													<?php if ($_smarty_tpl->tpl_vars['review']->value['grade'] <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
														<div class="star"></div>
													<?php } else { ?>
														<div class="star star_on"></div>
													<?php }?>
												<?php
}
}
?>
												<meta itemprop="worstRating" content = "0" />
												<meta itemprop="ratingValue" content = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value['grade'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
												<meta itemprop="bestRating" content = "5" />
											</div>
										</div>
										<div class="review-detail">
											<p itemprop="name" class="title_block">
												<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong>
											</p>
											<p itemprop="reviewBody"><?php echo $_smarty_tpl->tpl_vars['review']->value['content'];?>
</p>
										</div>
									</div>
								</div>
							</div>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php } else { ?>
				<p class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No comment at this time.','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>
</p>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['rb_login']->value == 0) {?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_login_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn-primary">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You Must Login To Review','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>

				</a>
			<?php }?>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['rb_login']->value == 1) {?>
			<div class="rb-new-review-form">
				<div class="modal-header">
					<h4 class="modal-title h2">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write a review','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>
		
					</h4>
				</div>
				<div class="modal-body">
					<ul id="criterions_list">
						<li>
							<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quality','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>
:</label>
							<div class="star_content">
								<input class="star not_uniform" type="radio" name="criterion" value="1">
								<input class="star not_uniform" type="radio" name="criterion" value="2">
								<input class="star not_uniform" type="radio" name="criterion" value="3">
								<input class="star not_uniform" type="radio" name="criterion" value="4" checked="checked">
								<input class="star not_uniform" type="radio" name="criterion" value="5">
							</div>
							<div class="clearfix"></div>
						</li>
					</ul>

					<form class="form-new-review" action="" method="POST">
						<div class="form-group">
							<label class="form-control-label" for="new_review_title">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>
 <sup class="required">*</sup>
							</label>
							<input type="text" class="form-control" id="new_review_title" required="" name="new_review_title">					  
						</div>

						<div class="form-group">
							<label class="form-control-label" for="new_review_content">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>
 <sup class="required">*</sup>
							</label>

							<textarea type="text" class="form-control" id="rb_review_content" required="" name="rb_review_content"></textarea>				  
						</div>

						<div class="form-group">
							<label class="form-control-label"><sup>*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required fields','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>
</label>
							<input id="id_product_review" name="id_product_review" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_product']->value, ENT_QUOTES, 'UTF-8');?>
"/>
						</div>

						<?php $_smarty_tpl->_subTemplateRender('module:rbthemefunction/views/templates/rb-ajax-loading.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

						<button class="btn btn-primary rb-control-submit pull-xs-right" type="submit">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit','mod'=>'rbthemefunction'),$_smarty_tpl ) );?>

						</button>
					</form>
				</div>
			</div>
		<?php }?>
	</div>
<?php }
}
}
