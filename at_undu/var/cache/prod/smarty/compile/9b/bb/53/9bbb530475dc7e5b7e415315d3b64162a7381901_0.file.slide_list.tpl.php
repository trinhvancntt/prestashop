<?php
/* Smarty version 3.1.33, created on 2019-09-27 04:12:25
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\leoslideshow\views\templates\hook\slide_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8dc469359094_75898143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bbb530475dc7e5b7e415315d3b64162a7381901' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\leoslideshow\\views\\templates\\hook\\slide_list.tpl',
      1 => 1551685753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8dc469359094_75898143 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-danger" id="slider-warning" style="display:none"></div>
<fieldset>
<div class="panel">
<div class="panel-heading">
	<i class="icon-list-ul"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Slides list','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

	<span class="panel-heading-action">
		<a id="desc-product-new" class="list-toolbar-btn" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leoslideshow&addNewSlider=1&id_group=<?php echo intval($_smarty_tpl->tpl_vars['id_group']->value);?>
">
			<label><span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true"><i class="process-icon-new "></i></span></label>
		</a>
	</span>
</div>
        <div class="alert alert-info"><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leoslideshow&editgroup=1&id_group=<?php echo intval($_smarty_tpl->tpl_vars['id_group']->value);?>
" alt=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_title']->value,'html','UTF-8' ));?>
><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_title']->value,'html','UTF-8' ));?>
</a></div>
	<div id="slidesContent" style="width: 500px; margin-top: 30px;">
		<ul id="slides">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slides']->value, 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
			<li id="slides_<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
">
				<strong>#<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
</strong> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['title'],32,'...' )),'html','UTF-8' ));?>

				<div style="float: right;margin-top: -5px;">
					<?php echo $_smarty_tpl->tpl_vars['slide']->value['status'];?>
                                        <div class="btn-group">
                                            <a class="btn btn-default dropdown-toggle" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leoslideshow&editSlider=1&id_slide=<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
&id_group=<?php echo intval($_smarty_tpl->tpl_vars['id_group']->value);?>
"> 
                                                <?php if ($_smarty_tpl->tpl_vars['slide']->value['id_slide'] == $_smarty_tpl->tpl_vars['currentSliderID']->value) {?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Editting','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                                                <?php } else { ?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                                                <?php }?>
                                            </a>

                                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                                                <span class="caret"></span>&nbsp;
                                            </button>
                                            <ul class="dropdown-menu" style="border: none">
                                                <li style="background-color:#fff;border: none">
                                                   <a class="" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leoslideshow&editSlider=1&id_slide=<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
&id_group=<?php echo intval($_smarty_tpl->tpl_vars['id_group']->value);?>
"> 
                                                       <i class="icon-edit"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to Edit','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                                                   </a>
                                                </li>
                                                <li style="background-color:#fff;border: none">
                                                    <a class="color_danger btn-actionslider delete-slide" data-confirm="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure you want to delete this slider?','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
" data-id-slide="<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leoslideshow&leoajax=1&action=deleteSlider&id_slide=<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
"><i class="icon-remove-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete This slider','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
                                                </li>
                                                <li style="background-color:#fff;border: none">
                                                   <a class="btn-actionslider" data-confirm="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure you want to duplicate this slider?','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
" data-id-slide="<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leoslideshow&leoajax=1&action=duplicateSlider&id_slide=<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
"> 
                                                       <i class="icon-film"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate This Slider','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                                                   </a>
                                                </li>
                                            </ul>
                                            
                                        </div>
                                        
                                        <div class="btn-group"> 
                                            <a class="btn btn-default <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>dropdown-toggle <?php } else { ?>slider-preview <?php }?>color_danger" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['previewLink']->value,'html','UTF-8' ));?>
&id_group=<?php echo intval($_smarty_tpl->tpl_vars['id_group']->value);?>
&id_slide=<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
"><i class="icon-eye-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
                                            <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>

                                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                                                <span class="caret"></span>&nbsp;
                                            </button>
                                            <ul class="dropdown-menu" style="border: none">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                                                <li style="background-color:#fff;border: none">
                                                    <?php $_smarty_tpl->_assignInScope('arrayParam', array('secure_key'=>$_smarty_tpl->tpl_vars['msecure_key']->value,'id_group'=>$_smarty_tpl->tpl_vars['id_group']->value,'id_slide'=>$_smarty_tpl->tpl_vars['slide']->value['id_slide']));?>
                                                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('leoslideshow','preview',$_smarty_tpl->tpl_vars['arrayParam']->value,null,$_smarty_tpl->tpl_vars['language']->value['id_lang']),'html','UTF-8' ));?>
" class="slider-preview">
                                                        <i class="icon-eye-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview For','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['name'],'html','UTF-8' ));?>

                                                    </a>
                                                </li>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </ul>
                                            <?php }?>
                                        </div>
				</div>
			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
</div>
</fieldset>
<?php echo '<script'; ?>
 type="text/javascript">
	var leo_slider_list_link = "<?php echo $_smarty_tpl->tpl_vars['leo_slider_list_link']->value;?>
";
<?php echo '</script'; ?>
>
<?php }
}
