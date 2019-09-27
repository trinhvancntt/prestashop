<?php
/* Smarty version 3.1.33, created on 2019-08-30 01:53:26
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d68b9d610a687_38239468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '628089b29e2c5fb69de1c5694b088f988b830ba7' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1553050753,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68b9d610a687_38239468 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="contact-rich">
  <h4 class="contact-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-sp-12">
      <div class="block">
        <div class="icon"><i class="material-icons">&#xE55F;</i></div>
        <h4 class="rich-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Visit Us','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
        <div class="data"><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>
</div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-sp-12">
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone'] || $_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
        <div class="block">
          <div class="icon"><i class="material-icons">&#xE0CD;</i></div>
          <h4 class="rich-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Give us a call','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
          <div class="data">
            <div class="call">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

              <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a>
            </div>
            <div class="fax">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

              <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['fax'], ENT_QUOTES, 'UTF-8');?>
</span>
            </div>
           </div>
        </div>
      <?php }?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-sp-12">
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
        <div class="block">
          <div class="icon"><i class="material-icons">&#xE158;</i></div>
          <h4 class="rich-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connect Online','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
          <div class="data email">
            <a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
           </div>
        </div>
      <?php }?>
    </div>
  </div>
</div>
<?php }
}
