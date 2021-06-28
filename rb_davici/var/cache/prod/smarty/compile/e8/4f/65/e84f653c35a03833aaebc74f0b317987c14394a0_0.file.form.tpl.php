<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-02 15:37:26
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\admin\rbthemedream_live\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603ea2062075a9_50778938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e84f653c35a03833aaebc74f0b317987c14394a0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\admin\\rbthemedream_live\\helpers\\form\\form.tpl',
      1 => 1612599910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603ea2062075a9_50778938 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'cms_tree' => 
  array (
    'compiled_filepath' => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\var\\cache\\prod\\smarty\\compile\\e8\\4f\\65\\e84f653c35a03833aaebc74f0b317987c14394a0_0.file.form.tpl.php',
    'uid' => 'e84f653c35a03833aaebc74f0b317987c14394a0',
    'call_name' => 'smarty_template_function_cms_tree_2062673522603ea205d28ef8_53675952',
  ),
  'category_tree' => 
  array (
    'compiled_filepath' => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\var\\cache\\prod\\smarty\\compile\\e8\\4f\\65\\e84f653c35a03833aaebc74f0b317987c14394a0_0.file.form.tpl.php',
    'uid' => 'e84f653c35a03833aaebc74f0b317987c14394a0',
    'call_name' => 'smarty_template_function_category_tree_2062673522603ea205d28ef8_53675952',
  ),
  'custom_link_lang' => 
  array (
    'compiled_filepath' => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\var\\cache\\prod\\smarty\\compile\\e8\\4f\\65\\e84f653c35a03833aaebc74f0b317987c14394a0_0.file.form.tpl.php',
    'uid' => 'e84f653c35a03833aaebc74f0b317987c14394a0',
    'call_name' => 'smarty_template_function_custom_link_lang_2062673522603ea205d28ef8_53675952',
  ),
));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2122903804603ea205e0ac24_99915942', "input_row");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* smarty_template_function_cms_tree_2062673522603ea205d28ef8_53675952 */
if (!function_exists('smarty_template_function_cms_tree_2062673522603ea205d28ef8_53675952')) {
function smarty_template_function_cms_tree_2062673522603ea205d28ef8_53675952(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\prestashop\\rb_davici\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>

		    <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?><li data-id="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_cms_category'];?>
" data-type="cms_category" style="margin-left:<?php echo smarty_function_math(array('equation'=>"17 * depth",'depth'=>$_smarty_tpl->tpl_vars['depth']->value),$_smarty_tpl);?>
px" class="cms-category"><span class="drag-handle">&#9776;</span><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
<small>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'cms category','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
)</small><i class="icon-trash js-remove "></i></li><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['pages'], 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?><li data-id="<?php echo $_smarty_tpl->tpl_vars['page']->value['id_cms'];?>
" data-type="cms_page" style="margin-left:<?php echo smarty_function_math(array('equation'=>"17 * (depth+1)",'depth'=>$_smarty_tpl->tpl_vars['depth']->value),$_smarty_tpl);?>
px"><span class="drag-handle">&#9776;</span><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
<small>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'cms page','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
)</small><i class="icon-trash js-remove "></i></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (isset($_smarty_tpl->tpl_vars['node']->value['children'])) {?> <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'cms_tree', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
 <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
    	<?php
}}
/*/ smarty_template_function_cms_tree_2062673522603ea205d28ef8_53675952 */
/* smarty_template_function_category_tree_2062673522603ea205d28ef8_53675952 */
if (!function_exists('smarty_template_function_category_tree_2062673522603ea205d28ef8_53675952')) {
function smarty_template_function_category_tree_2062673522603ea205d28ef8_53675952(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\prestashop\\rb_davici\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>

	        <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
if ($_smarty_tpl->tpl_vars['node']->value['level_depth'] > 1) {?><li data-id="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"data-type="category" style="margin-left:<?php echo smarty_function_math(array('equation'=>"17 * (depth - 2)",'depth'=>$_smarty_tpl->tpl_vars['depth']->value),$_smarty_tpl);?>
px" class="" ><span class="drag-handle">&#9776;</span><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
<small>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'category','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
)</small><i class="icon-trash js-remove "></i></li><?php }
if (isset($_smarty_tpl->tpl_vars['node']->value['children'])) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_tree', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
	    <?php
}}
/*/ smarty_template_function_category_tree_2062673522603ea205d28ef8_53675952 */
/* smarty_template_function_custom_link_lang_2062673522603ea205d28ef8_53675952 */
if (!function_exists('smarty_template_function_custom_link_lang_2062673522603ea205d28ef8_53675952')) {
function smarty_template_function_custom_link_lang_2062673522603ea205d28ef8_53675952(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('page'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    		<div class="form-group"><label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</label><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?><div class="translatable-field lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>><?php }?><div class="col-lg-7"><input value="<?php echo $_smarty_tpl->tpl_vars['page']->value['title'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
"type="text" class="link-title-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
"></div><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?><div class="col-lg-2"><button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'htmlall','UTF-8' ));?>
<span class="caret"></span></button><ul class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?><li><a href="javascript:hideOtherLanguage(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'],'htmlall','UTF-8' ));?>
 );" tabindex="-1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'html' ));?>
</a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?></div><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div>
    	<?php
}}
/*/ smarty_template_function_custom_link_lang_2062673522603ea205d28ef8_53675952 */
/* {block "input_row"} */
class Block_2122903804603ea205e0ac24_99915942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_2122903804603ea205e0ac24_99915942',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'link_block') {?>
		<div class="row">
			<?php echo '<script'; ?>
 type="text/javascript">
                var come_from = '<?php echo $_smarty_tpl->tpl_vars['name_controller']->value;?>
';
                var token = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
                var alternate = 1;
            <?php echo '</script'; ?>
>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'link_position', false, 'key', 'linkLoop', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['link_position']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_linkLoop']->value['index']++;
?>
            	<div class="col-lg-6">
            		<div class="panel">
            		 	<div class="panel-heading">
                            <?php echo $_smarty_tpl->tpl_vars['link_position']->value['hook_name'];?>

                            <small><?php echo $_smarty_tpl->tpl_vars['link_position']->value['hook_title'];?>
</small>
                        </div>

                        <table class="table tableDnD cms" id="id_rbthemedream_link_<?php echo $_smarty_tpl->tpl_vars['link_position']->value['id_hook'];?>
">
                        	<thead>
                                <tr class="nodrag nodrop">
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</th>
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</th>
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Link Name','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                            	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['link_position']->value['links'], 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
                            		<tr class="<?php if ($_smarty_tpl->tpl_vars['key']->value%2) {?>alt_row<?php } else { ?>not_alt_row<?php }?> row_hover" id="tr_<?php echo $_smarty_tpl->tpl_vars['link_position']->value['id_hook'];?>
_<?php echo $_smarty_tpl->tpl_vars['link']->value['id_rbthemedream_link'];?>
_<?php echo $_smarty_tpl->tpl_vars['link']->value['position'];?>
">
                            			<td><?php echo $_smarty_tpl->tpl_vars['link']->value['id_rbthemedream_link'];?>
</td>
                            			<td class="center pointer dragHandle" id="td_<?php echo $_smarty_tpl->tpl_vars['link_position']->value['id_hook'];?>
_<?php echo $_smarty_tpl->tpl_vars['link']->value['id_rbthemedream_link'];?>
">
                                            <div class="dragGroup">
                                                <div class="positions">
                                                    <?php echo $_smarty_tpl->tpl_vars['link']->value['position']+1;?>

                                                </div>
                                            </div>
                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['link']->value['name'];?>
</td>
                                        <td>
                                        	<div class="btn-group-action">
                                        		<div class="btn-group pull-right">
                                        			<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&amp;edit<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
&amp;id_rbthemedream_link=<?php echo (int)$_smarty_tpl->tpl_vars['link']->value['id_rbthemedream_link'];?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
">
                                                        <i class="icon-edit"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

                                                    </a>

                                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                        <i class="icon-caret-down"></i>&nbsp;
                                                    </button>

                                                    <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&amp;delete<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
&amp;id_rbthemedream_link=<?php echo $_smarty_tpl->tpl_vars['link']->value['id_rbthemedream_link'];?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
">
                                                            <i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

                                                        </a>
                                                    </li>
                                                    </ul>
                                        		</div>
                                        	</div>
                                        </td>
                            		</tr>
                            	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
            		</div>
            	</div>

            	<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_linkLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_linkLoop']->value['index'] : null)%2) {?><div class="clearfix"></div><?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'list_page') {?>
		

	    

    	<div class="col-xs-7">
		    <div class="panel link-selector">
		        <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
</div>
		        <ul id="repository-list">
		          	<li class="list-subtitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cms pages','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</li>
		          	<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'cms_tree', array('nodes'=>$_smarty_tpl->tpl_vars['cms_tree']->value), true);?>

		          	<li class="list-subtitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Static pages','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</li>

			        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['static_pages']->value, 'static');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['static']->value) {
?>
			            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['static']->value['pages'], 'page', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['page']->value) {
?>
			              	<li data-id="<?php echo $_smarty_tpl->tpl_vars['page']->value['id_cms'];?>
" data-type="static">
			              	<span class="drag-handle">&#9776;</span>
			              	<?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>

			              	<small>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'static page','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
)</small>
			              	<i class="icon-trash js-remove "></i></li>
			            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		            <li class="list-subtitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</li>
		            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_tree', array('nodes'=>$_smarty_tpl->tpl_vars['category_tree']->value), true);?>

		        </ul>
		    </div>
    	</div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'selected_link') {?>
    	<input type="hidden" name="data" id="selected-link" value="">

    	

    	<div class="col-xs-5">
    		<div class="panel link-selector">
		        <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
</div>

		        <div class="drag-info">
		        	<span class="drag-handle">&#9776;</span>
		        	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drag&drop links below from repository','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

		        </div>

		        <ul id="selected-list">
		        	<?php if (!empty($_smarty_tpl->tpl_vars['selected_links']->value)) {?>
				        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected_links']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
				            <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] == 'custom') {?>
				                <li data-type="<?php echo $_smarty_tpl->tpl_vars['page']->value['type'];?>
"><span class="drag-handle">&#9776;</span>
				                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'custom_link_lang', array('page'=>$_smarty_tpl->tpl_vars['page']->value), true);?>

				                <i class="icon-trash js-remove "></i></li>
				            <?php } else { ?>
				                <?php if (isset($_smarty_tpl->tpl_vars['page']->value['data']['title'])) {?>
				                	<li data-type="<?php echo $_smarty_tpl->tpl_vars['page']->value['type'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
">
				                		<span class="drag-handle">&#9776;</span>
				                		<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['title'];?>

				                		<small>
				                			<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] == 'static') {?>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'static pages','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
)<?php }?>

				                			<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] == 'cms_category') {?>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'cms category','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
)<?php }?>

				                			<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] == 'cms_page') {?>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'cms page','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
)<?php }?>
				                		</small>
				                		<i class="icon-trash js-remove "></i>
				                	</li>
				                <?php }?>
				            <?php }?>
				        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			        <?php }?>
		        </ul>
		    </div>

		    <div class="drag-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Or add custom link','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</div>

		    <div id="custom-links-panel">
		    	<div class="form-group">
        			<label class="control-label col-lg-3">
            			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

        			</label>

        			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
				        <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
				        	<div class="translatable-field lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
				        <?php }?>

				        <div class="col-lg-7">
				            <input value="" type="text" class="link-title-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
">
				        </div>

				        <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
				            <div class="col-lg-2">
				                <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
				                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'htmlall','UTF-8' ));?>

				                    <span class="caret"></span>
				                </button>
				                <ul class="dropdown-menu">
				                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
				                    	<li><a href="javascript:hideOtherLanguage(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'],'htmlall','UTF-8' ));?>
 );" tabindex="-1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'html' ));?>
</a></li>
				                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				                </ul>
				            </div>
				        <?php }?>

				        <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
				        	</div>
				        <?php }?>
        			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    			</div>

    			<div class="form-group">
			        <label class="control-label col-lg-3">
			           <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Url','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

			        </label>

			        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
				        <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
				        	<div class="translatable-field lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
				        <?php }?>
			            <div class="col-lg-7">
			                <input value="" type="text" class="link-url-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
">
			                <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Put absolute url with http:// or https:// prefix','mod'=>'rbthemedream'),$_smarty_tpl ) );?>
</p>
			            </div>

			            <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
			            <div class="col-lg-2">
			                <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
			                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'htmlall','UTF-8' ));?>

			                    <span class="caret"></span>
			                </button>
			                <ul class="dropdown-menu">
			                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
			                    <li><a href="javascript:hideOtherLanguage(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'],'htmlall','UTF-8' ));?>
 );" tabindex="-1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'html' ));?>
</a></li>
			                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			                </ul>
			            </div>
			            <?php }?>

			            <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
			        		</div>
			        	<?php }?>
			        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    			</div>
		    </div>

		    <div class="form-group">
		        <button type="button" id="add-custom-link" class="btn btn-default btn-lg">
		             <i class="icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','mod'=>'rbthemedream'),$_smarty_tpl ) );?>

		        </button>
    		</div>
    	</div>

    	<div class="clearfix"></div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input_row"} */
}
