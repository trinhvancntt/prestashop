<?php
/* Smarty version 3.1.33, created on 2019-08-30 01:12:00
  from 'module:leoquickloginviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d68b020c16888_41764372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f906810597606b47448e699d202200fd623cedd4' => 
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
function content_5d68b020c16888_41764372 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['fb_enable']->value && $_smarty_tpl->tpl_vars['fb_app_id']->value != '') {?>
    
    <?php echo '<script'; ?>
>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fb_app_id']->value, ENT_QUOTES, 'UTF-8');?>
',
                cookie     : true,  // enable cookies to allow the server to access 
                xfbml      : true,  // parse social plugins on this page
                version    : 'v2.9', // use graph api version 2.8
                scope: 'email, user_birthday',
            });
        };

        // Load the SDK asynchronously
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang_locale']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    <?php echo '</script'; ?>
>
    
<?php }
if ($_smarty_tpl->tpl_vars['google_enable']->value && $_smarty_tpl->tpl_vars['google_client_id']->value != '') {
echo '<script'; ?>
>
var google_client_id= "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['google_client_id']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://apis.google.com/js/api:client.js"><?php echo '</script'; ?>
>
<?php }
}
}
