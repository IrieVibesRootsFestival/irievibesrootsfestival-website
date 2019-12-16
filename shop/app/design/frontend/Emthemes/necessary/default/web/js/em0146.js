/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
define([
    'jquery',
    'mage/smart-keyboard-handler',
    'mage/mage',
    'mage/ie-class-fixer',
    'mage/translate',
    'domReady!'
], function ($, keyboardHandler) {
    'use strict';

      /* sticky menu */
      if(EM.SETTING.STICKY_MENU == 1 && isMobile == 'false')
      {
             var $_e = $('.header.content');
              if ($_e.length) {            
                      var sticky_navigation = function() {
                          var wWindow = $(window).width();
                          var scroll_top = $(window).scrollTop();
                          var navpos = $('#header-position').offset().top;
                          if (wWindow > 767) {
                              if (scroll_top > navpos) {
                                  if (!$_e.hasClass('navbar-fixed-top')) {
                                      $_e.addClass('navbar-fixed-top');
                                  }
                              } else {
                                  if ($_e.hasClass('navbar-fixed-top')) { 
                                      $_e.removeClass('navbar-fixed-top');
                                    if($('.mobile-search-icon').hasClass('active'))
                                      $('.mobile-search-icon').click();

                                  }
                              }
                          } else {
                              if ($_e.hasClass('navbar-fixed-top')) {   
                                  $_e.removeClass('navbar-fixed-top');
                              }
                                  if($('.mobile-search-icon').hasClass('active'))
                                      $('.mobile-search-icon').click();

                          }
                      };
                      $(window).scroll(function() {
                          sticky_navigation();
                      });
                      sticky_navigation();
                            
              }
      }      

      /* ajaxcart */
      $('div.block-minicart').bind('contentUpdated',function(event){
                
            event.preventDefault();
            $('a.showcart').click();
            $(this).parent().show();
            setTimeout(function() {                              
                  $('#btn-minicart-close').click();
                  $('div.minicart-wrapper').removeClass('show-cart');
                  $('div.block-minicart').parent().hide();
                  return;
            }, 5000); 
      });
  /*    var currentCartButton;
      $('body').bind('startAjaxcart',function(event){
            event.preventDefault();                        
            if($('.action.tocart.disabled').length)            
                  currentCartButton = $('.action.tocart.disabled');
      });
      $('body').bind('stopAjaxcart',function(event){                 
            event.preventDefault();
            currentCartButton.addClass('added');
            $('div.minicart-wrapper').addClass('show-cart');
            $('a.showcart').click();
	      var countdown = setTimeout(function() {
		      $('#btn-minicart-close').click();
		      currentCartButton.removeClass('added');
                  $('div.minicart-wrapper').removeClass('show-cart');
		      return;
	      }, 5000);            
	      
      });
      
      function showTop(element) {
		var w = $(window).width();
		if (w <= 767) {
			var pop_width = (w - 300) / 2;
			$(element).css({
				"top": "15px",
				"left": Math.round(pop_width) + 'px',
			});
		} else {
			var pop_width = (w - 400) / 2;
			$(element).css({
				"top": "15px",
				"left": Math.round(pop_width) + 'px',
			});
		}
	};*/
	
	/* retina images */
       if (window.devicePixelRatio > 1 ||
             (window.matchMedia && window.matchMedia("(-webkit-min-device-pixel-ratio: 1.5),(-moz-min-device-pixel-ratio: 1.5),(min-device-pixel-ratio: 1.5)").matches)) 
       {
	        var images = $('img.retina-img');
              var len = images.length;
              if(len){
                    /* loop through the images and make them hi-res */
		        for(var i = 0; i < len; i++) {    
			      /* create new image name */
			      var imageType = images[i].src.substr(-4);
			      var imageName = images[i].src.substr(0, images[i].src.length - 4);
			      imageName += "@2x" + imageType;

			      /* rename image */
			      images[i].src = imageName;
		        }
              }
       };
});

