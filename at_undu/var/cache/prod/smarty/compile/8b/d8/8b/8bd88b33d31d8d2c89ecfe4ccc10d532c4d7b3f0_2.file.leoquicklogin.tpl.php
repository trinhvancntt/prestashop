<?php
/* Smarty version 3.1.33, created on 2019-09-27 03:05:12
  from 'W:\xampp\htdocs\prestashop\at_undu\themes\at_undu\modules\leoquicklogin\views\templates\hook\leoquicklogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8db4a8c6d419_74694632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bd88b33d31d8d2c89ecfe4ccc10d532c4d7b3f0' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\themes\\at_undu\\modules\\leoquicklogin\\views\\templates\\hook\\leoquicklogin.tpl',
      1 => 1553050753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8db4a8c6d419_74694632 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['isLogged']->value) {?>
	
  <div class="leo-quicklogin-wrapper ap-quick-login js-dropdown popup-over">
    <a class="popup-title" href="javascript:void(0)" data-toggle="dropdown">
        <i class="icon-user"></i>
    </a>
    <div class="dropdown-menu popup-content" aria-labelledby="language-selector-label">
      	<ul class="link language-selector">
			<li>
				<a class="account dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View My Account','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
" rel="nofollow">
				    <i class="icon account fa fa-user"></i>
				    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
				</a>
			</li>
			<li>
				<a class="logout dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
				    <i class="icon logout fa fa-sign-out"></i>      
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</span>
				</a>
			</li>
			<li>
		      <a class="ap-btn-wishlist dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'leofeature','controller'=>'mywishlist'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" rel="nofollow"
		      >
		        <i class="icon fa fa-heart-o"></i>
		        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
		    	<span class="ap-total-wishlist ap-total"></span>
		      </a>    
		  	</li>
      	</ul>
    </div>
  </div>

<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['leo_type']->value == 'html') {?>
		<?php echo $_smarty_tpl->tpl_vars['html_form']->value;?>

	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['leo_type']->value == 'dropdown') {?>
			<div class="dropdown">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['leo_type']->value == 'dropup') {?>
			<div class="dropup">
		<?php }?>
		  	<div class="ap-quick-login js-dropdown popup-over">
				<a href="javascript:void(0)" class="leo-quicklogin<?php if ($_smarty_tpl->tpl_vars['leo_type']->value == 'dropdown' || $_smarty_tpl->tpl_vars['leo_type']->value == 'dropup') {?>leo-dropdown dropdown-toggle<?php }?> popup-title" data-enable-sociallogin="<?php if (isset($_smarty_tpl->tpl_vars['enable_sociallogin']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['enable_sociallogin']->value, ENT_QUOTES, 'UTF-8');
}?>" data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_type']->value, ENT_QUOTES, 'UTF-8');?>
" data-layout="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_layout']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['leo_type']->value == 'dropdown' || $_smarty_tpl->tpl_vars['leo_type']->value == 'dropup') {?> data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"<?php }?> title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick Login','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
" rel="nofollow">
					<i class="icon-user"></i>
					<span class="text-title hidden-xl-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</span>
				</a>
				<?php if ($_smarty_tpl->tpl_vars['leo_type']->value == 'dropdown' || $_smarty_tpl->tpl_vars['leo_type']->value == 'dropup') {?>
						<div class="popup-content dropdown-menu leo-dropdown-wrapper">
							<?php echo $_smarty_tpl->tpl_vars['html_form']->value;?>

						</div>
					</div>
				<?php }?>
			</div>
		
	<?php }
}?>

<?php }
}
