<?php
/* Smarty version 3.1.33, created on 2019-09-17 05:44:25
  from 'W:\xampp\htdocs\prestashop\at_undu\themes\at_undu\modules\appagebuilder\views\templates\front\details\detail1522243737.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d80aaf91a9c88_99289814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b461bed5dd3bd5f2ad3a757045e02d9a4faf0a29' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\themes\\at_undu\\modules\\appagebuilder\\views\\templates\\front\\details\\detail1522243737.tpl',
      1 => 1553050753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-images-modal.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:sub/product_info/tab.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5d80aaf91a9c88_99289814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<section id="main" class="product-detail thumbs-bottom product-image-thumbs product-thumbs-bottom" itemscope itemtype="https://schema.org/Product">
  <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><div class="row"><div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-sp-12">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20832447005d80aaf912cc89_00865623', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15578705515d80aaf918e706_40146599', 'product_images_modal');
?>

                            </div><div class="detail-padding-left col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-sp-12">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4170375065d80aaf918e703_19348936', 'page_header_container');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9037480845d80aaf918e701_49990952', 'product_additional_info');
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProductReviewExtra','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
<div class="leo-more-cdown" data-idproduct="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"></div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4681063015d80aaf9192584_58048034', 'product_prices');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14714262245d80aaf9192587_34522436', 'product_description_short');
?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1821745915d80aaf9196403_16552932', 'product_customization');
?>

<?php }?>
<div class="product-actions">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1734780175d80aaf9196407_43536838', 'product_buy');
?>

</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3179431015d80aaf919e106_28531339', 'hook_display_reassurance');
?>

                            </div><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12">
<?php $_smarty_tpl->_subTemplateRender("file:sub/product_info/tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11223315695d80aaf919e106_68088928', 'product_accessories');
?>


    <?php echo '<script'; ?>
 type="text/javascript">
      products_list_functions.push(
        function(){
          $('#category-products2').owlCarousel({
            <?php if (isset($_smarty_tpl->tpl_vars['IS_RTL']->value) && $_smarty_tpl->tpl_vars['IS_RTL']->value) {?>
              direction:'rtl',
            <?php } else { ?>
              direction:'ltr',
            <?php }?>
            items : 4,
            itemsCustom : false,
            itemsDesktop : [1200, 4],
            itemsDesktopSmall : [992, 3],
            itemsTablet : [768, 2],
            itemsTabletSmall : false,
            itemsMobile : [480, 1],
            singleItem : false,         // true : show only 1 item
            itemsScaleUp : false,
            slideSpeed : 200,  //  change speed when drag and drop a item
            paginationSpeed :800, // change speed when go next page

            autoPlay : false,   // time to show each item
            stopOnHover : false,
            navigation : true,
            navigationText : ["&lsaquo;", "&rsaquo;"],

            scrollPerPage :true,
            responsive :true,
            
            pagination : false,
            paginationNumbers : false,
            
            addClassActive : true,
            
            mouseDrag : true,
            touchDrag : true,

          });
        }
      ); 
    <?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4123863135d80aaf91a5e01_39038304', 'product_footer');
?>

                            </div></div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11697526435d80aaf91a5e07_12981318', 'page_footer_container');
?>

</section>

<?php }
/* {block 'product_flags'} */
class Block_2880932365d80aaf912cc81_37298898 extends Smarty_Internal_Block
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
                </ul>
              <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover'} */
class Block_5567249825d80aaf912cc86_12986830 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-cover">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2880932365d80aaf912cc81_37298898', 'product_flags', $this->tplIndex);
?>

              
            <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
              <img id="zoom_product" data-type-zoom="" class="js-qv-product-cover img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
            <?php } else { ?>
              <img id="zoom_product" data-type-zoom="" class="js-qv-product-cover img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
            <?php }?>
              <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                <i class="material-icons zoom-in">&#xE8FF;</i>
              </div>
            </div>
          <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_images'} */
class Block_13487020985d80aaf9134987_36143911 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="thumb-gallery" class="product-thumb-images">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                <div class="thumb-container <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> active <?php }?>">
                  <a href="javascript:void(0)" data-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" data-zoom-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"> 
                    <img
                      class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>"
                      data-image-medium-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                      data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                      title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                      itemprop="image"
                    >
                  </a>
                </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            
            <?php if (count($_smarty_tpl->tpl_vars['product']->value['images']) > 1) {?>
        			<div class="arrows-product-fake slick-arrows">
        			  <button class="slick-prev slick-arrow" aria-label="Previous" type="button" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</button>
        			  <button class="slick-next slick-arrow" aria-label="Next" type="button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</button>
        			</div>
            <?php }?>
          <?php
}
}
/* {/block 'product_images'} */
/* {block 'product_cover_thumbnails'} */
class Block_15815517625d80aaf912cc89_58509189 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5567249825d80aaf912cc86_12986830', 'product_cover', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13487020985d80aaf9134987_36143911', 'product_images', $this->tplIndex);
?>


        <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_19354597775d80aaf912cc86_02037649 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="images-container">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15815517625d80aaf912cc89_58509189', 'product_cover_thumbnails', $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs'),$_smarty_tpl ) );?>

      </div>
    <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20832447005d80aaf912cc89_00865623 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_20832447005d80aaf912cc89_00865623',
  ),
  'page_content' => 
  array (
    0 => 'Block_19354597775d80aaf912cc86_02037649',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_15815517625d80aaf912cc89_58509189',
  ),
  'product_cover' => 
  array (
    0 => 'Block_5567249825d80aaf912cc86_12986830',
  ),
  'product_flags' => 
  array (
    0 => 'Block_2880932365d80aaf912cc81_37298898',
  ),
  'product_images' => 
  array (
    0 => 'Block_13487020985d80aaf9134987_36143911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="page-content" id="content" data-templateview="bottom" data-numberimage="5" data-numberimage1200="5" data-numberimage992="5" data-numberimage768="4" data-numberimage576="4" data-numberimage480="3" data-numberimage360="2" data-templatemodal="1" data-templatezoomtype="in_scrooll" data-zoomposition="right" data-zoomwindowwidth="400" data-zoomwindowheight="400">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19354597775d80aaf912cc86_02037649', 'page_content', $this->tplIndex);
?>

  </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_images_modal'} */
class Block_15578705515d80aaf918e706_40146599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images_modal' => 
  array (
    0 => 'Block_15578705515d80aaf918e706_40146599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_title'} */
class Block_12888054055d80aaf918e706_28416872 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_1242302555d80aaf918e705_70059652 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<h1 class="h1 product-detail-name" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12888054055d80aaf918e706_28416872', 'page_title', $this->tplIndex);
?>
</h1>
	<?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_4170375065d80aaf918e703_19348936 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_4170375065d80aaf918e703_19348936',
  ),
  'page_header' => 
  array (
    0 => 'Block_1242302555d80aaf918e705_70059652',
  ),
  'page_title' => 
  array (
    0 => 'Block_12888054055d80aaf918e706_28416872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1242302555d80aaf918e705_70059652', 'page_header', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_additional_info'} */
class Block_9037480845d80aaf918e701_49990952 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_additional_info' => 
  array (
    0 => 'Block_9037480845d80aaf918e701_49990952',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_prices'} */
class Block_4681063015d80aaf9192584_58048034 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_4681063015d80aaf9192584_58048034',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_14714262245d80aaf9192587_34522436 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_14714262245d80aaf9192587_34522436',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_1821745915d80aaf9196403_16552932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_1821745915d80aaf9196403_16552932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	 	<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
	<?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_13932646415d80aaf919a282_89087402 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_15233866315d80aaf919a284_81287472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
              <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_14986121785d80aaf919a289_10291980 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
          <section class="product-pack">
            <h3 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15233866315d80aaf919a284_81287472', 'product_miniature', $this->tplIndex);
?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </section>
        <?php }?>
      <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_6660218045d80aaf919a287_56600155 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_18976771975d80aaf919e105_21916101 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_6403424395d80aaf919e104_19671485 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
      <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_1734780175d80aaf9196407_43536838 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_1734780175d80aaf9196407_43536838',
  ),
  'product_variants' => 
  array (
    0 => 'Block_13932646415d80aaf919a282_89087402',
  ),
  'product_pack' => 
  array (
    0 => 'Block_14986121785d80aaf919a289_10291980',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_15233866315d80aaf919a284_81287472',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_6660218045d80aaf919a287_56600155',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_18976771975d80aaf919e105_21916101',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_6403424395d80aaf919e104_19671485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
      <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
      <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
      <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13932646415d80aaf919a282_89087402', 'product_variants', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14986121785d80aaf919a289_10291980', 'product_pack', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6660218045d80aaf919a287_56600155', 'product_discounts', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18976771975d80aaf919e105_21916101', 'product_add_to_cart', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6403424395d80aaf919e104_19671485', 'product_refresh', $this->tplIndex);
?>

    </form>
  <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_3179431015d80aaf919e106_28531339 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_reassurance' => 
  array (
    0 => 'Block_3179431015d80aaf919e106_28531339',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_miniature'} */
class Block_15934432345d80aaf91a1f81_23797844 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <?php if (isset($_smarty_tpl->tpl_vars['productProfileDefault']->value) && $_smarty_tpl->tpl_vars['productProfileDefault']->value) {?>
                        
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProfileProduct','product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'profile'=>$_smarty_tpl->tpl_vars['productProfileDefault']->value),$_smarty_tpl ) );?>

                      <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?>
                      <?php }?>
                    <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_11223315695d80aaf919e106_68088928 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_accessories' => 
  array (
    0 => 'Block_11223315695d80aaf919e106_68088928',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_15934432345d80aaf91a1f81_23797844',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
        <section class="product-accessories clearfix">
          <h3 class="h5 products-section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>

          <div class="products"> 
            <div class="owl-row <?php if (isset($_smarty_tpl->tpl_vars['productClassWidget']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productClassWidget']->value, ENT_QUOTES, 'UTF-8');
}?>">
              <div id="category-products2">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
                  <div class="item<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index'] : null) == 0) {?> first<?php }?>">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15934432345d80aaf91a1f81_23797844', 'product_miniature', $this->tplIndex);
?>

                  </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
            </div>
          </div>
        </section>
      <?php }?>
    <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_4123863135d80aaf91a5e01_39038304 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_footer' => 
  array (
    0 => 'Block_4123863135d80aaf91a5e01_39038304',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'product_footer'} */
/* {block 'page_footer'} */
class Block_8782572635d80aaf91a9c84_14984056 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	    	<!-- Footer content -->
	    <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_11697526435d80aaf91a5e07_12981318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer_container' => 
  array (
    0 => 'Block_11697526435d80aaf91a5e07_12981318',
  ),
  'page_footer' => 
  array (
    0 => 'Block_8782572635d80aaf91a9c84_14984056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	  <footer class="page-footer">
	    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8782572635d80aaf91a9c84_14984056', 'page_footer', $this->tplIndex);
?>

	  </footer>
	<?php
}
}
/* {/block 'page_footer_container'} */
}
