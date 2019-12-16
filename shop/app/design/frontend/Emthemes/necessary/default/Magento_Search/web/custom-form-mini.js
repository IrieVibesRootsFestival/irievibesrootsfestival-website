/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
/*jshint browser:true jquery:true*/
define([
    'jquery',
    'underscore',
    'mage/template',
    'jquery/ui',
    'mage/translate'
], function ($, _, mageTemplate) {
    'use strict';
    $.widget('mage.customSearchForm', {
        options: {  
			timeoutSearch: null,
			container: 'em-container-js-search',
			wrapper: 'em-wrapper-js-search'
        },
		function hideSearch(e) {
            var $_container = e.children().find(this.options.container);
            if (timeoutSearch) clearTimeout(timeoutSearch);
            timeoutSearch = setTimeout(function() {
                timeoutSearch = null;
                $_container.hide(300, function() {
                    $(this).css('overflow', 'inherit');
                });
            }, 200);
        }
        // Show Cart    
        function showSearch(e) {
            var $_container = e.children().find(this.options.container);
            if (timeoutSearch) clearTimeout(timeoutSearch);
            timeoutSearch = setTimeout(function() {
                timeoutSearch = null;
                $_container.show(300, function() {
                    $(this).css('overflow', 'inherit');
                });
            }, 200);
        }
        _create: function () {
            this.responseList = {
                indexList: null,
                selected: null
            };
			this.emSearch = $(this.options.wrapper);
            _.bindAll(this, '_mouseover', '_mouseout');
        },
        

        /**
         * Executes when the value of the search input field changes. Executes a GET request
         * to populate a suggestion list based on entered text. Handles click (select), hover,
         * and mouseout events on the populated suggestion list dropdown.
         * @private
         */
        _mouseover: function (e) {
			 e.preventDefault();
            var $_this = $(this);
            showSearch($_this);		
        }
		_mouseout: function (e) {
            e.preventDefault();
            var $_this = $(this);
            hideSearch($_this);
        }
    });

    return $.mage.customSearchForm;
});
