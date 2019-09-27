<?php
/* Smarty version 3.1.33, created on 2019-09-27 03:05:12
  from 'module:leoquickloginviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8db4a8c23095_36921599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee2b0bf23e7b8e64b5876d9c95561e71a372a184' => 
    array (
      0 => 'module:leoquickloginviewstemplat',
      1 => 1547784225,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8db4a8c23095_36921599 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="lql-social-login clearfix <?php if ($_smarty_tpl->tpl_vars['show_button_text']->value) {?>show-bt-txt<?php }?>">
	<h3 class="lql-social-login-title">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connect with Social Networks','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

	</h3>
	<?php if ($_smarty_tpl->tpl_vars['fb_enable']->value && $_smarty_tpl->tpl_vars['fb_app_id']->value != '') {?>
		<!--
		<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false" scope="public_profile,email" onlogin="checkLoginState();"></div>
		-->
		<button class="btn social-login-bt facebook-login-bt" onclick="doFbLogin();"><span class="fa fa-facebook"></span><?php if ($_smarty_tpl->tpl_vars['show_button_text']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in with Facebook','mod'=>'leoquicklogin'),$_smarty_tpl ) );
}?></button>
		
	<?php }?>
	<!--
		<div class="g-signin2" data-scope="profile email" data-longtitle="true" data-theme="dark" data-onsuccess="googleSignIn" data-onfailure="googleFail"></div>
	-->
	<?php if ($_smarty_tpl->tpl_vars['google_enable']->value && $_smarty_tpl->tpl_vars['google_client_id']->value != '') {?>
		<button class="btn social-login-bt google-login-bt"><span class="fa fa-google"></span><?php if ($_smarty_tpl->tpl_vars['show_button_text']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in with Google','mod'=>'leoquicklogin'),$_smarty_tpl ) );
}?></button>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['twitter_enable']->value && $_smarty_tpl->tpl_vars['twitter_api_key']->value != '' && $_smarty_tpl->tpl_vars['twitter_api_secret']->value !== '') {?>
		<button class="btn social-login-bt twitter-login-bt"><span class="fa fa-twitter"></span><?php if ($_smarty_tpl->tpl_vars['show_button_text']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in with Twitter','mod'=>'leoquicklogin'),$_smarty_tpl ) );
}?></button>
	<?php }?>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['login_page']->value) && $_smarty_tpl->tpl_vars['login_page']->value) {?>
<hr>
<?php }?>

<?php }
}
