(function (factory) {
    if (typeof define === "function" && define.amd) {
        define([
            "jquery",
            "jquery/ui",
			'Magento_Ui/js/modal/modal'
        ], factory);
    } else {
        factory(jQuery);
    }
}(function ($) {
	"use strict";
	$.widget('custom.EmthemesQuickShop', {
		options: {
			itemClass: '.products.grid .item.product-item, .products.list .item.product-item',
			qsLabel: 'Quick Shop',
			handlerClass: 'qs-button',
			baseUrl: '/',
			modalId: 'quickshop',
			autoAddButtons: true,
			target: '.product-item-info'
		},
		 _create: function(){
			 this._buildQuickShop(this.options);
		 },
		 _addButton: function(config){
			if(config.autoAddButtons){
				$(config.itemClass).each(function() {
					var $elem = $(this);
					if($elem.find('.'+config.handlerClass).length == 0){
						var productId = $elem.find('.price-final_price').data('product-id');
						var url = config.baseUrl + 'quickshop/index/view/id/' + productId;
						var html = '<div class="qs-btn-container"><a class="'+config.handlerClass+'" href="javascript:void(0)" data-href="'+url+'"><span>';
						html += config.qsLabel;
						html += '</span></a></div>';
						$elem.find(config.target).prepend(html);
					}
				});
			}
			$('.'+config.handlerClass).bind('mouseover',function(){
				var $button = $(this);
				qsUrl = $button.data('href');
			});
		},
		_buildQuickShop: function(config){
			this._addButton(config);
			var $modal = $('#'+config.modalId)
			$modal.modal({
				innerScroll: true,
				title: config.qsLabel,
				trigger: '.'+config.handlerClass,
				wrapperClass: 'qs-modal',
				buttons: [],
				opened: function(){
					var $loader = $modal.find('.qs-loading-wrap');
					var $content = $modal.find('.qs-content');
					$loader.show(); $content.hide();
					$.ajax({
						url:qsUrl,
						type: 'POST',
						cache:false,
						success: function(res){
							$content.html(res).trigger('contentUpdated');
							$content.show();
							//If product type is bundle
							if($content.find('#bundle-slide').length > 0){
								var $bundleBtn = $content.find('#bundle-slide');
								var $bundleTabLink = $('#tab-label-quickshop-product-bundle-title');
								$bundleTabLink.parent().hide();
								$bundleBtn.unbind('click').click(function(e){
									e.preventDefault();
									$bundleTabLink.parent().show();
									$bundleTabLink.click();
									return false;
								});
							}
							//If use swatches
							if($content.find('.swatch-opt').length > 0){
								var $swatchOpt = $content.find('.swatch-opt');
								$content.find('.field.configurable').hide();
								setTimeout(function(){
									$swatchOpt.find('.swatch-option').each(function(){
										var $this = $(this);
										$this.bind('mouseup',function(){
											$content.find('#product-addtocart-button').attr('disabled','disabled');
											var opId = $this.attr('option-id');
											var $curOpt = $content.find('select.super-attribute-select option[value="'+opId+'"]').first();
											if($this.hasClass('selected')){
												$curOpt.parent().val('').trigger('change');
											}else{
												$curOpt.parent().val(opId).trigger('change');
											}
											$content.find('#product-addtocart-button').removeAttr('disabled');
										});
									});
								},100);
							}
							//If use reviews
							if($content.find('#tab-label-quickshop-reviews-title').length > 0){
								var $reviewsTabLink = $content.find('#tab-label-quickshop-reviews-title');
								$content.find('.reviews-actions .action.view').click(function(){
									$reviewsTabLink.click();
								});
								$content.find('.reviews-actions .action.add').click(function(){
									$reviewsTabLink.click();
									$content.find('#nickname_field').focus();	
								})
							}
						}
					}).always(function(){$loader.hide();});
				},
				closed: function(){
					$modal.find('.qs-content').html('');
				}
			});
		}
	});
	return $.custom.EmthemesQuickShop;
}));