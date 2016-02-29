/**
 * Created by drammer on 26.12.15.
 */
jQuery(document).ready(function(){
    jQuery('.list-group .clearfix').last().addClass('no-border');

    var windDeskH = jQuery('html').height();
    var contentHeight = jQuery('#primary').height();
    if(contentHeight > windDeskH){
        jQuery('html').css('height', 'auto');
    }
});
jQuery(function($) {
    function activeMailBox() {
        $('[data-toggle="for-active-mail"]').on('click', function () {
            $('.wrapp-left-input-box').addClass('active');
            $('.wrapp-all-right-mail-box').addClass('active');
        });
        $('[data-toggle="for-active-address"]').on('click', function () {
            if ($('.wrapp-left-input-box').hasClass('active')) {
                $('.wrapp-left-input-box').removeClass('active');
            }
            if ($('.wrapp-all-right-mail-box').hasClass('active')) {
                $('.wrapp-all-right-mail-box').removeClass('active');
            }
        });

        $('.button-for-callback-hide').on('click', function () {
            $('.box-callback-form').addClass('active');
            $('.map-big').addClass('active');
        });
        $('.button-for-callback-show').on('click', function () {
            if ($('.box-callback-form').hasClass('active')) {
                $('.box-callback-form').removeClass('active');
            }
            if ($('.map-big').hasClass('active')) {
                $('.map-big').removeClass('active');
            }
        });


    }

    activeMailBox();
});