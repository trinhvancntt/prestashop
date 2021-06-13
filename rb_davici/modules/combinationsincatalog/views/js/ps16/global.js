/*
* 2018 Singleton software
*
*  @author Singleton software <info@singleton-software.com>
*  @copyright 2018 Singleton software
*/

//pri ps verziach po 1.6.1.1 (vratane), neposiela po stlaceni tlacidla "add to cart" parameter idProductAttribute do metody ajaxCart.add, preto to riesi toto pretazenie
if (typeof ajaxCart !== 'undefined' && ajaxCart.overrideButtonsInThePage !== 'undefined') {
	var overrideButtonsInThePageOrig = ajaxCart.overrideButtonsInThePage;
	ajaxCart.overrideButtonsInThePage = function() {
		overrideButtonsInThePageOrig();
		$(document).off('click', getCorrectPathFromConfiguration('add_to_cart_button_path')).on('click', getCorrectPathFromConfiguration('add_to_cart_button_path'), function(e) {
			e.preventDefault();
			var idProduct =  parseInt($(this).attr('data-id-product'));
			var idProductAttribute =  parseInt($(this).attr('data-id-product-attribute'));
			var minimalQuantity =  parseInt($(this).data('minimal_quantity'));
			if (parseInt(combinationsInCatalogData.show_quantity) == 1) {
				if (isNaN(parseInt($(this).siblings('.addToCartButtonNumber').val())) || parseInt($(this).siblings('.addToCartButtonNumber').val()) < 1) {
					minimalQuantity = 1;
			    } else {
			    	minimalQuantity = $(this).siblings('.addToCartButtonNumber').val();
			    }
			}
			if (!minimalQuantity)
				minimalQuantity = 1;
			if ($(this).prop('disabled') != 'disabled')
				ajaxCart.add(idProduct, idProductAttribute, false, this, minimalQuantity);
		});
	}
}

//zabezpeci aby po prepnuti na listove zobrazenie katalogu, bola volba kombinacii pod cenou na pravo
if (typeof window.display !== 'undefined') {
	var displayOrig = window.display;
	window.display = function(view) {
		displayOrig(view);
		if (view == 'list') {
			$(".addToCartFormWrapper").each(function() {
				if ($(this).parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_price_path')).siblings('.addToCartFormWrapper').length == 0) {
					$(this).clone().addClass('inList').appendTo($(this).parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_price_path')).parent());
				}
				$(this).parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find('.addToCartFormWrapper').hide();
				$(this).parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find('.inList').show();
			});
		} else {
			$(".addToCartFormWrapper").each(function() {
				$(this).parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find('.addToCartFormWrapper').show();
				$(this).parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find('.inList').hide();
			});
		}
	}
}

//pretazenie funkcie updateProductUrl() ktora sa vola po manipulovani s filtrom 
//vnutry sa zavola original funkcia updateProductUrl() a za nou sa vykona vykreslenie cien
if (typeof updateProductUrl !== 'undefined') {
	var origUpdateProductUrl = updateProductUrl;
	updateProductUrl = function(str) {
		origUpdateProductUrl(str);
		showProductCountInput();
	}
}

//zabezpeci aby neobalilo do uniformu radia z tohoto modulu (niektore temy to nepouzivaju)
if (typeof $.uniform !== 'undefined') {
	if (typeof $.uniform.update !== 'undefined') {
		var uniformUpdateOrig = $.uniform.update;
		$.uniform.update = function (elem) {
			if (!$(elem).parents('li:eq(0)').hasClass('combinationRadio')) {
				uniformUpdateOrig(elem);
			}
		};
	}
}

$(document).ready(function() {
	$(document).on('change','.variants-product [name="productCombinations"]', function() {
		idProduct = parseInt($(this).parents('.addToCartFormWrapper:eq(0)').attr('data-product-id'));
		$(this).parents('.addToCartFormWrapper:eq(0)').find('.productCombinationsHiddenInput').remove();
		$.each(productsVariantsJson[idProduct][$(this).val()]['attributes'], function(index, value) {
			generateInput(idProduct, value[3], value[2]);
		});
		getCombinationsForProducts(idProduct, $(this).parents('.addToCartFormWrapper:eq(0)').find('.addToCartForm').serialize() + '&ajax=1&action=getProductCombinations');
	});
	
	$(document).on('change','.variants-product [data-product-attribute]', function() {
		idProduct = parseInt($(this).parents('.addToCartFormWrapper:eq(0)').attr('data-product-id'));
		getCombinationsForProducts(idProduct, $(this).parents('.addToCartFormWrapper:eq(0)').find('.addToCartForm').serialize() + '&ajax=1&action=getProductCombinations');
	});

	showProductCountInput();
	showOutOfStockLabel();
});

function getCombinationsForProducts(idProduct, query) {
	showProgressWheel(idProduct);
	$.ajax({
		type: "POST",
		url: productCombinationsControllerLink,
		async: false,
		data : query,
		dataType: 'json',
		success : function(res) {
			$('.addToCartFormWrapper[data-product-id=' + idProduct + ']').each(function() {
				refreshCombinations($(this), res);
			});
		}
	});
}

function refreshCombinations(object, res) {
	object.find('.variants-product').remove();
	object.find('.variantsProductWrapper').append(res.productVariants);
	// po vymeneni kombinacii posunie riadok nizsie v katalogu trosku nizsie, kod nizsie to upravuje
	if (object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').parent().hasClass('ajax_block_product')) {
		object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').parent().css({'height':'auto', 'margin-bottom':'0'});
	}
	if (res.addToCartUrl == null) {
		object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('add_to_cart_button_path')).addClass('disabled');
		object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('add_to_cart_button_path')).addClass('disabledCombination');
		object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('add_to_cart_button_path')).attr('disabled','disabled');
		if (combinationsInCatalogData.button_out_of_stock[idLang].length > 0) {
			object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('add_to_cart_button_path')).html('<span>' + combinationsInCatalogData.button_out_of_stock[idLang] + '</span>');
		}
	} else {
		if (object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('add_to_cart_button_path')).hasClass('disabledCombination')) {
			object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('add_to_cart_button_path')).removeClass('disabledCombination');
		}
		if (object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('add_to_cart_button_path')).hasClass('disabled')) {
			object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('add_to_cart_button_path')).removeClass('disabled');
		}
		object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('add_to_cart_button_path')).html(addToCartLabel);
		object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('add_to_cart_button_path')).removeAttr('disabled');
		object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('add_to_cart_button_path')).attr('href', res.addToCartUrl);
		object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('add_to_cart_button_path')).attr('data-id-product', object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find('.addToCartFormWrapper').attr('data-product-id'));
		object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('add_to_cart_button_path')).attr('data-id-product-attribute', res.id_product_attribute);
		object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('add_to_cart_button_path')).attr('data-minimal_quantity', res.minimal_quantity);
	}
	if (typeof res.images.medium !== 'undefined') {
		if (object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_thumbnail_image_path') + ' img').attr('src') != res.images.medium) {
			object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_thumbnail_image_path') + ' img').attr('src', res.images.medium);
		}	
	}
	if (object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_price_path')).html().trim() != res.prices.price) {
		regularPriceIsChanged = false;
		if (res.prices.has_discount && object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_old_price_path')).length > 0) {
			if (object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_old_price_path')).html().trim() != res.prices.regular_price) {
				regularPriceIsChanged = true;
			}
		}
		setTimeout(function() {
			if (regularPriceIsChanged) {
				object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_old_price_path')).html(res.prices.regular_price);
			}
			object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_price_path')).html(res.prices.price);
		}, 350);
	}
	$('.preLoading').remove();
}

function showProductCountInput() {
	if (parseInt(combinationsInCatalogData.show_quantity) == 1) {
		$(getCorrectPathFromConfiguration('add_to_cart_button_path')).each(function() {
			if ($(this).siblings(".addToCartButtonNumber").length == 0) {
				$('<input class="input-group form-control addToCartButtonNumber" name="qty" placeholder="" value="1" min="1" type="number">').insertBefore($(this));
			}
		});
	}
}

function showOutOfStockLabel() {
	$(getCorrectPathFromConfiguration('add_to_cart_button_path')).each(function() {
		if (typeof $(this).attr('data-id-product') === typeof undefined || $(this).attr('data-id-product') === false) {
			$(this).addClass('disabled');
			$(this).addClass('disabledCombination');
			$(this).html(combinationsInCatalogData.button_out_of_stock[idLang].length > 0 ? '<span>' + combinationsInCatalogData.button_out_of_stock[idLang] + '</span>' : addToCartLabel);
		}
	})
}
function showProgressWheel(idProduct) {
	$('.addToCartFormWrapper[data-product-id=' + idProduct + ']').each(function() {
		$(this).parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('add_to_cart_button_path')).css('position', 'relative').append('<span class="preLoading"></span>');
		$(this).parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_thumbnail_image_path')).append('<span class="preLoading" style="width: 30px; height: 30px; left: auto; top: 5px; right: 5px; background-color: white !important;"></span>');
	});
}

function generateInput(idProduct, group, value) {
	$('.addToCartFormWrapper[data-product-id=' + idProduct + ']').each(function() {
		$(this).parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find('.addToCartForm').append("<input class='productCombinationsHiddenInput' name='group[" + group + "]' value='" + value + "' type='hidden' />");
	});
}

function getCorrectPathFromConfiguration(name) {
	correctValue = '.product-container';
	if (combinationsInCatalogData[name].length > 0) {
		correctValue = combinationsInCatalogData[name];
	} else {
		$(advancedFormFields).each(function(key, value) {
			if (value['name'] == name) {
				correctValue = value['init_value'];
			}
		});
	}
	return correctValue;
}