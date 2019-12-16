<?php
/**
 * Copyright © 2015 Emthemes . All rights reserved.
 */
namespace Emthemes\ThemeSettings\Helper;
use Magento\Framework\App\Filesystem\DirectoryList;
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	protected $_storeManager;
	protected $_scopeConfig;
	protected $_pageConfig;
	/**
     * @param \Magento\Framework\App\Helper\Context $context
     */
	public function __construct(
		\Magento\Framework\App\Helper\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
		\Emthemes\ThemeSettings\App\Config $themeConfig,
		\Magento\Framework\App\Config $scopeConfig,
		\Emthemes\ThemeSettings\Model\ConfigFactory $configFactory,
		\Magento\Framework\ObjectManagerInterface $objectManager,
		\Magento\Framework\View\Page\Config $pageConfig
	) {
		parent::__construct($context);
		$this->_storeManager = $storeManager;
		$this->_scopeConfig = $scopeConfig;
		$this->_themeConfig = $themeConfig;
		//echo get_class($scopeConfig);die;

		$this->_pageConfig = $pageConfig;
		$this->_configFactory = $configFactory;
		
	}
	
	public function getConfig($fullPath){
		//return $this->_themeConfig->getConfigDataValue($fullPath);
		return $this->_themeConfig->getValue($fullPath);
	}
	public function getThemeSettingsLabel(){
		return $this->_scopeConfig->getValue('ThemeSettings/general/label', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);	
	}
	public function getBaseUrl(){
		return $this->_storeManager->getStore()->getBaseUrl();
	}
	public function checkMobile(){

		$detect = new Mobile();
              $checkmobile = $detect->isMobile();
              if($checkmobile){
                  return 'true';            
              }else{
                  return 'false';
              }
	}
	public function checkDevice(){

		$detect = new Mobile();		
            if( $detect->isMobile() ){            
                if( $detect->isTablet() ){
                // Any tablet device.
                return 'tablet';
                 }else{
                // Exclude tablets.
                return 'mobile';
            }
        }else{
            return 'desktop';
        }
	}
	public function getPageConfig(){
	      return $this->_pageConfig->getPageLayout();
	}
}
