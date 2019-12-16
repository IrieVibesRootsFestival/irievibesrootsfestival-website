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

class Altimg implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => "none", 'label' => __("- None -")],
            ['value' => "small", 'label' => __('Small Image')],
            ['value' => "thumbnail", 'label' => __('Thumbnail')],
            ['value' => "image", 'label' => __('Base Image')]
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
        "none" => __("- None -"),
        "small" => __('Small Image'),
        "thumbnail" => __('Thumbnail'),
        "image" => __('Base Image')        
        ];
    }
}
