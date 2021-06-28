<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-24 14:57:21
  from 'D:\xampp\htdocs\prestashop\rb_davici\themes\rb_davici\modules\rbthemefunction\views\templates\hook\rb-top-compare.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60846a11c9aca6_58843119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfb6b079fd43c0a8239de66350c697f25dacf322' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\themes\\rb_davici\\modules\\rbthemefunction\\views\\templates\\hook\\rb-top-compare.tpl',
      1 => 1614371365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60846a11c9aca6_58843119 (Smarty_Internal_Template $_smarty_tpl) {
?>	<!-- TPL LOGIN -->
	<?php if (isset($_smarty_tpl->tpl_vars['top']->value) && $_smarty_tpl->tpl_vars['top']->value == 'login') {?>
	<div id="rb-login" class="rb-login popup-over">
		<a href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" class="align-items-center popup-title">
			<i class="icon-login"></i>
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
		</a>

		<?php if ($_smarty_tpl->tpl_vars['rb_login']->value == 1) {?>
		<div class="rb-dropdown rb-login-form popup-content">
			<a class="rb-logout" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logout_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
				<i class="fa fa-sign-out"></i>
				<span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
			</a>
			<a class="rb-account" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['my_account_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View My Account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" rel="nofollow">
				<i class="fa fa-user"></i>
				<span class="hidden-sm-down"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customerName']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
			</a>
		</div>
		<?php } else { ?>
		<div class="rb-dropdown rb-login-form rb-form-container dd-container dd-products dd-view popup-content">
			<div class="indent rb-indent">
				<div class="title-wrap flex-container">
					<h4 class="customer-form-tab login-tab active">
						<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign In','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
					</h4>

					<!-- <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OR','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4> -->

					<h4 class="customer-form-tab register-tab">
						<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
					</h4>
				</div>

				<div class="form-wrap">
					<form class="rb-customer-form active rb-form-login" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
"
						method="post">
						<div class="relative form-group">
							<div class="icon-true">
								<input class="form-control" name="email" type="email" value=""
									placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" required="">
								<i class="material-icons">email</i>
							</div>
						</div>
						<div class="relative form-group">
							<div class="input-group-dis js-parent-focus">
								<div class="icon-true relative">
									<input class="form-control js-child-focus js-visible-password" name="password"
										type="password" value="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
										required="">
									<i class="material-icons">vpn_key</i>
								</div>
							</div>
						</div>

						<div class="login-submit">
							<input type="hidden" name="submitLogin" value="1">
							<button class="btn btn-primary login-button" data-link-action="sign-in" type="submit">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign In','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

							</button>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFacebookLogin'),$_smarty_tpl ) );?>

						</div>

						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

						</a>
					</form>

					<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
?back=identity" class="rb-customer-form rb-form-register"
						method="POST">
						<input type="hidden" value="1" name="submitCreate">
						<input type="hidden" value="0" name="newsletter">
						<input type="hidden" value="0" name="optin">
						<input type="hidden" value="" name="id_customer">
						<input type="hidden" value="1" name="id_gender">

						<div class="form-group relative">
							<div class="icon-true">
								<input class="form-control" name="email" type="email" value=""
									placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" required="">
								<i class="material-icons">email</i>
							</div>
						</div>

						<div class="form-group relative">
							<div class="input-group-dis js-parent-focus">
								<div class="icon-true relative">
									<input class="form-control" name="password"
										placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
" type="password" value=""
										required="" pattern=".{5,}">
									<i class="material-icons">vpn_key</i>
								</div>
							</div>
						</div>
						<div class="form-group relative">
							<div class="icon-true">
								<input class="form-control" name="firstname" type="text" value=""
									placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First Name','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" required="">
								<i class="material-icons">&#xE7FF;</i>
							</div>
						</div>
						<div class="form-group relative">
							<div class="icon-true">
								<input class="form-control" name="lastname" type="text" value=""
									placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last Name','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" required="">
								<span class="focus-border"><i></i></span>
								<svg class="svgic input-icon">
									<use xlink:href="#si-account"></use>
								</svg>
							</div>
						</div>
						<div class="relative form-group rb-check-box">
							<input class="form-control" name="optin" id="optin" type="checkbox" value="1">
							<label for="optin">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I agree to the','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

							</label>
						</div>
						<div class="relative form-group rb-check-box">
							<input class="form-control" name="newsletter" id="newsletter" type="checkbox" value="1">
							<label for="newsletter">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up for our newsletter'),$_smarty_tpl ) );?>

							</label>
						</div>
						<button class="btn btn-primary form-control-submit register-button" type="submit"
							data-back="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['identity'], ENT_QUOTES, 'UTF-8');?>
">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

						</button>
					</form>
				</div>
			</div>
		</div>
		<?php }?>
	</div>
	<?php }?>
	<!-- End -->

	<!-- Compare -->
	<?php if (isset($_smarty_tpl->tpl_vars['top']->value) && $_smarty_tpl->tpl_vars['top']->value == 'compare') {?>
	<div class="rb-id-compare">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_compare']->value, ENT_QUOTES, 'UTF-8');?>
">
			<i class="icon-random"></i>
			<span class="rb-compare-quantity rb-amount-inline"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_number_compare']->value, ENT_QUOTES, 'UTF-8');?>
</span>
		</a>
	</div>
	<?php }?>
	<!-- End -->

	<!-- TPL wishlist -->
	<?php if (isset($_smarty_tpl->tpl_vars['top']->value) && $_smarty_tpl->tpl_vars['top']->value == 'wishlist') {?>
	<div class="rb-id-wishlist">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
">
			<i class="icon-heart"></i>
			<span class="rb-wishlist-quantity rb-amount-inline"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_number_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
</span>
		</a>
	</div>
	<?php }?>
	<!-- End --><?php }
}
