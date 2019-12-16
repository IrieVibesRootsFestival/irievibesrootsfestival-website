<?php 

namespace Emthemes\ThemeSettings\Block\Adminhtml\Config\Form\Field;


class Stripes extends \Magento\Config\Block\System\Config\Form\Field
{

	protected $_configStripes;
    /**
     * @var \Magento\Framework\View\Asset\Repository
     */
    protected $_assetRepo;

	public function __construct(
		\Magento\Backend\Block\Template\Context $context,
		\Emthemes\ThemeSettings\Model\Config\Source\Stripes $configStripes,	
	    array $data = []
	    )
    {
        $this->_configStripes = $configStripes;        
        parent::__construct($context, $data);
    }
	/**
     * Override field method to add js
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return String
     */
	protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
		$html = parent::_getElementHtml($element);
		    
            
		foreach ($this->_configStripes->toOptionArray() as $row) {
			$html .= sprintf('<a href="#" class="%s %s bg_image" data-input-value="%s"><img class="stripes" src="%s" style="background-image:url(%s)" /></a> ', 
				$element->getId(),
				$element->getValue() == $row['value'] ? 'selected' : '',
				$row['value'],
				$this->_assetRepo->getUrl("Emthemes_ThemeSettings::images/background/stripes")."/".$row['value'],
				$this->_assetRepo->getUrl("Emthemes_ThemeSettings::images/background/stripes")."/".$row['value']);
		}
		
        return $html;
    } 

}
?>
