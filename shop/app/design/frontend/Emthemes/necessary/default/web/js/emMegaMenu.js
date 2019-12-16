/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
define([
    'jquery',
    'mage/mage',
    'matchMedia',
    'mage/ie-class-fixer',
    'domReady!'
], function ($) {
    'use strict';
      /**
     * Fix mega menu drop-down's container overflows the right edge of page.
     *
     * Should be called once when document ready
     */


        function fix($container, $nav) {
            var pad = $nav.offset().left + $nav.outerWidth() - ($container.offset().left + $container.outerWidth());
            var pad2 = $container.offset().left + pad - $nav.offset().left;
            if (pad2 < 0) pad = pad - pad2;
            if (pad < 0) {
                $container.css('left', pad - 10 + 'px');
            }
        };
        $('.em-menu > .em-menu-content > .submenu > .dropmenu-template').parent().hover(function() {
            var $container = $(this).children('.dropmenu-template');
            if ($(this).hasClass('level0')) $container.css('left', 0);
            var $nav = $(this).parents('.header-wrapper-container').first();
            if($nav.length){fix($container, $nav);}            
        }, function() {
            $(this).children('.dropmenu-template').css('left', '');
        });
        
        function mobile() { 
              
          };
        
      mediaCheck({
        media: '(min-width: 768px)',
        // Switch to Desktop Version
        entry: function () {
            return;
        },
        // Switch to Mobile Version
        exit: function () {
            var sNav = $('.em-menu');         
            var len = sNav.length;       
            if(len){
                  for (var i=0;i<len; i++) {
                      var $nav = $('.em-menu-content', sNav.eq(i));
                      $('a.arrow', $nav).bind('click', function(event) {                    
                          event.preventDefault();
                          event.stopPropagation();
                          var $li = $(this.parentNode);                    
                          if (!$li.hasClass('cur-toggle') && $('li.cur-toggle', $nav).length > 0 && !($li.parents('li.cur-toggle').length > 0)) {
                              var sLi = $('li.cur-toggle', $nav);
                              var lenLi = $('li.cur-toggle', $nav).length;
                              for(var j=0;j<lenLi;j++){
                                  sLi.eq(j).removeClass('cur-toggle');
                                  if (sLi.eq(j).css('display') != 'none') {
                                      sLi.eq(j).children('ul').slideToggle();
                                  }
                              }
                          }
                          // fix bug event called twice cause menu sub menu showed even not clicked
                          // don't know why it happens!!!
                                                  
                          $li.children('ul').slideToggle();                    
                          if ($li.hasClass('cur-toggle')){
                              $li.removeClass('cur-toggle');
                          } else{
                              if($li.parents('li.cur-toggle').length == 0){                            
                                  $li.addClass('cur-toggle');  
                              } 
                          }                  
                      });
                  }
            }
            }           
          });

});

