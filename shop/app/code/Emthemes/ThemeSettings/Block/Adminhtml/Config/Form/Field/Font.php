<?php 

namespace Emthemes\ThemeSettings\Block\Adminhtml\Config\Form\Field;


class Font extends \Magento\Config\Block\System\Config\Form\Field
{
	
	protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {        
		$html = parent::_getElementHtml($element);
        return $html;
    }


}
?>