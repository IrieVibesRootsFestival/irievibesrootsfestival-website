
define([
    'jquery',
    'mage/mage',
    'mage/ie-class-fixer'
], function ($) {

//===================================================================



    $(document).ready(function(){
        $(".account-links-menu_btn").click(function(){
            $(".account-links-menu_wrapper").addClass('active');
            $(".account-links-menu").addClass('active');
        });
    });
    $(document).on("click", function(event){
        var $trigger = $(".account-links-menu_btn");
        if($trigger !== event.target && !$trigger.has(event.target).length){
            $(".account-links-menu_wrapper").removeClass('active');
            $(".account-links-menu").removeClass('active');
        }
    });


    /* Footer accordion */

    var flag = true;
    function footer_accordion(){
        var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        elementTitle = '.footer-col-wrapper .footer-col h4';
        elementHide =  '.footer-col-wrapper .footer-col .footer-col-content';
        elementAdd = 'opened';

        if (width > 767) {
            if (!flag) {
                flag = true;
                $(elementTitle).unbind("click");
                $(elementHide).removeAttr('style');
            }
        } else {
            if (flag) {
                flag = false;
                $(elementTitle).on("click", function(){
                    if ($(this).attr('class') == 'opened') {
                        $(this).removeClass('opened');
                        $(this).next(elementHide).slideToggle();
                    }
                    else {
                        $(this).addClass('opened');
                        $(this).next(elementHide).slideToggle();
                    }
                    return false;
                });
            }
        }
    }
        $(window).on("load resize", function () {
            clearTimeout(this.id);
            this.id = setTimeout(footer_accordion, 500);
        });


    /* Footer accordion END */


//===================================================================

});


