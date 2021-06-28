<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-13 00:31:18
  from 'D:\xampp\htdocs\prestashop\rb_davici\themes\rb_davici\templates\catalog\_partials\miniatures\product-slick.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_609cab96b25314_67894036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47dced60d458d46fd5ea3f2c22b55d0ea70e30ad' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\themes\\rb_davici\\templates\\catalog\\_partials\\miniatures\\product-slick.tpl',
      1 => 1617271884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/rb-ajax-load.tpl' => 1,
  ),
),false)) {
function content_609cab96b25314_67894036 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1306988495609cab96b065d5_54225056', 'product_miniature_item');
?>

<?php }
/* {block 'product_thumbnail'} */
class Block_1052005881609cab96b083c2_96945412 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                  <img
                    class="img-fluid rb-image image-cover"
                    data-lazy = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                    data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                  >

                  <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['images'])) {?>
                    <?php $_smarty_tpl->_assignInScope('count', 1);?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                      <?php if ($_smarty_tpl->tpl_vars['count']->value == 1 && $_smarty_tpl->tpl_vars['image']->value['cover'] != 1 && $_smarty_tpl->tpl_vars['image']->value['id_image'] != $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?>
                        <div class="product-hover">
                          <img
                            class="img-fluid rb-image image-hover"
                            data-lazy = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                            title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
"
                            width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                            height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                          >
                        </div>

                        <?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);?>
                      <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  <?php }?>

                  <div class="rb-image-loading"></div>
                </a>
              <?php } else { ?>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                  <img
                    data-lazy="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                  >
                  <div class="rb-image-loading"></div>
                </a>
              <?php }?>
            <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_flags'} */
class Block_1594017266609cab96b0f772_18601471 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <ul class="product-flags">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
                  <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                
              </ul>
            <?php
}
}
/* {/block 'product_flags'} */
/* {block 'quick_view'} */
class Block_401011546609cab96b112a6_26038040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <div class="product-quickview hidden-sm-down">
                    <a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
                      <i class="icon-search"></i>
                      <span class="icon-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                    </a>
                  </div>

                  <div class="product-quick-view" style="display:none;">
                    <a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
                      <i class="icon-search search"></i>
                      <span class="icon-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                    </a>
                  </div>
            <?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_compare'} */
class Block_985784262609cab96b12417_04292866 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <div class="product-compare">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRbCompareProduct','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                  </div>
                <?php
}
}
/* {/block 'product_compare'} */
/* {block 'product-wishlist'} */
class Block_1442819628609cab96b12e07_24701160 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRbWishListProduct','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'product-wishlist'} */
/* {block 'add_to_cart'} */
class Block_1551061171609cab96b137a5_05277507 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <div class="product-add-cart">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRbAddToCart','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                  </div>
                <?php
}
}
/* {/block 'add_to_cart'} */
/* {block 'product_reviews'} */
class Block_1885013435609cab96b14140_10701647 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRbReviewProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'num_star'),$_smarty_tpl ) );?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_name'} */
class Block_345905907609cab96b15008_30354206 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
            <h3 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],40,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
          <?php } else { ?>
            <h2 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],40,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h2>
          <?php }?>
        <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_871885241609cab96b178e9_95941166 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
            <div class="product-price-and-shipping">
              <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


                <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                  <span class="discount-percentage discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
                  <span class="discount-amount discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
              <?php }?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

              <span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

            </div>
          <?php }?>
        <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_miniature_item'} */
class Block_1306988495609cab96b065d5_54225056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_1306988495609cab96b065d5_54225056',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_1052005881609cab96b083c2_96945412',
  ),
  'product_flags' => 
  array (
    0 => 'Block_1594017266609cab96b0f772_18601471',
  ),
  'quick_view' => 
  array (
    0 => 'Block_401011546609cab96b112a6_26038040',
  ),
  'product_compare' => 
  array (
    0 => 'Block_985784262609cab96b12417_04292866',
  ),
  'product-wishlist' => 
  array (
    0 => 'Block_1442819628609cab96b12e07_24701160',
  ),
  'add_to_cart' => 
  array (
    0 => 'Block_1551061171609cab96b137a5_05277507',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_1885013435609cab96b14140_10701647',
  ),
  'product_name' => 
  array (
    0 => 'Block_345905907609cab96b15008_30354206',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_871885241609cab96b178e9_95941166',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article
    class="product-miniature js-product-miniature <?php if (isset($_smarty_tpl->tpl_vars['row']->value) && $_smarty_tpl->tpl_vars['row']->value == 1 && isset($_smarty_tpl->tpl_vars['config']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value, ENT_QUOTES, 'UTF-8');
}?>"
    data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
    data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
"
    itemscope
    itemtype="http://schema.org/Product"
  >
    <div class="thumbnail-container">
        <div class="product-image">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1052005881609cab96b083c2_96945412', 'product_thumbnail', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1594017266609cab96b0f772_18601471', 'product_flags', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_401011546609cab96b112a6_26038040', 'quick_view', $this->tplIndex);
?>


            <?php $_smarty_tpl->_subTemplateRender('file:catalog/rb-ajax-load.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="functional-buttons clearfix">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_985784262609cab96b12417_04292866', 'product_compare', $this->tplIndex);
?>

    
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1442819628609cab96b12e07_24701160', 'product-wishlist', $this->tplIndex);
?>

    
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1551061171609cab96b137a5_05277507', 'add_to_cart', $this->tplIndex);
?>

              </div>
        </div>
      

      <div class="product-meta">
      	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1885013435609cab96b14140_10701647', 'product_reviews', $this->tplIndex);
?>

	
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_345905907609cab96b15008_30354206', 'product_name', $this->tplIndex);
?>


        
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_871885241609cab96b178e9_95941166', 'product_price_and_shipping', $this->tplIndex);
?>


              </div>

          </div>
  </article>
<?php
}
}
/* {/block 'product_miniature_item'} */
}