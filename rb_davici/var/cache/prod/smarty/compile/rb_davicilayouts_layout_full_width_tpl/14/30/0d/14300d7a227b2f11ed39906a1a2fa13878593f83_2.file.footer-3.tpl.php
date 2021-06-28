<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 15:13:58
  from 'D:\xampp\htdocs\prestashop\rb_davici\themes\rb_davici\templates\_partials\footer\footer-3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c658f68b8e86_48059392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14300d7a227b2f11ed39906a1a2fa13878593f83' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\themes\\rb_davici\\templates\\_partials\\footer\\footer-3.tpl',
      1 => 1615232421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c658f68b8e86_48059392 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

  <div class="footer-container footer-h3">
    <div class="footer-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-sp-12 ">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-sp-12 ">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29088429160c658f6828536_55194305', 'hook_footer_before');
?>

          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-sp-12 ">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36006688160c658f68293e7_33703893', 'hook_footer_after');
?>

          </div>
          <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ">              
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRbEmail'),$_smarty_tpl ) );?>

          </div>
        </div>
      </div>
    </div><!-- end footer-center -->

    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 col-sp-12">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
              <img class="logo" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/rb_davici/assets/img/logo.png"
                alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            </a>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 col-sp-12">
            <div class="text-md-left">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148202265460c658f682d261_70253212', 'copyright_link');
?>

            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12 col-xs-12 col-sp-12">
            <div class="text-md-right">
              <img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/rb_davici/assets/img/payment.png" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            </div>
          </div>
        </div>
      </div>
    </div><!-- end footer-copyright -->
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterDetail'),$_smarty_tpl ) );?>

  </div>
  <div id="rb-back-top">
    <a href="#"><i class="fa fa-angle-double-up"></i></a>
  </div><?php }
/* {block 'hook_footer_before'} */
class Block_29088429160c658f6828536_55194305 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_29088429160c658f6828536_55194305',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer_after'} */
class Block_36006688160c658f68293e7_33703893 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_36006688160c658f68293e7_33703893',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_148202265460c658f682d261_70253212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_148202265460c658f682d261_70253212',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <a class="_blank" href="http://www.prestashop.com" target="_blank">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

              </a>
              <?php
}
}
/* {/block 'copyright_link'} */
}
