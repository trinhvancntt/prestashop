<?php
/* Smarty version 3.1.33, created on 2019-08-30 01:12:02
  from 'module:leoquickloginviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d68b022102981_24098279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afe974643c400d6544c0608f1c7aec4ec20d70e3' => 
    array (
      0 => 'module:leoquickloginviewstemplat',
      1 => 1553050753,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68b022102981_24098279 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="leo-quicklogin-form row<?php if (isset($_smarty_tpl->tpl_vars['leo_form_type']->value) && $_smarty_tpl->tpl_vars['leo_form_type']->value != '') {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_form_type']->value, ENT_QUOTES, 'UTF-8');
}?>">
	<?php if (isset($_smarty_tpl->tpl_vars['leo_navigation_style']->value) && $_smarty_tpl->tpl_vars['leo_navigation_style']->value) {?>
		<div class="lql-action<?php if ($_smarty_tpl->tpl_vars['leo_form_layout']->value != 'both') {?> lql-active<?php } else { ?> lql-inactive<?php }?>">
			<div class="lql-action-bt">
				<h2 class="lql-bt lql-bt-login<?php if ($_smarty_tpl->tpl_vars['leo_form_layout']->value == 'login') {?> lql-active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</h2>
			</div>
			<div class="lql-action-bt">
				<h2 class="lql-bt lql-bt-register<?php if ($_smarty_tpl->tpl_vars['leo_form_layout']->value == 'register') {?> lql-active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</h2>
			</div>
		</div>
	<?php }?>
	<div class="leo-form leo-login-form col-sm-<?php if ($_smarty_tpl->tpl_vars['leo_form_layout']->value == 'both') {?>6<?php } else { ?>12<?php }
if ($_smarty_tpl->tpl_vars['leo_form_layout']->value == 'login' || $_smarty_tpl->tpl_vars['leo_form_layout']->value == 'both') {?> leo-form-active<?php } else { ?> leo-form-inactive<?php }
if ($_smarty_tpl->tpl_vars['leo_form_layout']->value != 'both') {?> full-width<?php }?>">
		<h3 class="leo-login-title">			
			<span class="title-both">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Existing Account Login','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

			</span>
			<span class="title-only">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login to your account','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

			</span>		
		</h3>
		<form class="lql-form-content leo-login-form-content" action="#" method="post">
			<div class="form-group lql-form-mesg has-success">					
			</div>			
			<div class="form-group lql-form-mesg has-danger">					
			</div>
			<div class="form-group lql-form-content-element">
				<input type="email" class="form-control lql-email-login" name="lql-email-login" required="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email Address','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
">
			</div>
			<div class="form-group lql-form-content-element">
				<input type="password" class="form-control lql-pass-login" name="lql-pass-login" required="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
">
			</div>
			<div class="form-group row lql-form-content-element">				
				<div class="col-xs-6">
					<?php if ($_smarty_tpl->tpl_vars['leo_check_cookie']->value) {?>
						<input type="checkbox" class="lql-rememberme" name="lql-rememberme">
						<label class="form-control-label"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remember Me','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</span></label>
					<?php }?>
				</div>				
				<div class="col-xs-6 text-sm-right">
					<a role="button" href="#" class="leoquicklogin-forgotpass"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot Password','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
 ?</a>
				</div>
			</div>
			<div class="form-group text-right">
				<button type="submit" class="form-control-submit lql-form-bt lql-login-bt btn btn-primary">			
					<span class="leoquicklogin-loading leoquicklogin-cssload-speeding-wheel"></span>
					<i class="leoquicklogin-icon leoquicklogin-success-icon material-icons">&#xE876;</i>
					<i class="leoquicklogin-icon leoquicklogin-fail-icon material-icons">&#xE033;</i>
					<span class="lql-bt-txt">					
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

					</span>
				</button>
			</div>
			<div class="form-group lql-callregister">
				<a role="button" href="#" class="lql-callregister-action"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account? Create one here','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
 ?</a>
			</div>
		</form>
		<div class="leo-resetpass-form">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset Password','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</h3>
			<form class="lql-form-content leo-resetpass-form-content" action="#" method="post">
				<div class="form-group lql-form-mesg has-success">					
				</div>			
				<div class="form-group lql-form-mesg has-danger">					
				</div>
				<div class="form-group lql-form-content-element">
					<input type="email" class="form-control lql-email-reset" name="lql-email-reset" required="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email Address','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
">
				</div>
				<div class="form-group">					
					<button type="submit" class="form-control-submit lql-form-bt leoquicklogin-reset-pass-bt btn btn-primary">			
						<span class="leoquicklogin-loading leoquicklogin-cssload-speeding-wheel"></span>
						<i class="leoquicklogin-icon leoquicklogin-success-icon material-icons">&#xE876;</i>
						<i class="leoquicklogin-icon leoquicklogin-fail-icon material-icons">&#xE033;</i>
						<span class="lql-bt-txt">					
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset Password','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

						</span>
					</button>
				</div>
				
			</form>
		</div>
	</div>
	<div class="leo-form leo-register-form col-sm-<?php if ($_smarty_tpl->tpl_vars['leo_form_layout']->value == 'both') {?>6<?php } else { ?>12<?php }
if ($_smarty_tpl->tpl_vars['leo_form_layout']->value == 'register' || $_smarty_tpl->tpl_vars['leo_form_layout']->value == 'both') {?> leo-form-active<?php } else { ?> leo-form-inactive<?php }
if ($_smarty_tpl->tpl_vars['leo_form_layout']->value != 'both') {?> full-width<?php }?>">
		<h3 class="leo-register-title">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New Account Register','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

		</h3>
		<form class="lql-form-content leo-register-form-content" action="#" method="post">
			<div class="form-group lql-form-mesg has-success">					
			</div>			
			<div class="form-group lql-form-mesg has-danger">					
			</div>
			<div class="form-group lql-form-content-element">
				<input type="text" class="form-control lql-register-firstname" name="lql-register-firstname" required="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First Name','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
">
			</div>
			<div class="form-group lql-form-content-element">
				<input type="text" class="form-control lql-register-lastname" name="lql-register-lastname" required="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last Name','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
">
			</div>
			<div class="form-group lql-form-content-element">
				<input type="email" class="form-control lql-register-email" name="lql-register-email" required="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email Address','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
">
			</div>
			<div class="form-group lql-form-content-element">
				<input type="password" class="form-control lql-register-pass" name="lql-register-pass" required="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
">
			</div>
			<div class="form-group text-right">				
				<button type="submit" class="form-control-submit lql-form-bt lql-register-bt btn btn-primary">			
					<span class="leoquicklogin-loading leoquicklogin-cssload-speeding-wheel"></span>
					<i class="leoquicklogin-icon leoquicklogin-success-icon material-icons">&#xE876;</i>
					<i class="leoquicklogin-icon leoquicklogin-fail-icon material-icons">&#xE033;</i>
					<span class="lql-bt-txt">					
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an Account','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

					</span>
				</button>
			</div>
			<div class="form-group lql-calllogin">
				<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Already have an account?','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</div>
				<a role="button" href="#" class="lql-calllogin-action"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in instead','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</a>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Or','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

				<a role="button" href="#" class="lql-calllogin-action lql-callreset-action"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset password','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</a>
			</div>
		</form>
	</div>
</div>

<?php }
}
