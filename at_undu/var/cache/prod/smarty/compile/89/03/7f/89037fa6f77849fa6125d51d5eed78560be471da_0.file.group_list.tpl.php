<?php
/* Smarty version 3.1.33, created on 2019-09-27 04:12:21
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\leoslideshow\views\templates\hook\group_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8dc4656a8b15_57806644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89037fa6f77849fa6125d51d5eed78560be471da' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\leoslideshow\\views\\templates\\hook\\group_list.tpl',
      1 => 1553218550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8dc4656a8b15_57806644 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset>
	    <div id="groupLayer" class="panel col-lg-12">
        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Group List','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</h3>
        <div class="alert alert-info"><a href="http://www.leotheme.com/guides/prestashop16/leo-slider-layer/" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to see configuration guide','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a></div>
        <div class="table-responsive clearfix">
            <table class="table">
                <thead>
                    <tr class="nodrag nodrop">
                        <th class="center fixed-width-xs"></th>

                        <th class="">
                            <span class="title_box ">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Group Name','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                            </span>
                        </th>
                        <th class="center fixed-width-xs"> <span class="title_box "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</span></th>

                        <th colspan="2">
                            <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leoslideshow&addNewGroup=1" class="btn btn-default">
                                <i class="icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new Group','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?>
                        <tr class=" odd">
                            <td class="text-center"><strong>#<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_leoslideshow_groups']);?>
</strong></td>
                            <td <?php if ($_smarty_tpl->tpl_vars['group']->value['id_leoslideshow_groups'] != $_smarty_tpl->tpl_vars['curentGroup']->value) {?>onclick="document.location = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leoslideshow&editgroup=1&id_group=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value['id_leoslideshow_groups'],'html','UTF-8' ));?>
'"<?php }?> class="pointer">
                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value['title'],'html','UTF-8' ));?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['group']->value['status'];?>
&nbsp;&nbsp;&nbsp;
                            </td>

                            <td>
                                <div class="btn-group-action">
                                    <div class="btn-group pull-right">
                                        <?php if ($_smarty_tpl->tpl_vars['group']->value['id_leoslideshow_groups'] != $_smarty_tpl->tpl_vars['curentGroup']->value) {?>
                                            <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leoslideshow&editgroup=1&id_group=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value['id_leoslideshow_groups'],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Group','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
" class="edit btn btn-default">
                                                <i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                                            </a>
                                        <?php } else { ?>
                                            <a href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Editting','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
" class="btn " style="color:#BBBBBB">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Editting','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                                            </a>
                                        <?php }?>
                                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>&nbsp;
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leoslideshow&deletegroup=1&id_group=<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_leoslideshow_groups']);?>
" onclick="if (confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete Selected Group?','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
')) {
                                        return true;
                                    } else {
                                        event.stopPropagation();
                                        event.preventDefault();
                                    }
                                    ;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
" class="delete">
                                                    <i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                                                </a>
                                                <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                                                        <?php $_smarty_tpl->_assignInScope('arrayParam', array('secure_key'=>$_smarty_tpl->tpl_vars['msecure_key']->value,'id_group'=>$_smarty_tpl->tpl_vars['group']->value['id_leoslideshow_groups']));?>
                                                        <a class="group-preview" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('leoslideshow','preview',$_smarty_tpl->tpl_vars['arrayParam']->value,null,intval($_smarty_tpl->tpl_vars['language']->value['id_lang']));?>
">
                                                            <i class="icon-eye-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview For','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['name'],'html','UTF-8' ));?>

                                                        </a>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php } else { ?>
                                                    <a class="group-preview" target="_blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['previewLink']->value,'html','UTF-8' ));?>
&id_group=<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_leoslideshow_groups']);?>
">
                                                        <i class="icon-eye-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview Group','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                                                    </a>
                                                <?php }?>
                                                <a class="" target="_blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leoslideshow&&exportGroup=1&id_group=<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_leoslideshow_groups']);?>
">
                                                    <i class="icon-archive"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export Group and sliders','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                                                </a>
                                                                                                <a class="" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leoslideshow&editgroup=1&copylang=1&id_group=<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_leoslideshow_groups']);?>
">
                                                    <i class="icon-edit"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Copy default language to other','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>				
                            </td>
                            <td>
                                <a class="btn btn-default color_success" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leoslideshow&showsliders=1&id_group=<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_leoslideshow_groups']);?>
"><i class="icon-film"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manages Sliders','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
                            </td>
                        </tr> 
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
            <table class="table">
                <thead>
                    <tr class="nodrag nodrop">
                        <th class="center fixed-width-xs"></th>
                        <th class="">
                            <span class="title_box ">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import Group','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class=" odd">
                        <td colspan="2" style="margin-top:10px;padding:10px">
                            <form method="post" enctype="multipart/form-data" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leoslideshow&importGroup=1">
                                <div class="row">
                                        <div class="form-group">
                                                
                                                <input type="file" class="hide" name="import_file" id="import_file">
                                                <div class="dummyfile input-group">
                                                        <span class="input-group-addon"><i class="icon-file"></i></span>
                                                        <input type="text" readonly="" name="filename" class="disabled" id="import_file-name">
                                                        <span class="input-group-btn">
                                                                <button class="btn btn-default" name="submitAddAttachments" type="button" id="import_file-selectbutton">
                                                                        <i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                                                                </button>
                                                        </span>
                                                </div>
                                                <p class="help-block color_danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please upload *.txt only','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</p>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4" for="title_group">
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Overide group or not:','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                                            </label>
                                            <div class="input-group col-lg-3">
                                                    <span class="switch prestashop-switch">
                                                                                                                                                            <input type="radio" value="1" id="override_group_on" name="override_group">
                                                            <label for="override_group_on">
                                                                                                                                                                                    <i class="icon-check-sign color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                                                                                                                                                                    </label>
                                                                                                                                                            <input type="radio" checked="checked" value="0" id="override_group_off" name="override_group">
                                                            <label for="override_group_off">
                                                                                                                                                                                    <i class="icon-ban-circle color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                                                                                                                                                                    </label>
                                                                                                                                                            <a class="slide-button btn btn-default"></a>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
						<div class="col-lg-12">
							<button class="btn btn-default dash_trend_right" name="importGroup" id="import_file_submit_btn" type="submit">
								 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

							</button>
													</div>
					</div>                                                                                                                            
                                </div>
                            </form>
                        </td>
                    </tr> 
                </tbody>
            </table>
        </div>
    </div>
</fieldset>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {
        //import export fix
        $('#import_file-selectbutton').click(function(e){
                $('#import_file').trigger('click');
        });
        $('#import_file').change(function(e){
                var val = $(this).val();
                var file = val.split(/[\\/]/);
                $('#import_file-name').val(file[file.length-1]);
        });
        $('#import_file_submit_btn').click(function(e){
            if($("#import_file-name").val().indexOf(".txt") != -1){
                if($("override_group_on").is(":checked")) return confirm("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure to override group?','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
");
                return true;
            }else{
                alert("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please upload txt file','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
");
                $('#import_file').val("");
                $('#import_file-name').val("");
                return false;
            }
	});		
        
        $(".group-preview").click(function() {
            eleDiv = $(this).parent().parent().parent();
            if ($(eleDiv).hasClass("open"))
                eleDiv.removeClass("open");

            var url = $(this).attr("href") + "&content_only=1";
            $('#dialog').remove();
            $('#content').prepend('<div id="dialog" style="padding: 3px 0px 0px 0px;"><iframe name="iframename2" src="' + url + '" style="padding:0; margin: 0; display: block; width: 100%; height: 100%;" frameborder="no" scrolling="auto"></iframe></div>');
            $('#dialog').dialog({
                title: 'Preview Management',
                close: function(event, ui) {

                },
                bgiframe: true,
                width: 1024,
                height: 780,
                resizable: false,
                draggable:false,
                modal: true
            });
            return false;
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
