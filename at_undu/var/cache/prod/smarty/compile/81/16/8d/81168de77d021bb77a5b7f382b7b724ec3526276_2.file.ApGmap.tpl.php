<?php
/* Smarty version 3.1.33, created on 2019-09-27 05:37:48
  from 'W:\xampp\htdocs\prestashop\at_undu\themes\at_undu\modules\appagebuilder\views\templates\hook\ApGmap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8dd86c6eb192_47372980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81168de77d021bb77a5b7f382b7b724ec3526276' => 
    array (
      0 => 'W:\\xampp\\htdocs\\prestashop\\at_undu\\themes\\at_undu\\modules\\appagebuilder\\views\\templates\\hook\\ApGmap.tpl',
      1 => 1553050753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8dd86c6eb192_47372980 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApGmap -->
<?php if (($_smarty_tpl->tpl_vars['page_name']->value != 'stores' || $_smarty_tpl->tpl_vars['formAtts']->value['stores'] == 1) && ($_smarty_tpl->tpl_vars['page_name']->value != 'sitemap' || $_smarty_tpl->tpl_vars['formAtts']->value['sitemap'] == 1)) {?>
<div id="google-maps-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="block widget-gmap">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title']) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
    <h4 class="title_block">
    	<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

    </h4>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
        <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
    <?php }?>
    <div class="gmap-cover <?php if ($_smarty_tpl->tpl_vars['hasListStore']->value) {?>display-list-store<?php } else { ?>not-display-list-store<?php }?>" style="width: 100%; 
     height:<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['height']) && $_smarty_tpl->tpl_vars['formAtts']->value['height']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['height'], ENT_QUOTES, 'UTF-8');
} else { ?>100%;<?php }?>; clear:both;">
    	<?php if ($_smarty_tpl->tpl_vars['hasListStore']->value) {?>
    	<div class="gmap-content col-lg-9 col-md-8 col-sm-8 col-xs-6">
    	<?php } else { ?>
    	<div class="gmap-content">
    	<?php }?>
            <div id="map-canvas-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="gmap" style="min-width:100px; min-height:100px;
            	width:<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['width']) && $_smarty_tpl->tpl_vars['formAtts']->value['width']) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['width'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>100%;<?php }?>; 
            	height:<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['height']) && $_smarty_tpl->tpl_vars['formAtts']->value['height']) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['height'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>100%;<?php }?>;"></div>
    	</div>
		<?php if ($_smarty_tpl->tpl_vars['hasListStore']->value) {?>
    	<div class="gmap-stores-content col-lg-3 col-md-4 col-sm-4 col-xs-6" style="height: 100%">
    		<div id="gmap-stores-list-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
        		<ul></ul>
        	</div>
    	</div>
    	<?php }?>
    </div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
    
<?php echo '<script'; ?>
 type="text/javascript">
ap_list_functions.push(function(){
    $('<?php echo '<script'; ?>
>')
    .attr('type', 'text/javascript')
    .attr('src', 'https://maps.googleapis.com/maps/api/js?key=<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['gkey']) && $_smarty_tpl->tpl_vars['formAtts']->value['gkey']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['gkey'], ENT_QUOTES, 'UTF-8');
}?>&callback=initLeoMap')
    .appendTo('head');
});
<?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        
        var apGMap = <?php echo $_smarty_tpl->tpl_vars['apGMap']->value;?>
;
		var marker_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->tpl_vars['marker_list']->value;?>
;
		var marker_center = <?php echo $_smarty_tpl->tpl_vars['marker_center']->value;?>

    	var markers_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 = [];

    	function displayAMarker(data, obj, id) {
    		var m = markers_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
[id];
    		google.maps.event.trigger(m, 'click');
    	}
    	function initializeListStore(data, name) {
    		var obj = $("#" + name + " ul");
    		synSize(name);
    		for(var i = 0; i < data.length; i++) {
    			var s = data[i];
    			obj.append("<li class='item-gmap-store' marker-id='" + i + "'" 
    					+ "onclick='return displayAMarker(marker_list_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
, this, " + i + ");'>"
    					+ "<strong><b><span class='icon-map-marker'></span> "
    					+ s.name + "</b></strong><br/><text>" + s.address + "</text>");
    		}
    	}
        function initLeoMap(){
            initializeGmap('',
                    marker_list_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
, 
                    markers_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
, 
                    "map-canvas-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
", 
                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['zoom'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
);

            if("<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hasListStore']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
".length > 0) {
                initializeListStore(
                        marker_list_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
, 
                        "gmap-stores-list-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
");
            }

        }

    // CODE HERE not write in *.js, compatility with Chrome
    function initializeGmap(map, data, markers, nameGmap, zoom)
    {
        map = new google.maps.Map(document.getElementById(nameGmap), {
            center: new google.maps.LatLng(marker_center.latitude, marker_center.longitude),
            zoom: zoom,
            mapTypeId: 'roadmap',
            scrollwheel:  false,
            styles:[
			    {
			        "featureType": "water",
			        "elementType": "geometry",
			        "stylers": [
			            {
			                "color": "#e9e9e9"
			            },
			            {
			                "lightness": 17
			            }
			        ]
			    },
			    {
			        "featureType": "landscape",
			        "elementType": "geometry",
			        "stylers": [
			            {
			                "color": "#f5f5f5"
			            },
			            {
			                "lightness": 20
			            }
			        ]
			    },
			    {
			        "featureType": "road.highway",
			        "elementType": "geometry.fill",
			        "stylers": [
			            {
			                "color": "#ffffff"
			            },
			            {
			                "lightness": 17
			            }
			        ]
			    },
			    {
			        "featureType": "road.highway",
			        "elementType": "geometry.stroke",
			        "stylers": [
			            {
			                "color": "#ffffff"
			            },
			            {
			                "lightness": 29
			            },
			            {
			                "weight": 0.2
			            }
			        ]
			    },
			    {
			        "featureType": "road.arterial",
			        "elementType": "geometry",
			        "stylers": [
			            {
			                "color": "#ffffff"
			            },
			            {
			                "lightness": 18
			            }
			        ]
			    },
			    {
			        "featureType": "road.local",
			        "elementType": "geometry",
			        "stylers": [
			            {
			                "color": "#ffffff"
			            },
			            {
			                "lightness": 16
			            }
			        ]
			    },
			    {
			        "featureType": "poi",
			        "elementType": "geometry",
			        "stylers": [
			            {
			                "color": "#f5f5f5"
			            },
			            {
			                "lightness": 21
			            }
			        ]
			    },
			    {
			        "featureType": "poi.park",
			        "elementType": "geometry",
			        "stylers": [
			            {
			                "color": "#dedede"
			            },
			            {
			                "lightness": 21
			            }
			        ]
			    },
			    {
			        "elementType": "labels.text.stroke",
			        "stylers": [
			            {
			                "visibility": "on"
			            },
			            {
			                "color": "#ffffff"
			            },
			            {
			                "lightness": 16
			            }
			        ]
			    },
			    {
			        "elementType": "labels.text.fill",
			        "stylers": [
			            {
			                "saturation": 36
			            },
			            {
			                "color": "#333333"
			            },
			            {
			                "lightness": 40
			            }
			        ]
			    },
			    {
			        "elementType": "labels.icon",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "transit",
			        "elementType": "geometry",
			        "stylers": [
			            {
			                "color": "#f2f2f2"
			            },
			            {
			                "lightness": 19
			            }
			        ]
			    },
			    {
			        "featureType": "administrative",
			        "elementType": "geometry.fill",
			        "stylers": [
			            {
			                "color": "#fefefe"
			            },
			            {
			                "lightness": 20
			            }
			        ]
			    },
			    {
			        "featureType": "administrative",
			        "elementType": "geometry.stroke",
			        "stylers": [
			            {
			                "color": "#fefefe"
			            },
			            {
			                "lightness": 17
			            },
			            {
			                "weight": 1.2
			            }
			        ]
			    }
			]
        });

        if(data.length>0)
        {
            setTimeout(createMarkers(map, markers, data), 1500);
        }
        else
        {
            markers[0] = new google.maps.Marker({
                position: new google.maps.LatLng(marker_center.latitude, marker_center.longitude),
                animation: google.maps.Animation.DROP,
                map: map,
            });
        }
    };

    function createMarkers(map, markers, data) {
        // dataMarkers
        for (var i = 0; i < data.length; i++) {
            var obj = data[i];
            var lg = parseFloat(obj.longitude);
            var lt = parseFloat(obj.latitude);
            var name = obj.name;
            var address = obj.address;
            var other = obj.other;
            var id_store = obj.id_store;
            var has_store_picture = obj.has_store_picture;

            var latlng = new google.maps.LatLng(lt, lg);
            var html = "<div style='min-width:200px;'><b>" + name + "</b><br/>" + address;
            html += (has_store_picture ? "<br /><br /><p><img src='" + apGMap.img_store_dir + parseInt(id_store) + ".jpg' alt='' /></p>" : "");
            html += other + "<a href='http://maps.google.com/maps?saddr=&daddr=" + latlng + "' target='_blank'>" + apGMap.translation_5 +"<\/a>";
            html += "</div>";

            var infowindow = new google.maps.InfoWindow({
                content: "loading..."
            });

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(lt, lg),
                animation: google.maps.Animation.DROP,
                map: map,
                icon: apGMap.img_ps_dir + apGMap.logo_store,
                title: obj.name,
                html: html
            });

            google.maps.event.addListener(marker, "click", function () {
                infowindow.setContent(this.html);
                infowindow.open(map, this);
            });
            markers[i] = marker;
        }
    }
	<?php echo '</script'; ?>
>
</div>
<?php }
}
}
