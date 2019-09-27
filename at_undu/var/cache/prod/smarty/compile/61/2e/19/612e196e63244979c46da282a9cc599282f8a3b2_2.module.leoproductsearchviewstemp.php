<?php
/* Smarty version 3.1.33, created on 2019-08-30 01:12:01
  from 'module:leoproductsearchviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d68b02128d205_37797219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '612e196e63244979c46da282a9cc599282f8a3b2' => 
    array (
      0 => 'module:leoproductsearchviewstemp',
      1 => 1557888554,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68b02128d205_37797219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'lps_categories' => 
  array (
    'compiled_filepath' => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\var\\cache\\prod\\smarty\\compile\\61\\2e\\19\\612e196e63244979c46da282a9cc599282f8a3b2_2.module.leoproductsearchviewstemp.php',
    'uid' => '612e196e63244979c46da282a9cc599282f8a3b2',
    'call_name' => 'smarty_template_function_lps_categories_6301685395d68b02126de01_97812985',
  ),
));
?>


<!-- Block search module -->
<div id="leo_search_block_top" class="block exclusive<?php if ($_smarty_tpl->tpl_vars['en_search_by_cat']->value) {?> search-by-category<?php }?>">
	<a id="show_search" href="javascript:void(0)" data-toggle="dropdown" class="float-xs-right popup-title">
	   <i class="icon-magnifier"></i>
	</a>
	<span class="close-overlay"><i class="material-icons">&#xE5CD;</i></span>
	<div class="over-layer"></div>
	<div class="block-form clearfix">
		<form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('productsearch',true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" id="leosearchtopbox">
			<input type="hidden" name="fc" value="module" />
			<input type="hidden" name="module" value="leoproductsearch" />
			<input type="hidden" name="controller" value="productsearch" />
						<div class="block_content clearfix">
				<div class="box-leoproductsearch-result">
					<div class="leoproductsearch-result container">
						<div class="leoproductsearch-loading cssload-container">
							<div class="cssload-speeding-wheel"></div>
						</div>
						<input class="search_query form-control grey" type="text" id="leo_search_query_top" name="search_query" value="<?php echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_query']->value,'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search our catalog','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" />
						<button type="submit" id="leo_search_top_button" class="btn btn-default button button-small"><i class="icon-magnifier"></i></button> 
					</div>
				</div>
				<div class="list-cate-wrapper"<?php if (!$_smarty_tpl->tpl_vars['en_search_by_cat']->value) {?> style="display: none"<?php }?>>
					<input id="leosearchtop-cate-id" name="cate" value="<?php if (isset($_smarty_tpl->tpl_vars['selectedCate']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['selectedCate']->value, ENT_QUOTES, 'UTF-8');
}?>" type="hidden">
					<a href="#" id="dropdownListCateTop" class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span><?php if ($_smarty_tpl->tpl_vars['selectedCateName']->value != '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['selectedCateName']->value, ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search By Category','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}?></span>
					</a>
					<div class="list-cate dropdown-menu" aria-labelledby="dropdownListCateTop">
						<div class="container">
							<div class="row search-flex">
								<div class="col-lg-4 col-sp-12">
									<h4 class="title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search By Category','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
									<div class="box-cate">
										<a href="#" data-cate-id="" data-cate-name="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" class="cate-item<?php if ($_smarty_tpl->tpl_vars['selectedCate']->value == '') {?> active<?php }?>" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
										<a href="#" data-cate-id="<?php echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cates']->value['id_category'],'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" data-cate-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cates']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="cate-item cate-level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cates']->value['level_depth'], ENT_QUOTES, 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['selectedCate']->value) && $_smarty_tpl->tpl_vars['cates']->value['id_category'] == $_smarty_tpl->tpl_vars['selectedCate']->value) {?> active<?php }?>" ><?php if ($_smarty_tpl->tpl_vars['cates']->value['level_depth'] > 1) {
echo htmlspecialchars(str_repeat('-',$_smarty_tpl->tpl_vars['cates']->value['level_depth']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['cates']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
										<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'lps_categories', array('nodes'=>$_smarty_tpl->tpl_vars['cates']->value['children']), true);?>

									</div>
								</div>
								<div class="col-lg-8 hidden-md-down">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayApSC','sc_key'=>'sc1543053378'),$_smarty_tpl ) );?>

								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</form>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var blocksearch_type = 'top';
<?php echo '</script'; ?>
>
<!-- /Block search module -->
<?php }
/* smarty_template_function_lps_categories_6301685395d68b02126de01_97812985 */
if (!function_exists('smarty_template_function_lps_categories_6301685395d68b02126de01_97812985')) {
function smarty_template_function_lps_categories_6301685395d68b02126de01_97812985(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?><a href="#" data-cate-id="<?php echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['id_category'],'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" data-cate-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="cate-item cate-level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['level_depth'], ENT_QUOTES, 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['selectedCate']->value) && $_smarty_tpl->tpl_vars['node']->value['id_category'] == $_smarty_tpl->tpl_vars['selectedCate']->value) {?> active<?php }?>" ><?php if ($_smarty_tpl->tpl_vars['node']->value['level_depth'] > 1) {
echo htmlspecialchars(str_repeat('-',$_smarty_tpl->tpl_vars['node']->value['level_depth']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'lps_categories', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}}
/*/ smarty_template_function_lps_categories_6301685395d68b02126de01_97812985 */
}
