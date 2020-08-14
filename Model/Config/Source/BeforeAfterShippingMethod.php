<?php

namespace SNDSABIN\AdditionalShippingBlock\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class BeforeAfterShippingMethod implements ArrayInterface
{
    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'before-shipping-method-form', 'label' => __('Before Shipping Methods')],
            ['value' => 'shippingAdditional', 'label' => __('After Shipping Methods')]
        ];
    }
}