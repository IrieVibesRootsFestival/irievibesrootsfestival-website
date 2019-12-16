<?php
/**
 * Copyright © 2015 Emthemes . All rights reserved.
 */
namespace Emthemes\QuickShop\Helper;
use Magento\Framework\App\Filesystem\DirectoryList;
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	protected $_storeManager;
	protected $_scopeConfig;
	/**
     * @param \Magento\Framework\App\Helper\Context $context
     */
	public function __construct(
		\Magento\Framework\App\Helper\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager
		//\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
	) {
		parent::__construct($context);
		$this->_storeManager = $storeManager;
		$this->_scopeConfig = $context->getScopeConfig();//$scopeConfig;
	}
	public function getQuickShopUrl($_product){
		$id = $_product->getId();
		return $this->getBaseUrl().'quickshop/index/view/id/'.$id;
	}
	public function getQuickShopButton($_product, $class = ''){
		$quickShopUrl = $this->getQuickShopUrl($_product);
		$quickShopLabel = $this->getQuickShopLabel();
		$html  = "<a class=\"qs-button {$class}\" href=\"javascript:void(0)\" data-href=\"{$quickShopUrl}\">";
		$html .= "<span><span>{$quickShopLabel}</span></span>";
		$html .= "</a>";
		return $html;
	}
	public function getConfig($fullPath){
		return $this->_scopeConfig->getValue($fullPath, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	public function getQuickShopLabel(){
		return $this->_scopeConfig->getValue('quickshop/general/label', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);	
	}
	public function getBaseUrl(){
		return $this->_storeManager->getStore()->getBaseUrl();
	}
}
