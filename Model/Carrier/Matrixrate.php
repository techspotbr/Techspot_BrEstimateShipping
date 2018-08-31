<?php
namespace Techspot\BrEstimateShipping\Model\Carrier;

use Magento\Framework\Filesystem;
use Magento\Framework\Filesystem\DirectoryList;

/**
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Matrixrate extends \WebShopApps\MatrixRate\Model\ResourceModel\Carrier\Matrixrate
{

    /**
     * Return table rate array or false by rate request
     *
     * @param \Magento\Quote\Model\Quote\Address\RateRequest $request
     * @param bool $zipRangeSet
     * @return array|bool
     */
    public function getRate(\Magento\Quote\Model\Quote\Address\RateRequest $request, $zipRangeSet = false)
    {
        $postcode = str_replace('-','', $request->getDestPostcode());
        $request->setDestPostcode($postcode);
        return parent::getRate($request, $zipRangeSet);
    }
}
