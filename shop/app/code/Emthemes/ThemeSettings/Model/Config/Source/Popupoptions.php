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

class Popupoptions implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 0, 'label' => __("- None -")],
            ['value' => 1, 'label' => __('Login Form')],
            ['value' => 2, 'label' => __('Newsletter')],
            ['value' => 3, 'label' => __('Static Block')] ];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [
        0 => __("- None -"),
        1 => __('Login Form'),
        2 => __('Newsletter'),
        3 => __('Static Block') ];
    }
}
