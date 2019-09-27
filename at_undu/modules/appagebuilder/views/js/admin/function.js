/*
 *  @Website: apollotheme.com - prestashop template provider
 *  @author Apollotheme <apollotheme@gmail.com>
 *  @copyright  2007-2018 Apollotheme
 *  @description: 
 */

function SetButonSaveToHeader() {
    var html_save_and_stay = 
    '<li>' +
        '<a id="page-header-desc-appagebuilder_shortcode-SaveAndStay" class="toolbar_btn  pointer" href="javascript:void(0);" title="Save and stay" onclick="TopSaveAndStay()">' +
            '<i class="process-icon-save"></i>' +
            '<div>Save and stay</div>' +
        '</a>' +
    '</li>';
    $('.toolbarBox .btn-toolbar ul').prepend(html_save_and_stay);
    
}

function TopSave(){
    if (typeof TopSave_Name !== 'undefined') {
        $("button[name$='"+TopSave_Name+"']").click();
    }
}

function TopSaveAndStay(){
    if (typeof TopSaveAndStay_Name !== 'undefined') {
        $("button[name$='"+TopSaveAndStay_Name+"']").click();
    }
}