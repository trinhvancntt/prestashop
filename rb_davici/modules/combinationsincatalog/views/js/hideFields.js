/*
* 2018 Singleton software
*
*  @author Singleton software <info@singleton-software.com>
*  @copyright 2018 Singleton software
*/

$(document).ready(function() {
	displayQuantityOfProductsField(parseInt($("input[name='display_add_to_cart']:checked").val()) == 1);
	displayCombinationDisplayTypeFields(parseInt($("input[name='combinations_display_type']:checked").val()));
	displayAdvancedOptionsFields(parseInt($("input[name='show_advanced_options']:checked").val()) == 1);
	
	$("input[name='display_add_to_cart']").click(function() {
		displayQuantityOfProductsField(parseInt($("input[name='display_add_to_cart']:checked").val()) == 1);
	});
	$("input[name='combinations_display_type']").click(function() {
		displayCombinationDisplayTypeFields(parseInt($("input[name='combinations_display_type']:checked").val()));
	});
	$("input[name='show_advanced_options']").click(function() {
		displayAdvancedOptionsFields(parseInt($("input[name='show_advanced_options']:checked").val()) == 1);
	});
});

function displayQuantityOfProductsField(isDisplay) {
	displayField("input[name='show_quantity']:eq(0)", (ps17 && isDisplay) || !ps17);
	displayField(".buttonOutOfStock:eq(0)", (ps17 && isDisplay) || !ps17);
}

function displayCombinationDisplayTypeFields(optionType) {
	displayField("input[name='show_attributes_labels']:eq(0)", optionType == 0);
	displayField("input[name='show_color_as_labels']:eq(0)", optionType == 0);
	displayField("input[name='show_out_of_stock']:eq(0)", optionType == 1);
	displayField("input[name='show_price_for_combination']:eq(0)", optionType == 1);
}

function displayAdvancedOptionsFields(isDisplay) {
	$(advancedFormFields).each(function(key, value){
		displayField("." + value['class'], isDisplay);
	});
}

function displayField(identification, isDisplay) {
	if (isDisplay) {
		$(identification).parents(".form-group").show();
	} else {
		$(identification).parents(".form-group").hide();
	}
}