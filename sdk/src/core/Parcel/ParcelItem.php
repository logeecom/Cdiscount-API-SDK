<?php
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 14/10/2016
 * Time: 13:35
 */

namespace Sdk\Parcel;


use Sdk\Soap\Common\SoapTools;

class ParcelItem
{

    /**
     * @var string
     */
    private $_productName = null;

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->_productName;
    }

    /**
     * @param string $productName
     */
    public function setProductName($productName)
    {
        if (!SoapTools::isSoapValueNull($productName)) {
            $this->_productName = $productName;
        }
    }

    /**
     * @var string
     */
    private $_sku = null;

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->_sku;
    }

    /**
     * @var int
     */
    private $_quantity = 0;

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->_quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        if (!SoapTools::isSoapValueNull($quantity)) {
            $this->_quantity = $quantity;
        }
    }

    /**
     * ParcelItem constructor.
     * @param $sku
     */
    public function __construct($sku)
    {
        $this->_sku = $sku;
    }
}