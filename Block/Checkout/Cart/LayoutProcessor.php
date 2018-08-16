<?php
/**
 * Copyright (C) 2018  Tech Spot. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Techspot\BrEstimateShipping\Block\Checkout\Cart;

/**
 * Class LayoutProcessor
 */
class LayoutProcessor extends \Magento\Checkout\Block\Cart\LayoutProcessor
{
    
    /**
     * Process js Layout of block
     *
     * @param array $jsLayout
     * @return array
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function process($jsLayout)
    {
        $elements = [
            'city' => [
                'visible' => $this->isCityActive(),
                'formElement' => 'input',
                'label' => __('City'),
                'value' =>  null
            ],
            'country_id' => [
                'visible' => true,
                'label' => __('Country'),
                'formElement' => 'select',
                'value' => null
            ],
            'region_id' => [
                'visible' => true,
                'formElement' => 'select',
                'label' => __('State/Province'),
                'options' => [],
                'value' => null
            ],
            'postcode' => [
                'visible' => true,
                'formElement' => 'input',
                'label' => __('Zip/Postal Code'),
                'value' => null
            ]
        ];

        if (!isset($jsLayout['components']['checkoutProvider']['dictionaries'])) {
            $jsLayout['components']['checkoutProvider']['dictionaries'] = [
                'country_id' =>  array('0' => array('value'=> 'BR', 'label'=> 'Brasil', 'is_region_required' => true)),
                'region_id' => null,
            ];
        }
        if (isset($jsLayout['components']['block-summary']['children']['block-shipping']['children']
            ['address-fieldsets']['children'])
        ) {
            $fieldSetPointer = &$jsLayout['components']['block-summary']['children']['block-shipping']
            ['children']['address-fieldsets']['children'];
            $fieldSetPointer = $this->merger->merge($elements, 'checkoutProvider', 'shippingAddress', $fieldSetPointer);
            $fieldSetPointer['region_id']['config']['skipValidation'] = true;
        }
        return $jsLayout;
    }

}
