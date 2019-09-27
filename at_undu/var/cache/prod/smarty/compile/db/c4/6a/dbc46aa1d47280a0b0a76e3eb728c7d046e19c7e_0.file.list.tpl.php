<?php
/* Smarty version 3.1.33, created on 2019-09-03 23:28:10
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\appagebuilder\views\templates\admin\ap_page_builder_profiles\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6f2f4ab4bfe0_96523478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbc46aa1d47280a0b0a76e3eb728c7d046e19c7e' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_profiles\\list.tpl',
      1 => 1547087527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6f2f4ab4bfe0_96523478 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_profiles\list -->
<?php $_smarty_tpl->_assignInScope('id_default', 0);
if (isset($_smarty_tpl->tpl_vars['list_profile']->value) && $_smarty_tpl->tpl_vars['list_profile']->value) {?>
	<ul class="source-profile hidden">
	<?php $_smarty_tpl->_assignInScope('nameProfile', '');?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_profile']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['item']->value['active'] == 1) {?>active<?php }?>">=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['id_appagebuilder_profiles'],'html','UTF-8' ));?>
</li>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['active'] == 1) {?>
		<?php $_smarty_tpl->_assignInScope('id_default', $_smarty_tpl->tpl_vars['item']->value['id_appagebuilder_profiles']);?>
		<?php $_smarty_tpl->_assignInScope('nameProfile', $_smarty_tpl->tpl_vars['item']->value['name']);?>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
	<div id="cover-live-iframe" class="">
		<div class="ap-live-tool"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mode Live Edit','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 <span id="name-profile"><?php if ($_smarty_tpl->tpl_vars['nameProfile']->value) {?> for <b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['nameProfile']->value,'html','UTF-8' ));?>
</b><?php }?></span>&nbsp;
			<a href="javascript:;" id="btn-change-mode" class="label-tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expand/Compress','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" data-placement="left"><i class="icon-expand"></i></a>
			<a href="javascript:;" id="btn-reload-live" class="label-tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reload content','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" data-placement="left"><i class="icon-refresh"></i></a>
			<a href="javascript:;" id="btn-preview" class="label-tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview this profile','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" data-placement="left"><i class="icon-zoom-in"></i></a>
			<a href="javascript:;" id="btn-design-layout" class="label-tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mode design layout','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" data-placement="left"><i class="icon-desktop"></i></a>
		</div>
		<iframe id="live-edit-iframe" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_live_edit']->value,'html','UTF-8' ));
if ($_smarty_tpl->tpl_vars['id_default']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_default']->value,'html','UTF-8' ));
}?>" 
				idProfile="<?php if ($_smarty_tpl->tpl_vars['id_default']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_default']->value,'html','UTF-8' ));
}?>">
		</iframe>
	</div>
<div id="ap_loading" class="ap-loading">
    <div class="spinner">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('urlLiveEdit'=>$_smarty_tpl->tpl_vars['url_live_edit']->value),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('urlPreview'=>$_smarty_tpl->tpl_vars['url_preview']->value),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('urlEditProfile'=>$_smarty_tpl->tpl_vars['url_edit_profile']->value),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('urlProfileDetail'=>$_smarty_tpl->tpl_vars['url_profile_detail']->value),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('urlEditProfileToken'=>$_smarty_tpl->tpl_vars['url_edit_profile_token']->value),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idProfile'=>$_smarty_tpl->tpl_vars['id_default']->value),$_smarty_tpl ) );?>

	function resize() {
		//$("#live-edit-iframe").width($(window).width() - 80);
		$("#live-edit-iframe").height($("body").height() - 
				$("#header_infos").height() - $(".page-head").height() - 
				$("#form-appagebuilder_profiles").height() - $(".ap-live-tool").height() - 
				$("#footer").height() - 80 - ($(".bootstrap .alert").length > 0 ? ($(".bootstrap .alert").height() + 20) : 0));
		
	}
	function changeProfilePreview(obj) {
		$("#ap_loading").show();
		if($('.table-responsive-row .row-selector').length){
			var td = $(obj).closest("tr").find("td:nth-child(2)");
			var tdName = $(obj).closest("tr").find("td:nth-child(3)");
		}else{
			var td = $(obj).closest("tr").find("td:nth-child(1)");
			var tdName = $(obj).closest("tr").find("td:nth-child(2)");
		}
		
		var d = new Date();
		idProfile = $.trim($(td).text());
		$("#name-profile b").text($.trim($(tdName).text()));
		$("#live-edit-iframe").attr("idProfile", idProfile);
		$("#live-edit-iframe").attr("src", urlLiveEdit + "&ap_edit_token=" + urlEditProfileToken + "&id_appagebuilder_profiles=" + idProfile + "&t=" + d.getTime());
	}
	$(function() {
		// Add button preview, tooltip for row
		totalTr = $(".appagebuilder_profiles tbody tr").length;
		$(".appagebuilder_profiles tbody tr").each(function() {
			$(this).attr("title", "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When you click any profiles in profile list, this will be shown at the same screen below in mode live edit','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
");
			// Add button preview
			if(totalTr <=1)
					var idProfile = $.trim($(this).find("td:nth-child(1)").text());
			else
				var idProfile = $.trim($(this).find("td:nth-child(2)").text());
                        
                        var url = urlProfileDetail + "&submitBulkinsertLangappagebuilder_profiles&id=" + idProfile;
			$(this).find(".pull-right ul").prepend("<li><a title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Copy data from default language to other','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
' href='" + url + "'><i class='icon-copy'></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Copy to Other Language','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a></li>");
                        
			url = urlEditProfile + "&id_appagebuilder_profiles=" + idProfile;
			$(this).find(".pull-right ul").prepend("<li><a title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit in mode design layout','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
' target='_blank' href='" + url + "'><i class='icon-desktop'></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Design Layout','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a></li>");
                        
                        
                        
			url = urlPreview + "?id_appagebuilder_profiles=" + idProfile;
			$(this).find(".pull-right ul").prepend("<li><a title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
' target='_blank' href='" + url + "'><i class='icon-search-plus'></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a></li>");
		});
		$(".appagebuilder_profiles tbody tr").tooltip();
		//$("#ap_loading").show();
		$(window).resize(function() {
			resize();
		});
		var d = new Date();
		if($('.table-responsive-row .row-selector').length){
			var listTd = ".appagebuilder_profiles tr td:nth-child(2)," + 
				".appagebuilder_profiles tr td:nth-child(3), .appagebuilder_profiles tr td:nth-child(4)";
		}else{
			var listTd = ".appagebuilder_profiles tr td:nth-child(1)," + 
				".appagebuilder_profiles tr td:nth-child(2), .appagebuilder_profiles tr td:nth-child(3)";
		}
		$("#live-edit-iframe").attr("src", urlLiveEdit + "&ap_edit_token=" + urlEditProfileToken + "&id_appagebuilder_profiles=" + idProfile + "&t=" + d.getTime());
		
		$(listTd).each(function() {
			$(this).attr("onclick", "return changeProfilePreview(this);");
		});
		$("#btn-reload-live").click(function() {
			$("#ap_loading").show();
			var d = new Date();	
			$("#live-edit-iframe").attr("src", urlLiveEdit + "&ap_edit_token=" + urlEditProfileToken + "&id_appagebuilder_profiles=" + idProfile + "&t=" + d.getTime());
		});
		$("#btn-preview").click(function() {
			window.open(urlPreview + "?id_appagebuilder_profiles=" + idProfile, "_blank");
		});
		$("#btn-design-layout").click(function() {
			window.open(urlEditProfile + "&id_appagebuilder_profiles=" + idProfile, "_blank");
		});
		$("#btn-change-mode").click(function() {
			if($(this).hasClass("full-screen")) {
				$("#cover-live-iframe").removeClass("full-screen");
				$(this).removeClass("full-screen");
				$(this).find("i").attr("class", "icon-expand");
			} else {
				$("#cover-live-iframe").addClass("full-screen");
				$(this).addClass("full-screen");
				$(this).find("i").attr("class", "icon-compress");
			}
		});
		$("#live-edit-iframe").load(function() {
			$("#ap_loading").hide();
		});
		$("body").addClass("page-sidebar-closed");
		resize();
	});
<?php echo '</script'; ?>
>
<?php } else { ?>
	<hr/>
	<center><p><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile_link']->value,'html','UTF-8' ));?>
" class="btn btn btn-primary"><i class="icon-file-text"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create first Profile >>','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
	</p></center>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(function() {
			$(".appagebuilder_profiles td:first-child").attr("colspan", $(".appagebuilder_profiles th").length);
		});
	<?php echo '</script'; ?>
>
<?php }
}
}
