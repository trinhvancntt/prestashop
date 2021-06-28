/**
* 2007-2019 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2019 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*
* Don't forget to prefix your containers with your own identifier
* to avoid any conflicts with others containers.
*/

(function($) {

var _R = jQuery.fn.rbthemeslider;

jQuery.extend(true,_R, {
	checkActions : function(_nc,opt,as) {
		checkActions_intern(_nc,opt,as);
	}		
});

var checkActions_intern = function(_nc,opt,as) {
if (as)				
	jQuery.each(as,function(i,a) {		
		a.delay = parseInt(a.delay,0)/1000;
		_nc.addClass("noSwipe");

		// LISTEN TO ESC TO EXIT FROM FULLSCREEN
		if (!opt.fullscreen_esclistener) {
			if (a.action=="exitfullscreen" || a.action=="togglefullscreen") {				
				jQuery(document).keyup(function(e) {
				     if (e.keyCode == 27 && jQuery('#rs-go-fullscreen').length>0)  
				     	_nc.trigger(a.event);				   
				});
				opt.fullscreen_esclistener = true;
			}
		}

		_nc.on(a.event,function() {			
			var tnc = jQuery("#"+a.layer);
			if (a.action=="stoplayer" || a.action=="togglelayer" || a.action=="startlayer") {
				if (tnc.length>0) 												
					if (a.action=="startlayer" || (a.action=="togglelayer" && tnc.data('animdirection')!="in")) {
						tnc.data('animdirection',"in");
						var otl = tnc.data('timeline_out'),
							base_offsetx = opt.sliderType==="carousel" ? 0 : opt.width/2 - (opt.gridwidth[opt.curWinRange]*opt.bw)/2,
							base_offsety=0;																		
						if (otl!=undefined) otl.pause(0).kill();																		
						if (_R.animateSingleCaption) _R.animateSingleCaption(tnc,opt,base_offsetx,base_offsety,0,false,true);	
						var tl = tnc.data('timeline');
						tnc.data('triggerstate',"on");																														
						punchgs.TweenLite.delayedCall(a.delay,function() {
							tl.play(0);
						},[tl]);								
					} else 

					if (a.action=="stoplayer" || (a.action=="togglelayer" && tnc.data('animdirection')!="out")) {
						tnc.data('animdirection',"out");
						tnc.data('triggered',true);
						tnc.data('triggerstate',"off");
						if (_R.stopVideo) _R.stopVideo(tnc,opt);
						if (_R.endMoveCaption)												
						punchgs.TweenLite.delayedCall(a.delay,_R.endMoveCaption,[tnc,null,null,opt]);														
					}															
			} else 	
			punchgs.TweenLite.delayedCall(a.delay,function() {
				switch (a.action) {
					case "scrollbelow":
						_nc.addClass("tp-scrollbelowslider");
						_nc.data('scrolloffset',a.offset);
						_nc.data('scrolldelay',a.delay);						
						var off=getOffContH(opt.fullScreenOffsetContainer) || 0,
							aof = parseInt(a.offset,0) || 0;									 
						off =  off - aof || 0;							
						jQuery('body,html').animate({scrollTop:(opt.c.offset().top+(jQuery(opt.li[0]).height())-off)+"px"},{duration:400});																											
					break;
					case "callback":
						eval(a.callback);							
					break;
					case "jumptoslide":	
						switch (a.slide.toLowerCase()) {
							case "+1":
							case "next":
								opt.sc_indicator="arrow";
								_R.callingNewSlide(opt,opt.c,1);					
							break;
							case "previous":
							case "prev":
							case "-1":									
								opt.sc_indicator="arrow";
								_R.callingNewSlide(opt,opt.c,-1);																		
							break;
							default:
								var ts = jQuery.isNumeric(a.slide) ?  parseInt(a.slide,0) : a.slide;
								_R.callingNewSlide(opt,opt.c,ts);									
							break;
						}												
					break;
					case "simplelink":						
						window.open(a.url,a.target);
					break;
					case "toggleslider":
						opt.noloopanymore=0;								
						if (opt.sliderstatus=="playing")
							opt.c.rbpause();
						else
							opt.c.rbresume();								
					break;
					case "pauseslider":								
						opt.c.rbpause();								
					break;
					case "playslider":			
						opt.noloopanymore=0;					
						opt.c.rbresume();								
					break;
					case "playvideo":							
						if (tnc.length>0)									
							_R.playVideo(tnc,opt);									
					break;
					case "stopvideo":						
						if (tnc.length>0)										
							if (_R.stopVideo) _R.stopVideo(tnc,opt);									
					break;
					case "togglevideo":
						if (tnc.length>0) 				
						
							if (!_R.isVideoPlaying(tnc,opt))
								_R.playVideo(tnc,opt);
							else
								if (_R.stopVideo) _R.stopVideo(tnc,opt);		
					break;
					case "simulateclick":
						if (tnc.length>0) tnc.click();										
					break;
					case "toggleclass":
						if (tnc.length>0) 								
							if (!tnc.hasClass(a.classname))
								tnc.addClass(a.classname);
							else
								tnc.removeClass(a.classname);									
					break;
					case "gofullscreen":
					case "exitfullscreen":
					case "togglefullscreen":
						
						if (jQuery('#rs-go-fullscreen').length>0 && (a.action=="togglefullscreen" || a.action=="exitfullscreen")) {
							jQuery('#rs-go-fullscreen').appendTo(jQuery('#rs-was-here'));
							var paw = opt.c.closest('.forcefullwidth_wrapper_tp_banner').length>0 ? opt.c.closest('.forcefullwidth_wrapper_tp_banner') : opt.c.closest('.rb_slider_wrapper');
							paw.unwrap();
							paw.unwrap();
							opt.minHeight  = opt.oldminheight;
							opt.infullscreenmode = false;
							opt.c.rbredraw();	
							if (opt.playingvideos != undefined && opt.playingvideos.length>0) {			
								jQuery.each(opt.playingvideos,function(i,_nc) {									
									_R.playVideo(_nc,opt);
								});
							}

						} else 
						if (jQuery('#rs-go-fullscreen').length==0 && (a.action=="togglefullscreen" || a.action=="gofullscreen")) {
							var paw = opt.c.closest('.forcefullwidth_wrapper_tp_banner').length>0 ? opt.c.closest('.forcefullwidth_wrapper_tp_banner') : opt.c.closest('.rb_slider_wrapper');
							paw.wrap('<div id="rs-was-here"><div id="rs-go-fullscreen"></div></div>');
							var gf = jQuery('#rs-go-fullscreen');
							gf.appendTo(jQuery('body'));
							gf.css({position:'fixed',width:'100%',height:'100%',top:'0px',left:'0px',zIndex:'9999999',background:'#ffffff'});
							opt.oldminheight = opt.minHeight;
							opt.minHeight = jQuery(window).height();							
							opt.infullscreenmode = true;
							opt.c.rbredraw();	
							if (opt.playingvideos != undefined && opt.playingvideos.length>0) {			
								jQuery.each(opt.playingvideos,function(i,_nc) {									
									_R.playVideo(_nc,opt);
								});
							}							
						}	
						
					break;
				}
			},[tnc,opt,a,_nc]);
		});		
		switch (a.action) {					
			case "togglelayer":
			case "startlayer":
			case "playlayer":
			case "stoplayer":
				var tnc = jQuery("#"+a.layer);		
					if (tnc.data('start')!="bytrigger")	{
						tnc.data('triggerstate',"on");						
						tnc.data('animdirection',"in");						
					}	
			break;

		}
	})		
}

var getOffContH = function(c) {
	if (c==undefined) return 0;		
	if (c.split(',').length>1) {
		oc = c.split(",");
		var a =0;
		if (oc)
			jQuery.each(oc,function(index,sc) {
				if (jQuery(sc).length>0)
					a = a + jQuery(sc).outerHeight(true);							
			});
		return a;
	} else {
		return jQuery(c).height();
	}
	return 0;
}

})(jQuery);