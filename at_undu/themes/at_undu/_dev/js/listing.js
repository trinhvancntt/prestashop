/**
 *  PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright  PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
import $ from 'jquery';
import prestashop from 'prestashop';
import 'velocity-animate';

import ProductMinitature from './components/product-miniature';

$(document).ready(() => {
  prestashop.on('clickQuickView', function (elm) {
    let data = {
      'action': 'quickview',
      'id_product': elm.dataset.idProduct,
      'id_product_attribute': elm.dataset.idProductAttribute,
    };
    $.post(prestashop.urls.pages.product, data, null, 'json').then(function (resp) {
      $('body').append(resp.quickview_html);
      let productModal = $(`#quickview-modal-${resp.product.id}-${resp.product.id_product_attribute}`);
      productModal.modal('show');
      productConfig(productModal);
      productModal.on('hidden.bs.modal', function () {
        productModal.remove();
      });
    }).fail((resp) => {
      prestashop.emit('handleError', {eventType: 'clickQuickView', resp: resp});
    });
  });

  var productConfig = (qv) => {
    const MAX_THUMBS = 4;
    var $arrows = $('.js-arrows');
    var $thumbnails = qv.find('.js-qv-product-images');
    $('.js-thumb').on('click', (event) => {
      if ($('.js-thumb').hasClass('selected')) {
        $('.js-thumb').removeClass('selected');
      }
      $(event.currentTarget).addClass('selected');
      $('.js-qv-product-cover').attr('src', $(event.target).data('image-large-src'));
    });
    /**DONGND:: fix scroll product image - quickview*/
	
	var number_thumb = $thumbnails.find('li').length;
	
	if (style_scroll_quickview == 'vertical')
	{
		var mask_size = $thumbnails.parent().height();
		// size_item_quickview = $thumbnails.find('li').height();
	}
	else
	{
		var mask_size = $thumbnails.parent().width();
		// size_item_quickview = $thumbnails.find('li').width();
	}
	// console.log($thumbnails);
	var size_scroll = size_item_quickview*number_thumb;
	var check_arrow_exists = size_scroll - mask_size;
	// console.log(size_item_quickview);
	// console.log(number_thumb);
	// console.log(check_arrow_exists);
	if (check_arrow_exists >= size_item_quickview)
	{
		/** LEO_THEME : FIX QUICKVIEW NOT SCROLL IMAGE*/
		
		$('.quickview .js-qv-mask').addClass('scroll');
		$('.js-arrows').addClass('scroll');
		$arrows.show();
		$('.quickview .js-qv-mask').unbind('backward');
		$('.quickview .js-qv-mask').unbind('forward');
		$('.quickview .js-qv-mask').scrollbox({
			direction: style_scroll_quickview,
			distance: size_item_quickview,
			autoPlay: false,
			step: 1,
		});
		$('.arrow-up').click(function () {
			$('.quickview .js-qv-mask').trigger('backward');
		});
		$('.arrow-down').click(function () {
			$('.quickview .js-qv-mask').trigger('forward');
		});				           
	}
	else
	{
		$('.quickview .js-qv-mask').removeClass('scroll');	
		$arrows.hide();
		$('.js-arrows').removeClass('scroll');
	}
    qv.find('#quantity_wanted').TouchSpin({
      verticalbuttons: true,
      verticalupclass: 'material-icons touchspin-up',
      verticaldownclass: 'material-icons touchspin-down',
      buttondown_class: 'btn btn-touchspin js-touchspin',
      buttonup_class: 'btn btn-touchspin js-touchspin',
      min: 1,
      max: 1000000
    });
  };
  var move = (direction) => {
    const THUMB_MARGIN = 20;
    var $thumbnails = $('.js-qv-product-images');
    var thumbHeight = $('.js-qv-product-images li img').height() + THUMB_MARGIN;
    var currentPosition = $thumbnails.position().top;
    $thumbnails.velocity({
      translateY: (direction === 'up') ? currentPosition + thumbHeight : currentPosition - thumbHeight
    }, function () {
      if ($thumbnails.position().top >= 0) {
        $('.arrow-up').css('opacity', '.2');
      } else if ($thumbnails.position().top + $thumbnails.height() <= $('.js-qv-mask').height()) {
        $('.arrow-down').css('opacity', '.2');
      }
    });
  };
  $('body').on('click', '#search_filter_toggler', function () {
    $('#search_filters_wrapper').removeClass('hidden-sm-down');
    $('#content-wrapper').addClass('hidden-sm-down');
    $('#footer').addClass('hidden-sm-down');
  });
  $('#search_filter_controls .clear').on('click', function () {
    $('#search_filters_wrapper').addClass('hidden-sm-down');
    $('#content-wrapper').removeClass('hidden-sm-down');
    $('#footer').removeClass('hidden-sm-down');
  });
  $('#search_filter_controls .ok').on('click', function () {
    $('#search_filters_wrapper').addClass('hidden-sm-down');
    $('#content-wrapper').removeClass('hidden-sm-down');
    $('#footer').removeClass('hidden-sm-down');
  });

  const parseSearchUrl = function (event) {
    // if (event.target.dataset.searchUrl !== undefined) {
      // return event.target.dataset.searchUrl;
    // }

    // if ($(event.target).parent()[0].dataset.searchUrl === undefined) {
      // throw new Error('Can not parse search URL');
    // }

    // return $(event.target).parent()[0].dataset.searchUrl;
	if (event.target.getAttribute('data-search-url') !== undefined) {	
      return event.target.getAttribute('data-search-url');
    }
	
    if ($(event.target).parent()[0].getAttribute('data-search-url') === undefined) {
      throw new Error('Can not parse search URL');
    }
	
    return $(event.target).parent()[0].getAttribute('data-search-url');
  };

  $('body').on('change', '#search_filters input[data-search-url]', function (event) {
    prestashop.emit('updateFacets', parseSearchUrl(event));
  });

  $('body').on('click', '.js-search-filters-clear-all', function (event) {
    prestashop.emit('updateFacets', parseSearchUrl(event));
  });

  $('body').on('click', '.js-search-link', function (event) {
    event.preventDefault();
    prestashop.emit('updateFacets',$(event.target).closest('a').get(0).href);
  });

  $('body').on('change', '#search_filters select', function (event) {
    const form = $(event.target).closest('form');
    prestashop.emit('updateFacets', '?' + form.serialize());
  });

  prestashop.on('updateProductList', (data) => {
    updateProductListDOM(data);
  });
});

function updateProductListDOM (data) {
  $('#search_filters').replaceWith(data.rendered_facets);
  $('#js-active-search-filters').replaceWith(data.rendered_active_filters);
  $('#js-product-list-top').replaceWith(data.rendered_products_top);
  $('#js-product-list').replaceWith(data.rendered_products);
  $('#js-product-list-bottom').replaceWith(data.rendered_products_bottom);

  let productMinitature = new ProductMinitature();
  productMinitature.init();

}
