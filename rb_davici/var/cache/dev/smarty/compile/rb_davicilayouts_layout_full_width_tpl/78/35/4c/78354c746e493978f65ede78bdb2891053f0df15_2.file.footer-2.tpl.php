<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-02 13:11:27
  from 'D:\xampp\htdocs\prestashop\rb_davici\themes\rb_davici\templates\_partials\footer\footer-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b7bbbf99cfc2_55661909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78354c746e493978f65ede78bdb2891053f0df15' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\themes\\rb_davici\\templates\\_partials\\footer\\footer-2.tpl',
      1 => 1615232961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b7bbbf99cfc2_55661909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

  <div class="footer-container footer-h2 style-1">
    <div class="footer-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 col-sp-12 ">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
              <img class="logo" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/rb_davici/assets/img/logo.png"
                alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            </a>
            <div class="box-footer-html"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vestibulum rutrum, mi nec elementum vehicula eros quam gravida nisl id fringilla','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRbFooterContact'),$_smarty_tpl ) );?>

          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 col-sp-12 ">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78231189560b7bbbf8cb306_04536785', 'hook_footer_before');
?>

          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 col-sp-12 ">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177631813060b7bbbf8cc5f4_53649600', 'hook_footer_after');
?>

          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 col-sp-12 ">              
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRbSocial'),$_smarty_tpl ) );?>

          </div>
        </div>
      </div>
    </div><!-- end footer-center -->

    <div class="footer-top">
      <div class="container">
        <div class="footer-blockemail">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRbEmail'),$_smarty_tpl ) );?>

        </div>
      </div>
    </div><!-- end footer-top-->

    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12 col-sp-12">
            <div class="text-md-left">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25704930660b7bbbf8cd5a6_78121292', 'copyright_link');
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRbFooter'),$_smarty_tpl ) );?>

            </div>
          </div>
          <div class="col-md-4 col-xs-12 col-sp-12">
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
class Block_78231189560b7bbbf8cb306_04536785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_78231189560b7bbbf8cb306_04536785',
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
class Block_177631813060b7bbbf8cc5f4_53649600 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_177631813060b7bbbf8cc5f4_53649600',
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
class Block_25704930660b7bbbf8cd5a6_78121292 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_25704930660b7bbbf8cd5a6_78121292',
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
