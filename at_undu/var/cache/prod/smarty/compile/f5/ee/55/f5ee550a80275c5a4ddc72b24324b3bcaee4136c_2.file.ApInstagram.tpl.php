<?php
/* Smarty version 3.1.33, created on 2019-09-27 03:05:11
  from 'W:\xampp\htdocs\prestashop\at_undu\themes\at_undu\modules\appagebuilder\views\templates\hook\ApInstagram.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8db4a7ac3790_78044041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5ee550a80275c5a4ddc72b24324b3bcaee4136c' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\themes\\at_undu\\modules\\appagebuilder\\views\\templates\\hook\\ApInstagram.tpl',
      1 => 1553050753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8db4a7ac3790_78044041 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApInstagram -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>
    
    <?php if (!isset($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type']) || $_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'full') {?>    <div class="block <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['class']) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 instagram-block">
        <?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title']) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
        <h4 class="title_block"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
            <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['client_id']) && $_smarty_tpl->tpl_vars['formAtts']->value['client_id']) {?>
        <div class="block_content">
            <div class="owl-row">
                <div id="instafeed"></div>
            </div>
            <p class="link-instagram">
            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['profile_link']) && $_smarty_tpl->tpl_vars['formAtts']->value['profile_link']) {?>
                <a href="https://instagram.com/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['profile_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all in instagram','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"><i class="fa fa-instagram"></i>&nbsp;&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all in instagram','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
            <?php }?>
            </p>
        </div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
    </div>

<?php } elseif (isset($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type']) && ($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'accordion' || $_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'accordion_small_screen')) {?>    <div class="block <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['class']) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 instagram-block block-toggler<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'accordion_small_screen') {?> accordion_small_screen<?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title']) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
            <div class="title clearfix" data-target="#widget-instagram-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse">
                <h4 class="title_block"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
                <span class="float-xs-right">
                  <span class="navbar-toggler collapse-icons">
                    <i class="material-icons add">&#xE313;</i>
                    <i class="material-icons remove">&#xE316;</i>
                  </span>
                </span>
            </div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
            <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['client_id']) && $_smarty_tpl->tpl_vars['formAtts']->value['client_id']) {?>
        <div class="collapse block_content" id="widget-instagram-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-row">
                <div id="instafeed"></div>
            </div>
            <p class="link-instagram">
            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['profile_link']) && $_smarty_tpl->tpl_vars['formAtts']->value['profile_link']) {?>
                <a href="https://instagram.com/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['profile_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all in instagram','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"><i class="fa fa-instagram"></i>&nbsp;&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all in instagram','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
            <?php }?>
            </p>
        </div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
    </div>
    <?php }?>

        
<?php echo '<script'; ?>
 type="text/javascript">
    ap_list_functions.push(function(){
            var feed = new Instafeed({
               clientId: "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['client_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['access_token']) && $_smarty_tpl->tpl_vars['formAtts']->value['access_token']) {?>
               accessToken: "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['access_token'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['user_id']) && $_smarty_tpl->tpl_vars['formAtts']->value['user_id']) {?>
               userId: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['user_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['get']) && $_smarty_tpl->tpl_vars['formAtts']->value['get']) {?>
               get: "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['get'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sort_by']) && $_smarty_tpl->tpl_vars['formAtts']->value['sort_by']) {?>
               sortBy: "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['sort_by'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['limit']) && $_smarty_tpl->tpl_vars['formAtts']->value['limit']) {?>
               limit: "<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['limit']), ENT_QUOTES, 'UTF-8');?>
",
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['resolution']) && $_smarty_tpl->tpl_vars['formAtts']->value['resolution']) {?>
               resolution: "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['resolution'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['target']) && $_smarty_tpl->tpl_vars['formAtts']->value['target']) {?>
               target: "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['target'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['template']) && $_smarty_tpl->tpl_vars['formAtts']->value['template']) {?>
               template: "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['template'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['tag_name']) && $_smarty_tpl->tpl_vars['formAtts']->value['tag_name']) {?>
               tagName: "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['tag_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['location_id']) && $_smarty_tpl->tpl_vars['formAtts']->value['location_id']) {?>
               locationId: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['get'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['links']) && $_smarty_tpl->tpl_vars['formAtts']->value['links']) {?>
               links: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['links'], ENT_QUOTES, 'UTF-8');?>
",
    <?php }?>    

            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type']) && $_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'] !== "list") {?>
                after: function() {
                    <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'] == "boostrap") {?>

                    <?php } else { ?>
                        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['itempercolumn']) && $_smarty_tpl->tpl_vars['formAtts']->value['itempercolumn'] > 1) {?>
                            // CASE : 2,3 images in one column
                            var photos = [];
                            $("#instafeed img").each(function() {
                                                                                                photos.push( $(this).parent().prop('outerHTML'));
                            });
                            $("#instafeed").html('');
                            $("#instafeed").addClass('owl-loading');

                            var itempercolumn = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['itempercolumn'], ENT_QUOTES, 'UTF-8');?>
;

                            var photos = array_chunk(photos,itempercolumn);
                            var total_column = photos.length;

                            for (i = 0; i < total_column; i++)
                            {
                                if(i == 0){
                                    var img_html = '<div class="item first">';
                                }else{
                                    var img_html = '<div class="item">';
                                }

                                for(j=0; j<photos[i].length; j++)
                                {
                                    img_html += '<div class="block-carousel-container">';
                                    img_html += '   <div class="left-block">';
                                    img_html += '       <div class="block-carousel-image-container image">';

                                    img_html += photos[i][j];

                                    img_html += '       </div>';
                                    img_html += '   </div>';
                                    img_html += '</div>';
                                }

                                $("#instafeed").html( $("#instafeed").html() + img_html );
                            }
                        <?php }?>

                        $('#instafeed').imagesLoaded( function() {
                            $('#instafeed').owlCarousel({
                                items :             <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['items']) {
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['items']), ENT_QUOTES, 'UTF-8');
} else { ?>false<?php }?>,
                                itemsDesktop :      <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktop']) && $_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktop']) {?>[1200,<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktop']), ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>false<?php }?>,
                                itemsDesktopSmall : <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktopsmall']) && $_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktopsmall']) {?>[992,<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktopsmall']), ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>false<?php }?>,
                                itemsTablet :       <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['itemstablet']) && $_smarty_tpl->tpl_vars['formAtts']->value['itemstablet']) {?>[768,<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['itemstablet']), ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>false<?php }?>,
                                itemsMobile :       <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['itemsmobile']) && $_smarty_tpl->tpl_vars['formAtts']->value['itemsmobile']) {?>[576,<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['itemsmobile']), ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>false<?php }?>,
                                itemsCustom :       <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['itemscustom']) && $_smarty_tpl->tpl_vars['formAtts']->value['itemscustom']) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['itemscustom'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>false<?php }?>,
                                singleItem :        false,       // true : show only 1 item
                                itemsScaleUp :      false,
                                slideSpeed :        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slidespeed']) {
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['slidespeed']), ENT_QUOTES, 'UTF-8');
} else { ?>200<?php }?>,        //  change speed when drag and drop a item
                                paginationSpeed :   <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['paginationspeed']) {
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['paginationspeed']), ENT_QUOTES, 'UTF-8');
} else { ?>800<?php }?>,       // change speed when go next page
                                autoPlay :          <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['autoplay']) {?>true<?php } else { ?>false<?php }?>,       // time to show each item
                                stopOnHover :       <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['stoponhover']) {?>true<?php } else { ?>false<?php }?>,
                                navigation :        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['navigation']) {?>true<?php } else { ?>false<?php }?>,
                                navigationText :    ["&lsaquo;", "&rsaquo;"],
                                scrollPerPage :     <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['scrollperpage']) {?>true<?php } else { ?>false<?php }?>,
                                pagination :        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['pagination']) {?>true<?php } else { ?>false<?php }?>,       // show bullist
                                paginationNumbers : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['paginationnumbers']) {?>true<?php } else { ?>false<?php }?>,       // show number
                                responsive :        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['responsive']) {?>true<?php } else { ?>false<?php }?>,
                                lazyLoad :          <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['lazyload']) {?>true<?php } else { ?>false<?php }?>,
                                lazyFollow :        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['lazyfollow']) {?>true<?php } else { ?>false<?php }?>,       // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
                                lazyEffect :        "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['lazyeffect'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
                                autoHeight :        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['autoheight']) {?>true<?php } else { ?>false<?php }?>,
                                mouseDrag :         <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['mousedrag']) {?>true<?php } else { ?>false<?php }?>,
                                touchDrag :         <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['touchdrag']) {?>true<?php } else { ?>false<?php }?>,
                                addClassActive :    true,
                                direction:          <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['rtl']) {?>'rtl'<?php } else { ?>false<?php }?>,
                                
                                afterInit: OwlLoaded,
                                afterAction : SetOwlCarouselFirstLast,
                            });
                        });
                        function OwlLoaded(el){
                            el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
                            if ($(el).parents('.tab-pane').length && !$(el).parents('.tab-pane').hasClass('active'))
                                el.width('100%');
                        };
                    <?php }?>
                }
                <?php }?>
            });

            feed.run();
    });

            var array_chunk = function(arr, chunkSize) {
                var groups = [], i;
                for (i = 0; i < arr.length; i += chunkSize) {
                    groups.push(arr.slice(i, i + chunkSize));
                }
                return groups;
            }
<?php echo '</script'; ?>
>
<?php }
}
}
