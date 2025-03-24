<?php
declare(strict_types=1);

namespace Sacsi\SalesRuleShipping\Plugin;

use Magento\Framework\App\RequestInterface;
use Magento\SalesRule\Model\ResourceModel\Rule;

class BeforeSaveCartRule
{
    /**
     * @var RequestInterface
     */
    private $request;

    public function __construct(
        RequestInterface $request
    ) {
        $this->request = $request;
    }
    public function beforeSave(Rule $subject, $object) {
        $data = $this->request->getPostValue();

        $convertedToJson = json_encode($data['free_shipping_methods']);
        $object->setFreeShippingMethods($convertedToJson);

        return null;
    }
}
