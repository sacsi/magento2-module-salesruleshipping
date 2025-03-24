<?php

namespace Sacsi\SalesRuleShipping\Ui\Component;

use Magento\Framework\Data\OptionSourceInterface;
use Magento\Shipping\Model\Config as ShippingConfig;

/**
 * Class Options
 */
class Options implements OptionSourceInterface
{

    protected $shippingConfig;

    public function __construct(ShippingConfig $shippingConfig)
    {
        $this->shippingConfig = $shippingConfig;
    }

    /**
    * @var array
    */
    protected $options;

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $values = $this->getShippingMethods();

        $this->options = array_values($values);

        return $this->options;
    }

    private function getShippingMethods()
    {
        $methods = [];
        $carriers = $this->shippingConfig->getActiveCarriers();
        foreach ($carriers as $carrierCode => $carrierModel) {
            $methods[] = [
                'value' => $carrierCode,
                'label' => $carrierModel->getConfigData('title') ?: ucfirst($carrierCode),
            ];
        }
        return $methods;
    }
}
