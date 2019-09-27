<?php
/* Smarty version 3.1.33, created on 2019-09-03 23:26:06
  from 'W:\xampp\htdocs\prestashop\at_undu\modules\leoslideshow\views\templates\hook\slider_editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6f2ece09d9e0_76283320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52550b40880390f42148321855eed6a2f9f60387' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\modules\\leoslideshow\\views\\templates\\hook\\slider_editor.tpl',
      1 => 1551685753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6f2ece09d9e0_76283320 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset>
<div class="form-group">
    <div class="col-lg-9 col-lg-offset-3">
        <a class="btn btn-default dash_trend_right" href="javascript:void(0)" onclick="return $('#module_form').submit();"><i class="icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save Slider','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
        <a id="btn-preview-slider" class="btn btn-default <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>dropdown-toggle <?php } else { ?>slider-preview <?php }?>color_danger" herf="javascript:void(0);" data-link="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['previewLink']->value,'html','UTF-8' ));?>
&id_group=<?php echo intval($_smarty_tpl->tpl_vars['id_group']->value);?>
"><i class="icon-eye-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview This Slider','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
    </div>
</div>

<div class="col-lg-1">
<div class="slider-toolbar">
    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tools Action','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</h4>
    <ul>
        <li>
            <div class="btn-create" href="#" data-action="add-image">
                <i class="icon-picture"></i><br/><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Image','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

            </div></li>
        <li><div class="btn-create" href="#" data-action="add-video">
                <i class="icon-youtube-play"></i><br/><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Video','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

            </div></li>
        <li><div class="btn-create" href="#" data-action="add-text">
                <i class="icon-text-width"></i><br/><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Text','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

            </div></li>
    </ul>
    <div class="btn-delete" data-action="delete-layer"><i class="icon-remove"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</div>
</div>
</div>
<div class="col-lg-11">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leoslideshow&leoajax=1&ajax=1&action=submitslider" method="post" enctype="multipart/form-data" class="slider-form" id="slider-form_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
">
    <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
        <div class="translatable-field lang-<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
 form-language" data-action="<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['id_language']->value) {?>style="display:none"<?php }?>>
            <div class="col-lg-12">
                <div class="col-lg-10"></div>
                <div class="col-lg-2">
                <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                    <?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu language-select">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
                        <li data-id-lang="<?php echo intval($_smarty_tpl->tpl_vars['lang']->value['id_lang']);?>
"><a href="javascript:hideOtherLanguage(<?php echo intval($_smarty_tpl->tpl_vars['lang']->value['id_lang']);?>
);" tabindex="-1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'html','UTF-8' ));?>
</a></li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                </div>
            </div>
        <?php }?>
        <div class="col-lg-12">
            <div class="form-group layers-wrapper clearfix" id="slider-toolbar_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
">
            <div class="back-ground">
				<div class="title-back">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'BackGround','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

				</div>
				<div class="col-md-6">
					<a href="javascript:void(0)" class="btn btn-default btn-update-slider">
						<i class="icon-upload"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set Background Image','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

					</a>
					<a href="javascript:void(0)" class="btn btn-default btn-remove-backurl" style="color:red">
						<i class="icon-remove"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

					</a>
				</div>
				<div class="col-md-6">
					<div class="col-md-4">
						<lable><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Background Color','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
:</lable>
					</div>
					<div class="col-md-3">
						<div class="input-group">
							<input type="color" data-hex="true" class="slider-backcolor color mColorPickerInput" data-lang="<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['sliderBack']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderBack']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8' ));
}?>" />
						</div>
					</div>
				</div>
			</div>    
            <div class="slider-layers bannercontainer">
                
                <div class="slider-editor-wrap" id="slider-editor-wrap_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" style="width:<?php echo intval($_smarty_tpl->tpl_vars['sliderGroup']->value['width']);?>
px;height:<?php if ($_smarty_tpl->tpl_vars['sliderGroup']->value['fullwidth'] == "fullscreen") {
echo intval($_smarty_tpl->tpl_vars['sliderGroup']->value['height']+200);
} else {
echo intval($_smarty_tpl->tpl_vars['sliderGroup']->value['height']);
}?>px">
                    <div class="simage">
                        <img src="<?php if (isset($_smarty_tpl->tpl_vars['slideImg']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]) && $_smarty_tpl->tpl_vars['slideImg']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']] != '') {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psBaseModuleUri']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slideImg']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8' ));
}?>" alt=""/>
                    </div>
                    <div class="slider-editor" id="slider-editor_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" style="width:<?php echo intval($_smarty_tpl->tpl_vars['sliderGroup']->value['width']);?>
px;height:<?php if ($_smarty_tpl->tpl_vars['sliderGroup']->value['fullwidth'] == "fullscreen") {
echo intval($_smarty_tpl->tpl_vars['sliderGroup']->value['height']+200);
} else {
echo intval($_smarty_tpl->tpl_vars['sliderGroup']->value['height']);
}?>px">

                    </div>
                </div>
                <div class="layer-video-inpts dialog-video" id="dialog-video_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
">
                    <table class="form">
                        <tr>
                            <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video Type','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</td>
                            <td>
                                <select name="layer_video_type" id="layer_video_type_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
">
                                    <option value="youtube">Youtube</option>
                                    <option value="vimeo">Vimeo</option>
                                </select>	
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video ID','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</td>
                            <td><input name="layer_video_id" type="text" id="dialog_video_id_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
">
                                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'for example youtube','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
: <b>VA770wpLX-Q</b> and vimeo: <b>17631561</b> </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Height','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</label>
                                <input name="layer_video_height" type="text" value="200">
                                <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Width','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</label>
                                <input name="layer_video_width" type="text" value="300">

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="hidden" name="layer_video_thumb" id="layer_video_thumb_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
">
                                <div class="buttons">
                                    <div class="btn layer-find-video"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Find Video','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</div>
                                    <div class="btn layer-apply-video apply_this_video" id="apply_this_video_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" style="display:none;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use This Video','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</div>
                                    <div class="btn layer-close-video btn-green"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</div>
                                </div>
                            </td>
                        </tr>	
                    </table>
                    <div id="video-preview_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
"></div>
                </div>
                <div class="slider-foot">
                    <div class="layer-collection-wrapper">
                        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layer Collection','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</h4>
                        <div class="layer-collection" id="layer-collection_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
"></div>	
                    </div>
                </div>
                <div class="layer-form" id="layer-form_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
">
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Layer Data','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</h4>
                    <input type="hidden" class="layer_id" id="layer_id_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" name="layer_id"/>
                    <input type="hidden" class="layer_content" id="layer_content_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" name="layer_content"/>
                    <input type="hidden" class="layer_type" id="layer_type_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" name="layer_type"/>
                    <input type="hidden" class="layer_type" id="layer_status_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" name="layer_status"/>

                    <table class="form" style="width:100%">
                        <tr>
                            <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Class Style','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</td>
                            <td>

                                <input type="text" class="layer_class" name="layer_class" id="input-layer-class_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
"/>
                                <span class="buttons">
                                    <span class="btn btn-typo btn-insert-typo" id="btn-insert-typo_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Insert Typo','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</span>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Caption Html','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</td>
                            <td>
                                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Allow insert html code','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</p>
                                <textarea style="height:60px" class="input-slider-caption" name="layer_caption" id="input-slider-caption_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" data-for="caption-layer" ></textarea>
                                
                                <table class="text-attr">
                                    <tr>
                                        <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'font-size','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</td>
                                        <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Background Color','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</td>
                                        <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text Color','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="layer_font_size" class="layer_font_size">
                                                <option value="" selected="selected"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Auto','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</option>
                                                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 200+1 - (9) : 9-(200)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 9, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                                                <option value="<?php echo intval($_smarty_tpl->tpl_vars['foo']->value);?>
px"><?php echo intval($_smarty_tpl->tpl_vars['foo']->value);?>
px</option>
                                                <?php }
}
?>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <input type="color" data-hex="true" name="layer_background_color" class="layer_background_color color mColorPickerInput" value=""/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <input type="color" data-hex="true" name="layer_color" class="layer_color color mColorPickerInput" value=""/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><br/></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Link','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</td>
                            <td>
                                <input type="text" class="layer_link" name="layer_link" id="layer_link_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
">
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open in','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</td>
                            <td>
								<select class="fixed-width-xl" name="layer_target">
									<option value="same">Same Window</option>
									<option value="new">New Window</option>
								</select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                            </td>
                            <td>
                                <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
:</label><input size="3" type="text" class="layer_top" name="layer_top" id="layer_top_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
">
                                <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Left','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
:</label><input size="3" type="text" class="layer_left" name="layer_left" id="layer_left_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
">
                        </tr>
                        <tr>
                            <td colspan="2"><hr></td>
                        </tr>
                    </table>
                    <div class="other-effect">
                        <table class="form" style="width:100%">
                            <tr>
                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Transition','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</td>
                                <td>
                                    <select type="text" class="layer_transition" name="layer_transition" id="layer_transition_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
"> 
										<option selected="selected" value="fade"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fade','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</option>
                                        <option value="wipeleft"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wipe Left','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</option>
                                        <option value="wiperight"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wipe Right','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</option>
                                        <option value="wipeup"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wipe Top','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</option>
                                        <option value="wipedown"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wipe Bottom','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</option>
                                        <option value="expandleft"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expand Left','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</option>
                                        <option value="expandright"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expand Right','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</option>
                                        <option value="expandup"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expand Top','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</option>
                                        <option value="expanddown"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expand Bottom','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</option>
                                    </select>
                                </td>
                            </tr>	
                        </table>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
        </div>
    <?php }?>
    
</form>    
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<div class="col-lg-12 form-group clearfix">
    <div class="row">
        <div class="col-lg-9 col-lg-offset-3">
            <a class="btn btn-default dash_trend_right" href="javascript:void(0)" onclick="return $('#module_form').submit();"><i class="icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save Slider','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
        </div>
    </div>
</div>


    <?php echo '<script'; ?>
 type="text/javascript"><!--
        var ajaxfilelink = "<?php echo $_smarty_tpl->tpl_vars['ajaxfilelink']->value;?>
";
		var leo_admin_module_link = "<?php echo $_smarty_tpl->tpl_vars['leo_admin_module_link']->value;?>
";
        var title_image = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image Management','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
";
        var psBaseModuleUri = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psBaseModuleUri']->value,'html','UTF-8' ));?>
";
        var txt_input_title = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please input title of slider for all language','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
";
        
        $(".btn-remove-backurl").click(function(){
            var field = 'slider-image_';
            langID = findActiveLang();
            if ($('#' + field + langID).val()) {
                correctLink = "";
                $('#' + field + langID).val(correctLink);
                $("#slider-editor-wrap_"+langID+" .simage").html('');
            }
        });
 
        $(".btn-update-slider").click(function() {
            var field = 'slider-image_';
            $('#dialog').remove();
            $('#content').prepend('<div id="dialog" style="padding: 3px 0px 0px 0px;"><iframe src="'+ajaxfilelink+'&lang_id='+findActiveLang()+'" style="padding:0; margin: 0; display: block; width: 100%; height: 100%;" frameborder="no" scrolling="auto"></iframe></div>');

            $('#dialog').dialog({
                title: title_image,
                close: function(event, ui) {
                    langID = findActiveLang();
                    if ($('#' + field + langID).val()) {
                        correctLink = $('#' + field + langID).val();
                        $('#' + field + langID).val(correctLink);
                        $("#slider-editor-wrap_"+langID+" .simage").html('<img src="' + psBaseModuleUri + correctLink + '">');
                    }
                },
                bgiframe: false,
                width: 1024,
                height: 780,
                resizable: true,
                draggable:false,
                modal: false
            });
        });


        //--><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        $( document ).ready( function(){
            var $leoEditor = $(document).leoSliderEditor(); 
            var SURLIMAGE = '<?php echo $_smarty_tpl->tpl_vars['ajaxfilelink']->value;?>
';
            var delay = '<?php echo intval($_smarty_tpl->tpl_vars['delay']->value);?>
';
            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                $leoEditor.countItem[<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
] = 0;
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
            $leoEditor.process(SURLIMAGE, delay);
            
            <?php if ($_smarty_tpl->tpl_vars['layers']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['layers']->value, 'layer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['layer']->value) {
?>
                    $leoEditor.createList( '<?php echo $_smarty_tpl->tpl_vars['layer']->value['content'];?>
' , <?php echo intval($_smarty_tpl->tpl_vars['layer']->value['langID']);?>
);                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
                
            $('#slider-editor_'+default_language).find('.layer-active').removeClass('layer-active').trigger('click');
            
            $('.language-select li').click(function(){
                $('#slider-editor_'+$(this).data('id-lang')).find('.layer-active').removeClass('layer-active').trigger('click');
            });
            
            $(".btn-actionslider").click(function(){
                var object_e = $(this);
                if($(this).attr("href").indexOf("deleteSlider") != -1) {
                    if(!confirm('Delete Selected Slider?')) return false;
                }
                
                $.ajax({
                    type: "GET",
                    url: $(this).attr("href"),
                    data: {
                        "ajax": 1,
                    },
                    dataType: "json",
                    cache: false
                }).done( function(json) {
                    
                    if (json && json.hasError == true){
                        alert(json.errors);
                    }else{
                        if(json.error == 2) {
                            // duplicate SLIDE
                            $('#content #leo_error').remove();
                            $('#content').prepend(json.text);
    //                      $('body').scrollTo('#content #leo_error');
                            $('body').scrollTo('0');
                        }else if (json.error) {
                            alert(json.text);
                        }else{
                            var id_slide = "&id_slide="+object_e.data('id-slide');
                            if (object_e.hasClass('delete-slide') && window.location.href.indexOf(id_slide) >= 0)
                            {																		
                                window.location.href = window.location.href.replace(id_slide, "").replace("&editSlider=1", "").replace("&conf=3", "").replace("&conf=4", "") + "&showsliders=1&conf=4";							
                            }
                            else
                            {
                                if (window.location.href.indexOf("&conf=4") >= 0)
                                {
                                    location.reload();
                                }
                                else
                                {
                                    if (window.location.href.indexOf("&conf=3") >= 0)
                                    {
                                        window.location.href = window.location.href.replace("conf=3", "conf=4");									
                                    }
                                    else
                                    {
                                        window.location.href = window.location.href + "&conf=4";
                                    }
                                }
                            }
                        }
                    }
                });
                
                return false;          
            });
            
            $(".slider-backcolor").change(function() {
                $(this).closest(".back-ground").next(".slider-layers").find(".simage").first().css("background-color",$(this).val());
            });
            
            $(".slider-backcolor").each(function() {
                if($(this).val())
                $(this).closest(".back-ground").next(".slider-layers").find(".simage").first().css("background-color",$(this).val());
            });
        });


        $(".slider-preview").click(function() {
            var url = $(this).attr("href")+"&content_only=1";
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
        
        function image_upload(field, thumb) {
            $('#dialog').remove();

            $('#content').prepend('<div id="dialog" style="padding: 3px 0px 0px 0px;"><iframe src="'+ajaxfilelink+'&field=' + encodeURIComponent(field) + '" style="padding:0; margin: 0; display: block; width: 100%; height: 100%;" frameborder="no" scrolling="auto"></iframe></div>');

            $('#dialog').dialog({
                    title: title_image,
                    close: function (event, ui) {
                        correctLink = $('#' + field).val();
                        $('#' + field).val(correctLink);
                        $('#' + thumb).attr("src",psBaseModuleUri+correctLink);
                        $('#' + thumb).show();
                    },	
                    bgiframe: false,
                    width: 1024,
                    height: 780,
                    resizable: false,
                    draggable:false,
                    modal: false
            });
        };
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
    function findActiveLang(){
        languageID = $("#current_language").val();
        if($('.form-language').length){
            $('.form-language').each(function(){
                if($(this).is(':visible')){
                    languageID = $(this).attr("data-action");
                    return false;
                }
            });
        }
        return languageID;
    }
    <?php echo '</script'; ?>
>

</fieldset><?php }
}
