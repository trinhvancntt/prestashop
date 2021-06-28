/**
*  PrestaShop
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
*  @copyright  PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*
* Don't forget to prefix your containers with your own identifier
* to avoid any conflicts with others containers.
*/
$(document).ready(function () {
    $.widget('prestashop.psBlockSearchAutocomplete', $.ui.autocomplete, {
    });

    $('.rb-search').psBlockSearchAutocomplete({
        source: function (query, response) {
            $('.rb-search-name .rb-ajax-loading').show();
            $.post(url_ajax, {
                token: token,
                action1: 'findProductByName',
                name: query.term,
                ajax: 1
            }, null, 'json')
            .then(function (data) {
              $('.rb-search-name .rb-ajax-loading').hide();
              
              if (data.success == 1) {
                $('.rb-resuilt').html(data.message);
                $('.rb-resuilt').show();
                $('.rb-resuilt-error').hide();

                $('body').click(function() {
                  $('.rb-resuilt').html('');
                  $('.rb-resuilt').hide();
                  $('.rb-resuilt-error').hide();
                });
              }

              if (data.success == 0){
                $('.rb-resuilt').html('');
                $('.rb-resuilt').hide();
                $('.rb-resuilt-error').html(data.message);
                $('.rb-resuilt-error').show();
              } 
            })
            .fail(response);
        },
        select: function (event, ui) {
            var url = ui.item.url;
            window.location.href = url;
        },
    });
});