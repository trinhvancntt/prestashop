<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 06:43:13
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthememenu\views\templates\hook\megamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c5e14117aa42_25365568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75870fd83cf1fcabedaec9e1f0d2467e0e32696a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthememenu\\views\\templates\\hook\\megamenu.tpl',
      1 => 1616038578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c5e14117aa42_25365568 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['menusHTML']->value) {?>
    <div class="rb_megamenu 
        <?php if (isset($_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_LAYOUT']) && $_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_LAYOUT']) {?>layout_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_LAYOUT'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?> 
        <?php if (isset($_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_SHOW_ICON_VERTICAL']) && $_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_SHOW_ICON_VERTICAL']) {?> show_icon_in_mobile<?php }?> 
        <?php if (isset($_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_SKIN']) && $_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_SKIN']) {?>skin_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_SKIN'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>  
        <?php if (isset($_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_TRANSITION_EFFECT']) && $_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_TRANSITION_EFFECT']) {?>transition_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_TRANSITION_EFFECT'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>   
        <?php if (isset($_smarty_tpl->tpl_vars['rb_config']->value['RB_MOBILE_RB_TYPE']) && $_smarty_tpl->tpl_vars['rb_config']->value['RB_MOBILE_RB_TYPE']) {?>transition_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rb_config']->value['RB_MOBILE_RB_TYPE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?> 
        <?php if (isset($_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_CUSTOM_CLASS']) && $_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_CUSTOM_CLASS']) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_CUSTOM_CLASS'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>
        <?php if (isset($_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_ACTIVE_ENABLED']) && $_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_ACTIVE_ENABLED']) {?>enable_active_menu<?php }?> 
        <?php if (isset($_smarty_tpl->tpl_vars['rb_layout_direction']->value) && $_smarty_tpl->tpl_vars['rb_layout_direction']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rb_layout_direction']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>rb-dir-ltr<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_HOOK_TO']) && $_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_HOOK_TO'] == 'customhook') {?>hook-custom<?php } else { ?>hook-default<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['rb_multiLayout']->value) && $_smarty_tpl->tpl_vars['rb_multiLayout']->value) {?>multi_layout<?php } else { ?>single_layout<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_STICKY_DISMOBILE']) && $_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_STICKY_DISMOBILE']) {?> disable_sticky_mobile <?php }?>
        "
        data-bggray="<?php if (isset($_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_ACTIVE_BG_GRAY']) && $_smarty_tpl->tpl_vars['rb_config']->value['RBTHEMEMENU_ACTIVE_BG_GRAY']) {?>bg_gray<?php }?>"
        >
        <div class="rb_megamenu_content">
            <div class="rb_megamenu_content_content">
                <div class="ybc-menu-toggle ybc-menu-btn closed">
                    <span class="ybc-menu-button-toggle_icon">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </span>
                    <span class="ybc-menu-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','mod'=>'rbthememenu'),$_smarty_tpl ) );?>
</span>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['menusHTML']->value;?>

            </div>
        </div>
    </div>
<?php }
}
}
