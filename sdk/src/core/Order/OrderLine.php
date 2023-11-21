<?php
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 13/10/2016
 * Time: 17:56
 */

namespace Sdk\Order;


use Sdk\Soap\Common\SoapTools;

class OrderLine
{

    /**
     * OrderLine constructor.
     * @param $productId
     */
    public function __construct($productId)
    {
        $this->_productId = $productId;
    }

    /**
     * @var string;
     */
    private $_acceptationState = null;

    /**
     * @return string
     */
    public function getAcceptationState()
    {
        return $this->_acceptationState;
    }

    /**
     * @param string $acceptationState
     */
    public function setAcceptationState($acceptationState)
    {
        if (!SoapTools::isSoapValueNull($acceptationState)) {
            $this->_acceptationState = $acceptationState;
        }
    }

    /**
     * @var string
     */
    private $_categoryCode = null;

    /**
     * @return string
     */
    public function getCategoryCode()
    {
        return $this->_categoryCode;
    }

    /**
     * @param string $categoryCode
     */
    public function setCategoryCode($categoryCode)
    {
        if (!SoapTools::isSoapValueNull($categoryCode)) {
            $this->_categoryCode = $categoryCode;
        }
    }

    #region Delivery Dates

    /**
     * @var string
     */
    //TODO replace by date
    private $_deliveryDateMax = null;

    /**
     * @return string
     */
    public function getDeliveryDateMax()
    {
        return $this->_deliveryDateMax;
    }

    /**
     * @param string $deliveryDateMax
     */
    public function setDeliveryDateMax($deliveryDateMax)
    {
        if (!SoapTools::isSoapValueNull($deliveryDateMax)) {
            $this->_deliveryDateMax = $deliveryDateMax;
        }
    }

    /**
     * @var string
     */
    //replace by date
    private $_deliveryDateMin = null;

    /**
     * @return string
     */
    public function getDeliveryDateMin()
    {
        return $this->_deliveryDateMin;
    }

    /**
     * @param string $deliveryDateMin
     */
    public function setDeliveryDateMin($deliveryDateMin)
    {
        if (!SoapTools::isSoapValueNull($deliveryDateMin)) {
            $this->_deliveryDateMin = $deliveryDateMin;
        }
    }

    #endregion Delivery dates

    /**
     * @var bool
     */
    private $_hasClaim = false;

    /**
     * @return boolean
     */
    public function isHasClaim()
    {
        return $this->_hasClaim;
    }

    /**
     * @param boolean $hasClaim
     */
    public function setHasClaim($hasClaim)
    {
        if (!SoapTools::isSoapValueNull($hasClaim)) {
            $this->_hasClaim = $hasClaim;
        }
    }

    /**
     * @var float
     */
    private $_initialPrice = 0.0;

    /**
     * @return float
     */
    public function getInitialPrice()
    {
        return $this->_initialPrice;
    }

    /**
     * @param float $initialPrice
     */
    public function setInitialPrice($initialPrice)
    {
        if (!SoapTools::isSoapValueNull($initialPrice)) {
            $this->_initialPrice = $initialPrice;
        }
    }

    /**
     * @var bool
     */
    private $_isNegotiated = false;

    /**
     * @return boolean
     */
    public function isIsNegotiated()
    {
        return $this->_isNegotiated;
    }

    /**
     * @param boolean $isNegotiated
     */
    public function setIsNegotiated($isNegotiated)
    {
        if (!SoapTools::isSoapValueNull($isNegotiated)) {
            $this->_isNegotiated = $isNegotiated;
        }
    }

    /**
     * @var string
     */
    private $_name = null;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        if (!SoapTools::isSoapValueNull($name)) {
            $this->_name = $name;
        }
    }

    //TODO add OrderLineChildList

    /**
     * @var \Sdk\Order\ProductConditionEnum
     */
    private $_productCondition = null;

    /**
     * @return string
     */
    public function getProductCondition()
    {
        return $this->_productCondition;
    }

    /**
     * @param string $productCondition
     */
    public function setProductCondition($productCondition)
    {
        if (!SoapTools::isSoapValueNull($productCondition)) {
            $this->_productCondition = $productCondition;
        }
    }

    /**
     * @var string
     */
    private $_productId = null;

    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->_productId;
    }

    /**
     * @var float
     */
    private $_purchasePrice = 0.0;

    /**
     * @return float
     */
    public function getPurchasePrice()
    {
        return $this->_purchasePrice;
    }

    /**
     * @param float $purchasePrice
     */
    public function setPurchasePrice($purchasePrice)
    {
        if (!SoapTools::isSoapValueNull($purchasePrice)) {
            $this->_purchasePrice = $purchasePrice;
        }
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

    private $_rowId = 0;

    /**
     * @return int
     */
    public function getRowId()
    {
        return $this->_rowId;
    }

    /**
     * @param int $rowId
     */
    public function setRowId($rowId)
    {
        if (!SoapTools::isSoapValueNull($rowId)) {
            $this->_rowId = $rowId;
        }
    }

    /**
     * @var string
     */
    private $_sellerProductId = null;

    /**
     * @return string
     */
    public function getSellerProductId()
    {
        return $this->_sellerProductId;
    }

    /**
     * @param string $sellerProductId
     */
    public function setSellerProductId($sellerProductId)
    {
        if (!SoapTools::isSoapValueNull($sellerProductId)) {
            $this->_sellerProductId = $sellerProductId;
        }
    }

    /**
     * @var string
     */
    //TODO date
    private $_shippingDateMax = null;

    /**
     * @return string
     */
    public function getShippingDateMax()
    {
        return $this->_shippingDateMax;
    }

    /**
     * @param string $shippingDateMax
     */
    public function setShippingDateMax($shippingDateMax)
    {
        if (!SoapTools::isSoapValueNull($shippingDateMax)) {
            $this->_shippingDateMax = $shippingDateMax;
        }
    }

    /**
     * @var string
     */
    //TODO date
    private $_shippingDateMin = null;

    /**
     * @return string
     */
    public function getShippingDateMin()
    {
        return $this->_shippingDateMin;
    }

    /**
     * @param string $shippingDateMin
     */
    public function setShippingDateMin($shippingDateMin)
    {
        if (!SoapTools::isSoapValueNull($shippingDateMin)) {
            $this->_shippingDateMin = $shippingDateMin;
        }
    }

    #region SKU

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
     * @param string $sku
     */
    public function setSku($sku)
    {
        if (!SoapTools::isSoapValueNull($sku)) {
            $this->_sku = $sku;
        }
    }

    /**
     * @var string
     */
    private $_skuParent = null;

    /**
     * @return string
     */
    public function getSkuParent()
    {
        return $this->_skuParent;
    }

    /**
     * @param string $skuParent
     */
    public function setSkuParent($skuParent)
    {
        if (!SoapTools::isSoapValueNull($skuParent)) {
            $this->_skuParent = $skuParent;
        }
    }

    #endregion SKU

    #region ShippingCharges

    /**
     * @var float
     */
    private $_unitAdditionalShippingCharges = 0.0;

    /**
     * @return float
     */
    public function getUnitAdditionalShippingCharges()
    {
        return $this->_unitAdditionalShippingCharges;
    }

    /**
     * @param float $unitAdditionalShippingCharges
     */
    public function setUnitAdditionalShippingCharges($unitAdditionalShippingCharges)
    {
        if (!SoapTools::isSoapValueNull($unitAdditionalShippingCharges)) {
            $this->_unitAdditionalShippingCharges = $unitAdditionalShippingCharges;
        }
    }

    /**
     * @var float
     */
    private $_unitShippingCharges = 0.0;

    /**
     * @return float
     */
    public function getUnitShippingCharges()
    {
        return $this->_unitShippingCharges;
    }

    /**
     * @param float $unitShippingCharges
     */
    public function setUnitShippingCharges($unitShippingCharges)
    {
        if (!SoapTools::isSoapValueNull($unitShippingCharges)) {
            $this->_unitShippingCharges = $unitShippingCharges;
        }
    }

    #endregion ShippingCharges

    /**
     * @var bool
     */
    private $_cdav = false;

    /**
     * @return boolean
     */
    public function isCdav()
    {
        return $this->_cdav;
    }

    /**
     * @param boolean $cdav
     */
    public function setCdav($cdav)
    {
        if (!SoapTools::isSoapValueNull($cdav)) {
            $this->_cdav = $cdav;
        }
    }

    #region EAN

    /**
     * @var string
     */
    private $_productEan = "";

    /**
     * @return string
     */
    public function getProductEan()
    {
        return $this->_productEan;
    }

    /**
     * @param string $productEan
     */
    public function setProductEan($productEan)
    {
        if (!SoapTools::isSoapValueNull($productEan)) {
            $this->_productEan = $productEan;
        }
    }

    /**
     * @var bool
     */
    private $_productEanGenerated = false;

    /**
     * @return boolean
     */
    public function isProductEanGenerated()
    {
        return $this->_productEanGenerated;
    }

    /**
     * @param boolean $productEanGenerated
     */
    public function setProductEanGenerated($productEanGenerated)
    {
        if (!SoapTools::isSoapValueNull($productEanGenerated)) {
            $this->_productEanGenerated = $productEanGenerated;
        }
    }
    #endregion EAN
    
    /*
     * @var boolean
     */
    private $_refundShippingCharges = false;
    
    /*
     * @return boolean
     */
    public function isRefundShippingChargesResult()
    {
        return $this->_refundShippingCharges;
    }
    
    /*
     * @param $refundShippingCharge
     */
    public function setRefundShippingCharges($refundShippingCharge)
    {
        if (!SoapTools::isSoapValueNull($refundShippingCharge)) {
            $this->_refundShippingCharges = $refundShippingCharge;
        }
    }
}