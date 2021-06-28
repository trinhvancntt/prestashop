<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-18 16:26:16
  from 'D:\xampp\htdocs\prestashop\rb_davici\themes\rb_davici\templates\_partials\footer\footer-5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60cd0168676979_74191826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60a9d5d9b1c644ded8ffb3a0365642bfb7399cce' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\themes\\rb_davici\\templates\\_partials\\footer\\footer-5.tpl',
      1 => 1614941456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cd0168676979_74191826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="footer-container footer-h5 style-2">
  <div class="footer-center">
    <div class="container container-large">
      <div class="row">
        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ">
          <div class="box-group">
            <div class="box-phone"> 
              <i class="icon-telephone1"></i>
              <div class="content">
                <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us free','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h2> 
                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'+1 866.306.1666','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
              </div>
            </div>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
              <img class="logo" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/rb_davici/assets/img/logo-black.png"
                alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            </a>
            <div class="box-footer-html"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cestibulum rutrum, mi nec elementum vehicula eros quam gravida nisl id fringilla','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRbFooterContact'),$_smarty_tpl ) );?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRbSocial'),$_smarty_tpl ) );?>

          </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-sp-12 ">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

        </div>
        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-sp-12 ">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182952584060cd016865e706_88454228', 'hook_footer_before');
?>

        </div>
        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-sp-12 ">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60349896160cd0168660f02_75654502', 'hook_footer_after');
?>

        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-sp-12 ">              
          <div class="block">
            <h3 class="h3 rb-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our store','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
            <img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/rb_davici/assets/img/img-map.jpg" alt="">
          </div>
          <div class="box-ios">
            <ul>
              <li>
                <img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/rb_davici/assets/img/android.jpg" alt="">
              </li>
              <li>
                <img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/rb_davici/assets/img/ios.jpg" alt="">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div><!-- end footer-center -->

  <div class="footer-copyright">
    <div class="container container-large">
      <div class="row">
        <div class="col-lg-9 col-md-12 col-xs-12 col-sp-12">
          <div class="text-md-left">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104272747960cd0168666db1_49017604', 'copyright_link');
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRbFooter'),$_smarty_tpl ) );?>

          </div>
        </div>
        <div class="col-lg-3 col-md-12 col-xs-12 col-sp-12">
          <div class="text-md-right">
            <img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/rb_davici/assets/img/payment.png" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          </div>
        </div>
      </div>
    </div>
  </div><!-- end footer-copyright -->
</div><!-- end footer-container -->
<div id="rb-back-top">
  <a href="#"><i class="fa fa-angle-double-up"></i></a>
</div><?php }
/* {block 'hook_footer_before'} */
class Block_182952584060cd016865e706_88454228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_182952584060cd016865e706_88454228',
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
class Block_60349896160cd0168660f02_75654502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_60349896160cd0168660f02_75654502',
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
class Block_104272747960cd0168666db1_49017604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_104272747960cd0168666db1_49017604',
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
