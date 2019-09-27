<?php
/* Smarty version 3.1.33, created on 2019-09-27 05:17:43
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\leoslideshow\views\templates\admin\leo_slideshow\imagemanager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8dd3b76fea11_83562105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82055fcb4c789a58ed671d209998e753a9e48048' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\leoslideshow\\views\\templates\\admin\\leo_slideshow\\imagemanager.tpl',
      1 => 1551685753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8dd3b76fea11_83562105 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['reloadSliderImage']->value) && $_smarty_tpl->tpl_vars['reloadSliderImage']->value == 1)) {?>
<div class="panel product-tab">
<h3 class="tab" >
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Images Manager','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

    <span class="badge" id="countImage"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['countImages']->value,'html','UTF-8' ));?>
</span>
    <label class="control-label col-lg-3 file_upload_label">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Format:','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
 JPG, GIF, PNG. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filesize:','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( sprintf("%.2f",$_smarty_tpl->tpl_vars['max_image_size']->value),'html','UTF-8' ));?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MB max.','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

    </label>
</h3>

<div class="row">
    <div class="form-group">
        <div class="col-lg-12">
            <?php echo $_smarty_tpl->tpl_vars['image_uploader']->value;?>
        </div>
    </div>
</div>
    
<div class="row">
    <div class="form-group">
        <ul id="list-imgs">
<?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, NULL, 'myLoop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
            <li><div class="row img-row">
                    <a class="label-tooltip img-link" onclick="selectImage('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['name'],'html','UTF-8' ));?>
')" data-toggle="tooltip" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['link'],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['name'],'html','UTF-8' ));?>
" style="height:70px;overflow: hidden">
                        <img class="select-img" data-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['name'],'html','UTF-8' ));?>
" title="" width="70" alt="" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['link'],'html','UTF-8' ));?>
"/>
                    </a>
                 </div>
                <div class="row">
                    <a class="fancybox" data-toggle="tooltip" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['link'],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to view','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
">
                        <i class="icon-eye-open"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                    </a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminLeoSlideshow');?>
&imgName=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['name'],'html','UTF-8' ));?>
" class="text-danger delete-image" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete Selected Image?','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
" onclick="if (confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete Selected Image?','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
')) {
                            return deleteImage($(this));
                        } else {
                            return false;
                        }
                        ;">
                        <i class="icon-remove"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                    </a>
                </div></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (!(isset($_smarty_tpl->tpl_vars['reloadSliderImage']->value) && $_smarty_tpl->tpl_vars['reloadSliderImage']->value == 1)) {?>
        </ul>
    </div>
    <div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you can not update Image. Please set permission 755 for folder','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['imgUploadDir']->value;?>
</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
var upbutton = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload an image','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
";
var imgManUrl = "<?php echo $_smarty_tpl->tpl_vars['imgManUrl']->value;?>
"; // escape_html : wrong url to order image

    $(document).ready(function(){
        $('.fancybox').fancybox();
        
    });
    $(".img-link").click(function(){
       return false;
    });
    function selectImage(url){
        if(url != ''){
            urlTarget = getUrlVars();
            
            if(urlTarget["field"]){
              element = decodeURI(urlTarget["field"].replace(/&/g, "\",\"").replace(/=/g,"\":\""));
              parent.$("#"+element, window.parent.document).val(url);
            }else{
              parent.$("#slider-image_"+urlTarget["lang_id"], window.parent.document).val(url);
            }
            parent.$("#dialog", window.parent.document).dialog('close');
        }
        return false;
    }
    
    function deleteImage(element){
        $.ajax({
            type: 'GET',
            url: element.attr("href") + '&reloadSliderImage=1&sortBy=name',
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

<?php echo '</script'; ?>
>
<?php }
}
}
