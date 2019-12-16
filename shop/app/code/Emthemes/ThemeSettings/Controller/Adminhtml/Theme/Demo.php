<?php
/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Emthemes\ThemeSettings\Controller\Adminhtml\Theme;

class Demo extends \Magento\Backend\App\Action
{
    /**
     * Index action
     *
     * @return void
     */
    /*public function execute()
    {
        $this->_view->loadLayout();
        $this->_setActiveMenu('Emthemes_Settings::emthemes_settings');
        $this->_view->renderLayout();
    }*/
    
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Emthemes\ThemeSettings\Model\Config\Structure $configStructure,
        //\Magento\Config\Controller\Adminhtml\System\ConfigSectionChecker $sectionChecker,
        \Emthemes\ThemeSettings\Model\Config $backendConfig,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Registry $registry
    ) {
        parent::__construct($context);
        $this->_configStructure = $configStructure;
        $this->resultPageFactory = $resultPageFactory;
        $this->_objectManager = $context->getObjectManager();
        $this->registry = $registry;
    }
    
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        
        $resultPage->getConfig()->getTitle()->prepend(__('Emthemes Designs'));
        return $resultPage;
    }
}
