<?php
/* Smarty version 3.1.33, created on 2019-09-27 05:17:43
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\leoslideshow\views\templates\admin\helpers\uploader\ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8dd3b769cf96_03178620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34e642463a7105ad4556dd83826cbb0db3ac60ab' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\leoslideshow\\views\\templates\\admin\\helpers\\uploader\\ajax.tpl',
      1 => 1551685752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8dd3b769cf96_03178620 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group" style="display: none;">
	<div class="col-lg-12" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-images-thumbnails">
		<?php if (isset($_smarty_tpl->tpl_vars['files']->value) && count($_smarty_tpl->tpl_vars['files']->value) > 0) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['files']->value, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
		<?php if (isset($_smarty_tpl->tpl_vars['file']->value['image']) && $_smarty_tpl->tpl_vars['file']->value['type'] == 'image') {?>
		<div class="img-thumbnail text-center">
			<p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value['image'],'html','UTF-8' ));?>
</p>
			<?php if (isset($_smarty_tpl->tpl_vars['file']->value['size'])) {?><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'File size','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value['size'],'html','UTF-8' ));?>
kb</p><?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['file']->value['delete_url'])) {?>
			<p>
				<a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value['delete_url'],'html','UTF-8' ));?>
">
				<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

				</a>
			</p>
			<?php }?>
		</div>
		<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
	</div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['max_files']->value) && count($_smarty_tpl->tpl_vars['files']->value) >= $_smarty_tpl->tpl_vars['max_files']->value) {?>
<div class="row">
	<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have reached the limit (%s) of files to upload, please remove files to continue uploading','mod'=>'leoslideshow','sprintf'=>$_smarty_tpl->tpl_vars['max_files']->value),$_smarty_tpl ) );?>
</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$( document ).ready(function() {
		<?php if (isset($_smarty_tpl->tpl_vars['files']->value) && $_smarty_tpl->tpl_vars['files']->value) {?>
		$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-images-thumbnails').parent().show();
		<?php }?>
	});
<?php echo '</script'; ?>
>
<?php } else { ?>
<div class="form-group">
	<div class="col-lg-12">
		<input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
" type="file" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
[]"<?php if (isset($_smarty_tpl->tpl_vars['url']->value)) {?> data-url="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url']->value,'html','UTF-8' ));?>
"<?php }
if (isset($_smarty_tpl->tpl_vars['multiple']->value) && $_smarty_tpl->tpl_vars['multiple']->value) {?> multiple="multiple"<?php }?> class="hide" />
		<button class="btn btn-default" data-style="expand-right" data-size="s" type="button" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-add-button">
			<i class="icon-plus-sign"></i> <?php if (isset($_smarty_tpl->tpl_vars['multiple']->value) && $_smarty_tpl->tpl_vars['multiple']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add files','mod'=>'leoslideshow'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add file','mod'=>'leoslideshow'),$_smarty_tpl ) );
}?>
		</button>
		<button class="ladda-button btn btn-default" data-style="expand-right" type="button" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-upload-button" style="display:none;">
			<i class="icon-cloud-upload text-success"></i> <span class="ladda-label text-success"><?php if (isset($_smarty_tpl->tpl_vars['multiple']->value) && $_smarty_tpl->tpl_vars['multiple']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload files','mod'=>'leoslideshow'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload file','mod'=>'leoslideshow'),$_smarty_tpl ) );
}?></span>
		</button>
                <!-- Split button -->
                <div class="btn-group">
                <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Image By','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
 <span class="caret"></span>
                </button>
                <ul id="img_order" class="dropdown-menu">
                    <li><a href="javascript:void(0);" data-type="name"><span class="text-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
 <i class="icon-sort-by-alphabet"></i></span></a></li>
                    <li><a href="javascript:void(0);" data-type="name_desc"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name DESC','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
 <i class="icon-sort-by-alphabet-alt"></i></span></a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0);" data-type="date"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date Modified','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
 <i class="icon-sort-by-attributes"></i></span></a></li>
                    <li><a href="javascript:void(0);" data-type="date_desc"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date Modified DESC','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
 <i class="icon-sort-by-attributes-alt"></i></span></a></li>
                  </ul>
                </div>
	</div>
</div>
<div class="row" style="display:none">
	<div class="alert alert-info" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-files-list"></div>
</div>
<div class="row" style="display:none">
	<div class="alert alert-success" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-success"></div>
</div>
<div class="row" style="display:none">
	<div class="alert alert-danger" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-errors"></div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	function humanizeSize(bytes)
	{
		if (typeof bytes !== 'number') {
			return '';
		}

		if (bytes >= 1000000000) {
			return (bytes / 1000000000).toFixed(2) + ' GB';
		}

		if (bytes >= 1000000) {
			return (bytes / 1000000).toFixed(2) + ' MB';
		}

		return (bytes / 1000).toFixed(2) + ' KB';
	}
        
        function reloadImageList(sortBy){
                if(!sortBy) sortBy = "date_add";
                $.ajax({
                    type: 'GET',
                    url: imgManUrl + '&reloadSliderImage=1&sortBy='+sortBy,
                    data: '',
                    dataType: 'json',
                    cache: false, // @todo see a way to use cache and to add a timestamps parameter to refresh cache each 10 minutes for example
                    success: function(json)
                    {
                        if (json && json.hasError == true){
                            alert(json.errors);
                        }else{
                            $("#list-imgs").html(json);
                            $('.label-tooltip').tooltip();
                            $('.fancybox').fancybox();
                        }
                    }
                });
        }
        
	$( document ).ready(function() {
		$("#img_order a").click(function(){
                    reloadImageList($(this).attr("data-type"));
                    $("#img_order a span").removeClass("text-danger");
                    $(this).find("span").addClass("text-danger");
                });
                
                <?php if (isset($_smarty_tpl->tpl_vars['multiple']->value) && isset($_smarty_tpl->tpl_vars['max_files']->value)) {?>
			var <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
_max_files = <?php echo count($_smarty_tpl->tpl_vars['max_files']->value-$_smarty_tpl->tpl_vars['files']->value);?>
;
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['files']->value) && $_smarty_tpl->tpl_vars['files']->value) {?>
		$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-images-thumbnails').parent().show();
		<?php }?>

		var <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
_upload_button = Ladda.create( document.querySelector('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-upload-button' ));
		var <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
_total_files = 0;

		$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
').fileupload({
			dataType: 'json',
			autoUpload: false,
			singleFileUploads: true,
			<?php if (isset($_smarty_tpl->tpl_vars['post_max_size']->value)) {?>maxFileSize: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_max_size']->value,'html','UTF-8' ));?>
,<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['drop_zone']->value)) {?>dropZone: <?php echo $_smarty_tpl->tpl_vars['drop_zone']->value;?>
,<?php }?>			start: function (e) {
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
_upload_button.start();
				$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-upload-button').unbind('click'); //Important as we bind it for every elements in add function
			},
			fail: function (e, data) {
				$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-errors').html(data.errorThrown.message).parent().show();
			},
			done: function (e, json) {
                            
                            if (json.result && json.result.hasError == true){
                                alert(json.result.errors);
                            }else if (json.result) {
                                $("#list-imgs").html(json.result);
                                $('.label-tooltip').tooltip();
                                $('.fancybox').fancybox();
                                $("#file").val("");
                                $("#file-files-list").html("");
                                $("#file-upload-button").hide();
                                $(json.context).find('button').remove();					
                            }
			},
		}).on('fileuploadalways', function (e, data) {
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
_total_files--;

				if (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
_total_files == 0)
				{
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
_upload_button.stop();
					$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-upload-button').unbind('click');
					$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-files-list').parent().hide();
				}
		}).on('fileuploadadd', function(e, data) {
			if (typeof <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
_max_files !== 'undefined') {
				if (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
_total_files >= <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
_max_files) {
					e.preventDefault();
					alert('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('You can upload a maximum of %s files',$_smarty_tpl->tpl_vars['max_files']->value),'mod'=>'leoslideshow'),$_smarty_tpl ) );?>
');
					return;
				}
			}

			data.context = $('<div/>').addClass('row').appendTo($('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-files-list'));
			var file_name = $('<span/>').append('<strong>'+data.files[0].name+'</strong> ('+humanizeSize(data.files[0].size)+')').appendTo(data.context);

			var button = $('<button/>').addClass('btn btn-default pull-right').prop('type', 'button').html('<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove file','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
').appendTo(data.context).on('click', function() {
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
_total_files--;
				data.files = null;
				
				var total_elements = $(this).parent().siblings('div.row').length;
				$(this).parent().remove();

				if (total_elements == 0) {
					$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-files-list').html('').parent().hide();
				}
			});

			$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-files-list').parent().show();
			$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-upload-button').show().bind('click', function () {
				if (data.files != null)
					data.submit();						
			});

			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
_total_files++;
		}).on('fileuploadprocessalways', function (e, data) {
			var index = data.index,	file = data.files[index];
			
			if (file.error) {
				$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-errors').append('<div class="row"><strong>'+file.name+'</strong> ('+humanizeSize(file.size)+') : '+file.error+'</div>').parent().show();
				$(data.context).find('button').trigger('click');
			}
		});

		$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-add-button').on('click', function() {
			$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-success').html('').parent().hide();
			$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-errors').html('').parent().hide();
			$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-files-list').parent().hide();
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
_total_files = 0;
			$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
').trigger('click');
		});
	});
<?php echo '</script'; ?>
>
<?php }
}
}
