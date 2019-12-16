/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
define([
    "jquery",    
    "jquery/ui",
    "jquery/jquery.mobile.custom",
], function ($) {
    'use strict';
   /* set Height for element */
    $.widget('em.equalElement', {
        options: {
            target: '.product-item-details'
        },
            _create: function(){
                var $_e = this.element;                
                if($_e.length){
                    var $_maxHeight= 0;
                    var $listItems = $_e.find(this.options.target);            
                    var lenLi = $listItems.length;
                    $listItems.css('height', '');
                    if(lenLi>1){
                        for(var j=0;j<lenLi;j++){                
                            $_maxHeight = Math.max($_maxHeight, $listItems.eq(j).outerHeight());
                        }
                    }
                    $listItems.css('min-height', $_maxHeight + 'px');        
                }
            }
            
            
    });     
    return $.em.equalElement;          
});

