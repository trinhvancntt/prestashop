<?php
/* Smarty version 3.1.33, created on 2019-08-30 01:07:02
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\appagebuilder\views\templates\admin\ap_page_builder_home\shortcodelist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d68aef6a16d07_59666924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1c706a6754f8830e169120d732742a2625a86c4' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_home\\shortcodelist.tpl',
      1 => 1547087527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68aef6a16d07_59666924 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\shortcodelist -->
<?php if (isset($_smarty_tpl->tpl_vars['importData']->value)) {?>
    
<?php } else { ?>
<ul class="nav nav-tabs" role="tablist" id="tab-new-widget">
    <li role="presentation" class="active"><a href="#widget" aria-controls="widget" role="tab" data-toggle="tab">Widget</a></li>
    <li id="popup_list_module" role="presentation"><a href="#module" aria-controls="module" role="tab" data-toggle="tab">Module</a></li>
</ul>

<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="widget">
        <ol class="breadcrumb in-widget filters for-widget" data-for="widget">
            <li><a href="javascript:;"><button data-filter="*" class="btn is-checked">Show all</button></a></li>
            <li><a href="javascript:;"><button data-filter="content" class="btn">Content</button></a></li>
            <li><a href="javascript:;"><button data-filter="slider" class="btn">Slider</button></a></li>
            <li><a href="javascript:;"><button data-filter="social" class="btn">Social</button></a></li>
            <li><a href="javascript:;"><button data-filter="structure" class="btn">Structure</button></a></li>
        </ol>
        <div class="row" id="widget_container">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shortCodeList']->value, 'shortCode', false, 'kshort');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kshort']->value => $_smarty_tpl->tpl_vars['shortCode']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['kshort']->value != 'ApModule') {?>
                <div class="item col-md-3 col-sm-4 col-xs-6 " data-tag="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shortCode']->value['tag'],'html','UTF-8' ));?>
">
                    <div class="cover-short-code">
                        <a href="javascript:void(0)" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shortCode']->value['desc'],'html','UTF-8' ));?>
" class="shortcode new-shortcode" data-type='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['kshort']->value,'html','UTF-8' ));?>
'>
                            <i class="icon <?php if (isset($_smarty_tpl->tpl_vars['shortCode']->value['icon_class'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shortCode']->value['icon_class'],'html','UTF-8' ));
}?>"> </i>
                            <span class="label"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shortCode']->value['label'],'html','UTF-8' ));?>
</span>
                            <small class="clearfix"><i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shortCode']->value['desc'],'html','UTF-8' ));?>
</i></small>
                        </a>
                    </div>
                </div>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="module">
        <ol class="breadcrumb in-widget filters for-module" data-for="module">
            <li><a href="javascript:;"><button data-filter="*" class="btn is-checked"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show all','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</button></a></li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['author']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <li><a href="javascript:;"><button data-filter="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value,'html','UTF-8' ));?>
" class="btn"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value,'html','UTF-8' ));?>
</button></a></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <li><a href="javascript:;"><button data-filter="other" class="btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Other','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</button></a></li>
            <li><a href="javascript:;"><button data-filter="other" class="btn btn-new-widget reload-module"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ReLoad','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</button></a></li>
        </ol>
        <div class="row" id="module_container">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listModule']->value, 'item', false, 'kshort');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kshort']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                <div class="item col-md-3 col-sm-4 col-xs-6 " data-tag="<?php if ($_smarty_tpl->tpl_vars['item']->value['author']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['author'],'html','UTF-8' ));
} else { ?>other<?php }?>">
                    <div class="cover-short-code">
                        <a href="javascript:void(0)" title="<?php if ($_smarty_tpl->tpl_vars['item']->value['description_short']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['description'],'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['name'],'html','UTF-8' ));
}?>" 
                           class="shortcode new-shortcode module" data-type="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['name'],'html','UTF-8' ));?>
">
                            <img class="icon" src="../modules/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['name'],'html','UTF-8' ));?>
/logo.png"/>
                            <span class="label"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['name'],'html','UTF-8' ));?>
</span>
                            <small class="clearfix"><i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['description_short'],'html','UTF-8' ));?>
</i></small>
                        </a>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
		var tab = $(".btn-back-to-list").attr("tab");
        $("#tab-new-widget a").each(function() {
			if($(this).attr("aria-controls") == tab) {
				$(this).tab("show");
			}
		});
		//$("#tab-new-widget a:first").tab("show");
    })
<?php echo '</script'; ?>
>
<?php }
}
}
