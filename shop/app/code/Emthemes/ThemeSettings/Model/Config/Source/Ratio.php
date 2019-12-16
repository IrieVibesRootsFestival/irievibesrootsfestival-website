<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Used in creating options for Yes|No config value selection
 *
 */
namespace Emthemes\ThemeSettings\Model\Config\Source;

class Ratio implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
    
        return [
            ['label' => "- None -", 'value' => 0 ],
		['label' => "2 : 3", 'value' => 0.6666],
		['label' => "3 : 4", 'value' => 0.75],
		['label' => "1 : 1", 'value' => 1],
		['label' => "4 : 3", 'value' => 1.3333],
		['label' => "3 : 2", 'value' => 1.5],
            ['label' => "Custom Image Aspect Ratio", 'value' => -1],
        ];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [
              0 => __('-- None --'), 
              0.6666 => __('2 : 3'),
              0.75 => __('3 : 4'),
              1 => __('1 : 1'),
              1.3333 => __('4 : 3'),
              1.5 => __('3 : 2'),
              -1 => __('Custom Image Aspect Ratio'),                                                                      
        ];
    }
}
