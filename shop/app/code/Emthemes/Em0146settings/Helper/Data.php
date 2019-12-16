<?php
/**
 * Copyright © 2015 Emthemes . All rights reserved.
 */
namespace Emthemes\Em0146settings\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	 /**
     * @var \Magento\Framework\Locale\CurrencyInterface
     */
    protected $_localeCurrency;
	/**
     * @param \Magento\Framework\App\Helper\Context $context
     */
	public function __construct(
		\Magento\Framework\App\Helper\Context $context,
		\Magento\Framework\Locale\CurrencyInterface $localeCurrency
		       
	) {
		parent::__construct($context);
		$this->_localeCurrency = $localeCurrency;
		
	}
	
	public function getCurrencySymbol($currenyCode){
	      return $this->_localeCurrency->getCurrency($currenyCode)->getSymbol();	      
	}
}
