<?php
/* Smarty version 3.1.33, created on 2019-08-30 02:05:16
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\appagebuilder\views\templates\admin\ap_page_builder_images\imagemanager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d68bc9c855982_62446862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77d7ea5534ba99ceb9111ada0085b664aaa4b4b7' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_images\\imagemanager.tpl',
      1 => 1553162592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68bc9c855982_62446862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\xampp\\htdocs\\prestashop\\at_undu\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_images\imagemanager -->
<?php if (isset($_smarty_tpl->tpl_vars['url_param']->value) && $_smarty_tpl->tpl_vars['url_param']->value) {?>
    
<?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('url_param', '');
}?>

<?php if (isset($_smarty_tpl->tpl_vars['reloadBack']->value) && $_smarty_tpl->tpl_vars['reloadBack']->value == 1) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
		<div style="background:url('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['link'],'html','UTF-8' ));?>
') no-repeat center center;" class="pull-left" data-image="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['link'],'html','UTF-8' ));?>
" data-val="../../../../assets/img/patterns/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['name'],'html','UTF-8' ));?>
">

		</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else {
if (!(isset($_smarty_tpl->tpl_vars['reloadSliderImage']->value) && $_smarty_tpl->tpl_vars['reloadSliderImage']->value == 1)) {?>
<div class="bootstrap image-manager">
<div class="panel product-tab">
<h3 class="tab" >
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Images Manager','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

	<span class="badge" id="countImage"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['countImages']->value,'html','UTF-8' ));?>
</span>
	<label class="control-label col-lg-3 file_upload_label">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Format:','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 JPG, GIF, PNG. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filesize:','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( sprintf("%.2f",$_smarty_tpl->tpl_vars['max_image_size']->value),'html','UTF-8' ));?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MB max.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

	</label>
</h3>

<div class="row">
	<div class="form-group">
		<div class="col-lg-12">
			<?php echo $_smarty_tpl->tpl_vars['image_uploader']->value;?>
			<div class="btn-group search-image-group">
				<input type="text" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search image','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="search-image" value="">
				<button type="button" class="btn btn-primary search-bt"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</button>
				<button type="button" class="btn btn-warning clear-search-bt"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</button>
				
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="form-group">
		<ul id="list-imgs">
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, NULL, 'myLoop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
	<li class="image-item" data-image-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['name'],'html','UTF-8' ));?>
">
		<div class="row img-row">
			<a class="label-tooltip img-link" data-widget="<?php if (isset($_smarty_tpl->tpl_vars['widget']->value) && $_smarty_tpl->tpl_vars['widget']->value) {
echo $_smarty_tpl->tpl_vars['widget']->value;
}?>" data-toggle="tooltip" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['link'],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['name'],'html','UTF-8' ));?>
" style="height:70px;overflow: hidden">
				<img class="select-img" data-widget="<?php if (isset($_smarty_tpl->tpl_vars['widget']->value) && $_smarty_tpl->tpl_vars['widget']->value) {
echo $_smarty_tpl->tpl_vars['widget']->value;
}?>" data-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['name'],'html','UTF-8' ));?>
" title="" width="70" alt="" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['link'],'html','UTF-8' ));?>
?t=<?php echo smarty_function_math(array('equation'=>'rand(1000,9999)'),$_smarty_tpl);?>
"/>
			</a>
		 </div>
		<div class="row">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( rtrim($_smarty_tpl->tpl_vars['image']->value['name']),'html','UTF-8' ));?>

		</div>
		<div class="row">
			<a class="fancybox" data-toggle="tooltip" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['link'],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to view','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
">
				<i class="icon-eye-open"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

			</a>
			<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminApPageBuilderImages'),'html','UTF-8' ));?>
&ajax=1&action=deleteimage&imgName=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( rtrim($_smarty_tpl->tpl_vars['image']->value['name']),'html','UTF-8' ));?>
" class="text-danger delete-image" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete Selected Image?','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" onclick="if (confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete Selected Image?','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
')) {
					return deleteImage($(this));
				} else {
					return false;
				}
				;">
				<i class="icon-remove"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

			</a>
		</div>
	</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (!(isset($_smarty_tpl->tpl_vars['reloadSliderImage']->value) && $_smarty_tpl->tpl_vars['reloadSliderImage']->value == 1)) {?>
		</ul>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
var imgManUrl = "<?php echo $_smarty_tpl->tpl_vars['imgManUrl']->value;?>
";
var img_dir = "<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
";
var upbutton = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload an image','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
";

	$(document).ready(function() {
		$('.fancybox').fancybox();	
		
		//DONGND:: search image by name
		$(".search-image").keyup(function(){		
			var filter = $(this).val();	
			$(".image-item").each(function(){		
				if ($(this).data('image-name').search(new RegExp(filter, "i")) < 0) {
					$(this).hide();
				} else {
					$(this).show();
				}
			});
		 });
		
		//DONGND:: clear search image by name
		$('.clear-search-bt').click(function(){
			$(".search-image").val('').trigger('keyup');
		});
			
		//DONGND:: search image by name	with button
		$('.search-bt').click(function(){
			$(".search-image").trigger('keyup');
		});
		
		//DONGND:: add dir to filter
		$("#img_order a").each(function(){
			$(this).data('dir', img_dir);
		});
	});

	function deleteImage(element){
		$.ajax({
			type: 'GET',
			url: element.attr("href"),
			data: '',
			dataType: 'json',
			cache: false, // @todo see a way to use cache and to add a timestamps parameter to refresh cache each 10 minutes for example
			success: function(data) {
				 $("#list-imgs").html(data);
				 $("#countImage").text($("#list-imgs li").length);
				 $('.label-tooltip').tooltip();
				 $('.fancybox').fancybox();
			}
		});

		return false;
	}

	function getUrlVars()
	{
		var vars = [], hash;
		var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
		for(var i = 0; i < hashes.length; i++)
		{
			hash = hashes[i].split('=');
			vars.push(hash[0]);
			vars[hash[0]] = hash[1];
		}
		return vars;
	}

	function reloadImageList(sortBy, imgDir){
		if(!sortBy) sortBy = "date_add";
		if(!imgDir) sortBy = "images";
		$.ajax({
			type: 'GET',
			url: imgManUrl + '&ajax=1&action=reloadSliderImage&imgDir='+imgDir+'&sortBy='+sortBy+'<?php echo $_smarty_tpl->tpl_vars['url_param']->value;?>
',
			data: '',
			dataType: 'json',
			cache: false, // @todo see a way to use cache and to add a timestamps parameter to refresh cache each 10 minutes for example
			success: function(data)
			{
				 $("#list-imgs").html(data);
				 $('.label-tooltip').tooltip();
				 $('.fancybox').fancybox();
			}
		});
	}
<?php echo '</script'; ?>
>
</div>
</div>
<?php }
}
}
}
