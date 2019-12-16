/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
define([
    'jquery',
    'mage/smart-keyboard-handler',
    'domReady',
    'mage/mage',
    'mage/ie-class-fixer',
    'js/camera',
    'js/custom-scripts'
], function ($, keyboardHandler, domReady) {  
    'use strict';

    if ($('body').hasClass('checkout-cart-index')) {
        if ($('#co-shipping-method-form .fieldset.rates').length > 0 && $('#co-shipping-method-form .fieldset.rates :checked').length === 0) {
            $('#block-shipping').on('collapsiblecreate', function () {
                $('#block-shipping').collapsible('forceActivate');
            });
        } 
    }

    $('.cart-summary').mage('sticky', {
        container: '#maincontent'
    });



    $('.panel.header > .header.links').clone().appendTo('#store\\.links');

    keyboardHandler.apply();

    var homeBodyClass = 'cms-index-index';
    if($('body').hasClass(homeBodyClass)){
        $(function(){
            $('#camera_wrap').camera({
                alignmen: 'topCenter',
                height: '37.9746835443038%',
                minHeight: '100px',
                loader : false,
                navigation: true,
                fx: 'simpleFade',
                navigationHover:false,
                thumbnails: false,
                playPause: false,
                pagination:false
            });
        });
    };


});
