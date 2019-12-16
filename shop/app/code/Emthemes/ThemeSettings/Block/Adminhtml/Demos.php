<?php

namespace Emthemes\ThemeSettings\Block\Adminhtml;
use Magento\Framework\App\Area;
use Magento\Framework\View\Design\ThemeInterface;
use Magento\Theme\Model\Theme\Collection;
/**
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Demos extends \Magento\Backend\Block\Widget
{
	protected $themeCollectionFactory;
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Emthemes\ThemeSettings\Model\Config\Structure $configStructure,
        array $data = []
    ) {
        $this->_configStructure = $configStructure;
        parent::__construct($context, $data);
    }
    
    protected function _prepareLayout()
    {
    	$this->setTitle(__("Emthemes design"));
    }

}
