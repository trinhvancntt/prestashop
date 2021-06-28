<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-18 16:25:25
  from 'D:\xampp\htdocs\prestashop\rb_davici\themes\rb_davici\templates\_partials\footer\footer-4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60cd0135ea3fa4_20282439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ed528dfc3c65c338f8396097734e364d097d231' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\themes\\rb_davici\\templates\\_partials\\footer\\footer-4.tpl',
      1 => 1615231453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cd0135ea3fa4_20282439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

  <div class="footer-container footer-h4 style-2">
    <div class="footer-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 col-sp-12 ">
            <div class="box-group">
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                <img class="logo" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/rb_davici/assets/img/logo.png"
                  alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
              </a>
              <div class="box-footer-html"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sophisticated simplicity for the independent mind.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRbSocial'),$_smarty_tpl ) );?>

            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 col-sp-12 ">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 col-sp-12 ">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118753673060cd0135e4cae7_03801214', 'hook_footer_before');
?>

          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 col-sp-12 ">              
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96767483260cd0135e52a17_11969571', 'hook_footer_after');
?>

          </div>
        </div>
      </div>
    </div><!-- end footer-center -->

    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-12 col-sp-12">
            <div class="text-md-left">
              <img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/rb_davici/assets/img/payment.png" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            </div>
          </div>
          <div class="col-md-8 col-xs-12 col-sp-12">
            <div class="text-md-right">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206834663360cd0135e60b49_21398944', 'copyright_link');
?>

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
class Block_118753673060cd0135e4cae7_03801214 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_118753673060cd0135e4cae7_03801214',
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
class Block_96767483260cd0135e52a17_11969571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_96767483260cd0135e52a17_11969571',
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
class Block_206834663360cd0135e60b49_21398944 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_206834663360cd0135e60b49_21398944',
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
