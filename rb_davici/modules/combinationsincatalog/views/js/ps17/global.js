/*
* 2018 Singleton software
*
*  @author Singleton software <info@singleton-software.com>
*  @copyright 2018 Singleton software
*/

var addToCardProductID;

$(document).ready(function() {
	appendCartControllerLink();
	resizeCombinationsSection();

	prestashop.on('updateCart', function (event) {
		if (event.reason.linkAction == 'add-to-cart') {
			addToCardProductID = event.reason.idProduct;
			displayProgressWheel(addToCardProductID, true);
			//pokial je ps verzia vascia, alebo rovna 1750, nefunguje emit "updatedCart", v ktorom bolo zastavene tocenie progress wheelu po pridani produktu do kosika, tak sa to zastavi samo po sekunde
			if (greaterThan1750) {
				setTimeout(function() {
					displayProgressWheel(addToCardProductID, false);
				}, 1000);
			}
		}
	});
	
	// po tom ako sa vlozi produkt do kosika sa zavola emit "updatedCart"
	prestashop.on('updatedCart', function (event) {
		if (typeof addToCardProductID !== 'undefined') {
			displayProgressWheel(addToCardProductID, false);
			addToCardProductID = undefined;
		}
	});
	
	// vzdy po zbehnuti akehokolvek filtru v katalogu produktov (blocklayered, paginacia, zoradenie), sa cez tento emit vykreslia nanovo ceny prefiltrovanych produktov
	prestashop.on('updateProductList', function (data) {
		appendCartControllerLink();
		resizeCombinationsSection();
	});
	
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
});

function resizeCombinationsSection() {
	$('.addToCartFormWrapper').each(function() {
		appendProgressWheel($(this).attr('data-product-id'));
		$(this).parents(getCorrectPathFromConfiguration('miniature_thumbnail_container_path') + ':eq(0)').css('margin-bottom', $(this).find('.addToCartForm').height() + 50 + 'px');
	});
}

function appendCartControllerLink() {
	$('.addToCartFormWrapper').each(function() {
		$(this).find('.addToCartForm').attr('action', cartControllerLink);
	});
}

function getCombinationsForProducts(idProduct, query) {
	displayProgressWheel(idProduct, true);
	$.ajax({
		type: "POST",
		url: productCombinationsControllerLink,
		async: false,
		data : query,
		dataType: 'json',
		success : function(res) {
			$('.addToCartFormWrapper[data-product-id=' + idProduct + ']').each(function(){
				refreshCombinations($(this), res);
			});
		}
	});
}

function refreshCombinations(object, res) {
	object.find('.variants-product').remove();
	object.find('.variantsProductWrapper').append(res.productVariants);
	if (parseInt(combinationsInCatalogData.display_add_to_cart) == 1) {
		object.find('.add-to-cart').html(((res.addToCartUrl == null && combinationsInCatalogData.button_out_of_stock[idLang].length > 0) ? combinationsInCatalogData.button_out_of_stock[idLang] : addToCartLabel));
		object.find('.add-to-cart').prop('disabled', (res.addToCartUrl == null));
		object.find('.addToCartButtonNumber').prop('disabled', (res.addToCartUrl == null));
		object.find('.addToCartButtonNumber').val(res.quantity_wanted);
		object.find('.addToCartButtonNumber').attr('min', res.minimal_quantity);
	}
	if (typeof res.images.medium !== 'undefined') {
		if (object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_thumbnail_image_path')).attr('src') != res.images.medium) {
			object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_thumbnail_image_path')).attr('src', res.images.medium)
			object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_thumbnail_image_path')).attr('data-full-size-image-url', res.images.large);
		}
	}
	if (object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_price_path')).html().trim() != res.prices.price) {
		regularPriceIsChanged = false;
		if (res.prices.has_discount && object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_old_price_path')).length > 0) {
			if (object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_old_price_path')).html().trim() != res.prices.regular_price) {
				regularPriceIsChanged = true;
			}
		}
		if (regularPriceIsChanged) {
			object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_old_price_path')).html(res.prices.regular_price);
		}
		object.parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_price_path')).html(res.prices.price);
	}
	displayProgressWheel(idProduct, false);
}

function appendProgressWheel(idProduct) {
	$('.addToCartFormWrapper[data-product-id=' + idProduct + ']').each(function() {
		if ($(this).parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find("button[data-button-action='add-to-cart']").length > 0) {
			$(this).parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find("button[data-button-action='add-to-cart']").css('position', 'relative').append('<span class="preLoading"></span>');
		} else {
			$(this).parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find(getCorrectPathFromConfiguration('miniature_thumbnail_container_path')).append('<span class="preLoading" style="width: 30px; height: 30px; left: auto; top: 5px; right: 5px; background-color: white !important;"></span>');
		}
	});
}

function displayProgressWheel(idProduct, display) {
	$('.addToCartFormWrapper[data-product-id=' + idProduct + ']').each(function() {
		$(this).parents(getCorrectPathFromConfiguration('miniature_root_path') + ':eq(0)').find('.preLoading').css('display', (display ? 'block' : 'none'));
	});
}

function generateInput(idProduct, group, value) {
	$('.addToCartFormWrapper[data-product-id=' + idProduct + ']').each(function() {
		$(this).find('.addToCartForm').append("<input class='productCombinationsHiddenInput' name='group[" + group + "]' value='" + value + "' type='hidden' />");
	});
}

function getCorrectPathFromConfiguration(name) {
	correctValue = '.product-miniature';
	if (combinationsInCatalogData[name].length > 0) {
		correctValue = combinationsInCatalogData[name];
	} else {
		$(advancedFormFields).each(function(key, value){
			if (value['name'] == name) {
				correctValue = value['init_value'];
			}
		});
	}
	return correctValue;
}