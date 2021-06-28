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
$(document).ajaxComplete(function(event, jqxhr, data) {
	$('.product-actions .rb-ajax-loading').hide();

	if (typeof data.data != 'undefined' && data.data != null) {
		if (data.data.indexOf('action=quickview') != -1) {
			setTimeout(function() {
				initSlick('.quickview ');
			}, 400);
		}
	}
});

$(document).ready(function() {
	afterChangeSlick();
	initSlick('');
	rbZoom();
	zoomView();
	changeCombi();

	if ($('.featured-products-slick').length > 0) {
		productCategorySlick();
	}

	prestashop.on('updatedProduct', function() {
		afterChangeSlick();
		initSlick('');
		rbZoom();
		zoomView();
		changeCombi();
	});
});

function productCategorySlick()
{
	$('.featured-products-slick').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: false,
		autoplaySpeed: 1000,
		responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 400,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
		]
	});
}

function changeCombi()
{
	$('.product-variants input').click(function() {
		$('.product-actions .rb-ajax-loading').show();
	});
}

function afterChangeSlick()
{
	$('.product-cover').on('afterChange', function(event, slick, currentSlide) {
		unsetZoom();
		rbZoom();
		zoomView();
	});
}

function initSlick(check)
{
	if (rb_slick['active'] == 1) {
		if ($('#rb_gallery').length > 0) {
			$(check + '.product-img-slick').fadeIn(3000);
			
			$(check + '.product-cover').slick({
				slidesToShow: 1,
	  			slidesToScroll: 1,
	  			autoplay: false,
	  			asNavFor: check + '#rb_gallery',
			});

			$(check + '#rb_gallery').slick({
	  			slidesToShow: rb_slick['slideshow'] != '' ? Number(rb_slick['slideshow']) : 1,
	  			slidesToScroll: rb_slick['slidesToScroll'] != '' ? Number(rb_slick['slidesToScroll']) : 1,
	  			autoplay: rb_slick['autoplay'] == 1 ? true : false,
	  			autoplaySpeed: rb_slick['autoplay'] == 1 && rb_slick['autospeed'] != '' ? rb_slick['autospeed'] : 1000,
	  			asNavFor: check + '.product-cover',
	  			focusOnSelect: true,
	  			responsive: [
		            {
		                breakpoint: 1200,
		                settings: {
		                    slidesToShow: 3,
		                    slidesToScroll: 1,
		                }
		            },
		            {
		                breakpoint: 992,
		                settings: {
		                    slidesToShow: 3,
		                    slidesToScroll: 1
		                }
		            },
		            {
		                breakpoint: 768,
		                settings: {
		                    slidesToShow: 4,
		                    slidesToScroll: 1
		                }
		            },
		            {
		                breakpoint: 576,
		                settings: {
		                    slidesToShow: 4,
		                    slidesToScroll: 1
		                }
		            },
		            {
		                breakpoint: 480,
		                settings: {
		                    slidesToShow: 3,
		                    slidesToScroll: 1
		                }
		            },
		            {
		            breakpoint: 400,
		                settings: {
		                    slidesToShow: 3,
		                    slidesToScroll: 1
		                }
		            }
        		]
			});
		}
	}
}

function rbZoom()
{
	if (rb_zoom['active'] == 1) {
		var rb_scroll = false;

		if (rb_zoom['scroll'] == 1) {
			rb_scroll = true;
		}

		if (rb_zoom['type'] == 2) {
			if (rb_slick['active'] == 1) {
				$(".product-cover .slick-active").elevateZoom({
					scrollZoom: rb_scroll,
					zoomType: "lens",
					containLensZoom: true,
					cursor: 'pointer',
					galleryActiveClass: "active"
				});
			} else {
				$(".product-cover .slick-active").elevateZoom({
					scrollZoom: rb_scroll,
					zoomType: "lens",
					containLensZoom: true,
					gallery:'rb_gallery',
					cursor: 'pointer',
					galleryActiveClass: "active"
				});
			}
		} else if (rb_zoom['type'] == 3) {
			if (rb_slick['active'] == 1) {
				$(".product-cover .slick-active").elevateZoom({
					scrollZoom: rb_scroll,
					zoomType: "lens",
					lensShape : "round",
					containLensZoom: true,
					cursor: 'pointer',
					galleryActiveClass: "active"
				});
			} else {
				$(".product-cover .slick-active").elevateZoom({
					scrollZoom: rb_scroll,
					zoomType: "lens",
					lensShape : "round",
					containLensZoom: true,
					gallery:'rb_gallery',
					cursor: 'pointer',
					galleryActiveClass: "active"
				});
			}
		} else {
			if (rb_slick['active'] == 1) {
				$(".product-cover .slick-active").elevateZoom();
			} else {
				$(".product-cover .slick-active").elevateZoom({
					gallery:'rb_gallery'
				});
			}
		}
	}
}

function unsetZoom()
{
	$('.zoomContainer').remove();
}

function zoomView()
{
	$(".product-cover .slick-active").click(function(e) {
		var url = $(this).data('rb-image');
		var data = [];

		data.push({
			href: url,
			title: ''
		});

		$('.thumb-container').each(function() {
			if ($(this).data('zoom-image') != url) {
				data.push({
					href: $(this).data('zoom-image'),
					title: ''
				});
			}
		});

		$.fancybox(data);

		return false;
	});
}