/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
define([
    "jquery",
    "matchMedia",
    "jquery/ui",
    "jquery/jquery.mobile.custom",
    "mage/translate"
], function ($, mediaCheck) {
    'use strict';
  
      /* Collapsible */
      $.widget('em.emcollapsible', {
        options: {
            collapseTarget: null
        },

      _create: function(){
            var sCollap = this.element;
            var len = sCollap.length;
            var target = $(this.options.collapseTarget);            
            if(len){
            mediaCheck({
                    media: '(max-width: 767px)',
                    entry: function () {
                         sCollap.removeClass('em-collapsed non-collapsed').addClass('non-collapsed');
                  
                          
                          if(target.length){
                              if(target.is(':visible')){
                                  target.hide(200,function(){
                                      $(this).css('overflow','inherit');
                                  });
                              }
                          }                    

                            sCollap.unbind('click');
                            sCollap.click(function(){
                                var $this = $(this);
                                $this.toggleClass('non-collapsed');
                                $this.toggleClass('em-collapsed');
                                target.slideToggle(200,function(){
                                    $(this).css('overflow','inherit');
                                });
                            });
                    },
                    exit: function () {
                        sCollap.removeClass('em-collapsed non-collapsed');
                        sCollap.unbind('click');      
                          if(target.length){
                              if(!target.is(':visible')){
                                  target.show(200,function(){
                                      $(this).css('overflow','inherit');
                                  });
                              }
                          }                    
                    }
                });
          }
      }
            
            
    });
    return $.em.emcollapsible;
});

