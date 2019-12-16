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

class Loginform implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 0, 'label' => __("Don't show login form")],
            ['value' => 1, 'label' => __('Show Login Form When Hovering')],
            ['value' => 2, 'label' => __('Show Popup Login Form When Clicking')] ];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [
        0 => __("Don't show login form"),
        1 => __('Show Login Form When Hovering'),
        2 => __('Show Popup Login Form When Clicking') ];
    }
}
