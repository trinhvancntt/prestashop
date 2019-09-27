<?php
/* Smarty version 3.1.33, created on 2019-09-27 05:15:58
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8dd34eb92813_58075617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1567145048,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8dd34eb92813_58075617 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="block-contact block links accordion_small_screen wrapper">
  <div class="title clearfix hidden-sm-down" data-target="#footer_block_contact" data-toggle="collapse">
    <span class="h4 text-uppercase title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="collapse" id="footer_block_contact">
    <li class="address"><i class="fa fa-map-marker"></i><span><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['address1'];?>
</span></li>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
      <li class="phone">
        <i class="fa fa-phone"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

      </li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
      <li class="fax">
        <i class="fa fa-fax"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%fax%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

      </li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
      <li class="email">
        <i class="fa fa-envelope-o"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%email%[/1]','sprintf'=>array('[1]'=>(('<a href="mailto:').($_smarty_tpl->tpl_vars['contact_infos']->value['email'])).('" class="dropdown">'),'[/1]'=>'</a>','%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

      </li>
    <?php }?>
  </ul>
</div>
<?php }
}
