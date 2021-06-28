/*
 *  @Website: rubiktheme.com - prestashop template provider
 *  @author rubiktheme <rubiktheme@gmail.com>
 *  @copyright rubiktheme
 *  @description: Rb Theme Dream is module help you can build content for your shop
 */
/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */

/**************** CUSTOM ************/


// clik search
$(document).ready(function () {
    backtotop();
    ajaxLoading();

    $('#search-widget #click_show_search, #rb-login .popup-title, #gr-lang .popup-title').click(function () {
        var check = 0;
        if ($(this).parent().hasClass('active')) {
            check = 1;
        }
        $('.popup-title').parent().removeClass('active');
        if (check == 0) {
            $(this).parent().addClass('active');
        }
    });

});

// Back to top
function backtotop() {
    $("#rb-back-top").hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#rb-back-top').fadeIn();
        } else {
            $('#rb-back-top').fadeOut();
        }
    });

    // scroll body to 0px on click
    $('#rb-back-top a').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
}

// clik showmenu
$(function () {
    $('#click_show_menu').click(function (e) {
        e.stopPropagation();
        if ($('.menu-sidebar').hasClass('active')) {
            $('.menu-sidebar').removeClass('active');
        }
        else {
            $('.menu-sidebar').addClass('active');
        }
        if ($('.bg-over-lay').hasClass('show-over-lay')) {
            $('.bg-over-lay').removeClass('show-over-lay');
        }
        else {
            $('.bg-over-lay').addClass('show-over-lay');
        }
    });
    $('#click_off_menu').click(function (e) {
        e.stopPropagation();
        if ($('.menu-sidebar').hasClass('active')) {
            $('.menu-sidebar').removeClass('active');
        }
        if ($('.bg-over-lay').hasClass('show-over-lay')) {
            $('.bg-over-lay').removeClass('show-over-lay');
        }
        if ($('body').hasClass('off-canvas-active')) {
            $('body').removeClass('off-canvas-active');
        }
    });
    //close menu when click out
    $(document).click(function (event) {
        if (!$(event.target).closest('.menu-sidebar.active').length) {
            if ($('.menu-sidebar.active').is(":visible")) {
                $('.menu-sidebar.active').removeClass('active');
                $('.bg-over-lay.show-over-lay').removeClass('show-over-lay');
            }
        }
    });
});

// Loading Product
function ajaxLoading()
{
	if ($('#product').length > 0) {
		$(document).ajaxSend(function(event, jqxhr, settings) {
			if (typeof settings.data != 'undefined' &&
				settings.data.indexOf('qty=1&add=1&action=update') != -1) {
				$('.add-to-cart-loading').show();
			}

			if (typeof settings.data != 'undefined' &&
				settings.data.indexOf('ajax=1&action=refresh&quantity_wanted=1') != -1) {
				$('.main-product-details-loading').show();
			}
		});

		$(document).ajaxComplete(function(event, jqxhr, settings) {
			if (typeof settings.data != 'undefined' &&
				settings.data.indexOf('qty=1&add=1&action=update') != -1) {
				$('.add-to-cart-loading').hide();
			}
			if (typeof settings.data != 'undefined' &&
				settings.data.indexOf('ajax=1&action=refresh&quantity_wanted=1') != -1) {
				$('.main-product-details-loading').hide();
			}
		});
	}

}