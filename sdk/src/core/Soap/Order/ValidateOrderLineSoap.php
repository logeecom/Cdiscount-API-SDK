<?php
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 17/10/2016
 * Time: 14:17
 */

namespace Sdk\Soap\Order;


use Sdk\Order\Validate\ValidateOrderLine;
use Sdk\Soap\BaliseTool;

class ValidateOrderLineSoap extends BaliseTool
{

    private $_AcceptationStateTAG = 'AcceptationState';
    private $_ProductConditionTAG = 'ProductCondition';
    private $_SellerProductIdTAG = 'SellerProductId';
    private $_SkuTAG = 'Sku';

    /*
     * @ var string TAG
     */
    private $_TypeOfReturnTAG = 'TypeOfReturn';

    /**
     * @var ValidateOrderLine
     */
    private $_validateOrderLine = null;

    public function __construct($validateOrderLine)
    {
        $this->_validateOrderLine = $validateOrderLine;
        $this->_tag = 'ValidateOrderLine';
        parent::__construct();
    }

    /**
     * @return string
     */
    public function serialize()
    {
        $xml = $this->_generateOpenBalise();

        $xml .= $this->_xmlUtil->generateBalise($this->_AcceptationStateTAG, $this->_validateOrderLine->getAcceptationState());
        $xml .= $this->_xmlUtil->generateBalise($this->_ProductConditionTAG, $this->_validateOrderLine->getProductCondition());
        $xml .= $this->_xmlUtil->generateBalise($this->_SellerProductIdTAG, $this->_validateOrderLine->getSellerProductId());
        $xml .= $this->_xmlUtil->generateBalise($this->_TypeOfReturnTAG, $this->_validateOrderLine->getTypeOfReturn());
        $xml .= $this->_xmlUtil->generateBalise($this->_SkuTAG, $this->_validateOrderLine->getSku());

        $xml .= $this->_generateCloseBalise();
        return $xml;
    }
}