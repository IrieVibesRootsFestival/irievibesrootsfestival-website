<?php
/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Emthemes\ThemeSettings\Controller\Adminhtml\Theme;

class Save extends \Magento\Backend\App\Action
{
    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
        $path = \Magento\Framework\View\DesignInterface::XML_PATH_THEME_ID;
        /** @var $section \Magento\Config\Model\Config\Structure\Element\Section */
        $config = $this->_objectManager->create('Magento\Config\Model\Config');
        $this->settheme = $this->getRequest()->getParam('settheme');
        $this->session = 'design';
        $this->website = $this->getRequest()->getParam('website');
        $this->store = $this->getRequest()->getParam('store');
        $this->code = $this->getRequest()->getParam('code');
        
        $params = array();
        $params['code'] = $this->code;
    	if($this->website)
    	{
    		$params['website'] = $this->website;
    	}
    	if($this->store)
    	{
    		$params['store'] = $this->store;
    	}
        $config->setData($params);
        
        if($this->website)
        {
        	$config->setDataByPath($path,$this->settheme);
        	$config->save();
        }
        else if($this->store)
        {
        	$collection = $this->_objectManager->create('\Magento\Theme\Model\ResourceModel\Design\Collection');
        	$collection->addFieldToFilter('store_id',$this->store);
        	$design = $collection->getFirstItem();
        	
        	if(!$design->getDesign())
        	{
        		$design = $this->_objectManager->create('\Magento\Framework\App\DesignInterface');
        	}
        	$design->setStoreId($this->store);
        	$design->setDesign($this->settheme);
        	$design->save();
        }
        else
        {
        	$config->setDataByPath($path,$this->settheme);
        	$config->save();
        }
        
        //change default cms home page
        $themeConfig = $this->_objectManager->create('\Emthemes\ThemeSettings\App\Config');
        $cmsHomePage = $themeConfig->getValue('cms_home_page', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $config->setDataByPath('web/default/cms_home_page',$cmsHomePage);
    	$config->save();
        
    	$this->_redirect('themesettings/theme/index',$params);
    }
}
