<?php
/* Smarty version 3.1.33, created on 2019-09-27 03:05:12
  from 'module:leoquickloginviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8db4a8ea7916_67851585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb607db04dfe36af201713ac4e202ee1dd4c7317' => 
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
function content_5d8db4a8ea7916_67851585 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="leoquicklogin-mask"></div>

<div class="leoquicklogin-slidebar">
    <div class="leoquicklogin-slidebar-wrapper">
        <div class="leoquicklogin-slidebar-top">
            <button type="button" class="leoquicklogin-slidebar-close btn btn-secondary">
                <i class="material-icons">&#xE5CD;</i>
                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</span>
            </button>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['html_form']->value;?>
        <div class="leoquicklogin-slidebar-bottom">
            <button type="button" class="leoquicklogin-slidebar-close btn btn-secondary">
                <i class="material-icons">&#xE5CD;</i>
                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</span>
            </button>
        </div>
    </div>
</div>
<?php }
}
