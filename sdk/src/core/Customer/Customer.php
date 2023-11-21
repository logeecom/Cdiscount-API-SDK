<?php
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 13/10/2016
 * Time: 17:35
 */

namespace Sdk\Customer;


use Sdk\Soap\Common\SoapTools;

class Customer
{
    /**
     * @var string
     */
    private $_civility = null;

    /**
     * @return string
     */
    public function getCivility()
    {
        return $this->_civility;
    }

    /**
     * @param string $civility
     */
    public function setCivility($civility)
    {
        if (!SoapTools::isSoapValueNull($civility)) {
            $this->_civility = $civility;
        }
    }

    /**
     * @var string
     */
    private $_customerId = null;

    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->_customerId;
    }

    /**
     * @var string
     */
    private $_email = null;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        if (!SoapTools::isSoapValueNull($email)) {
            $this->_email = $email;
        }
    }

    /**
     * @var string
     */
    private $_encryptedEmail = null;

    /**
     * @return string
     */
    public function getEncryptedEmail()
    {
        return $this->_encryptedEmail;
    }

    /**
     * @param string $encryptedEmail
     */
    public function setEncryptedEmail($encryptedEmail)
    {
        if (!SoapTools::isSoapValueNull($encryptedEmail)) {
            $this->_encryptedEmail = $encryptedEmail;
        }
    }

    /**
     * @var string
     */
    private $_firstName = null;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->_firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        if (!SoapTools::isSoapValueNull($firstName)) {
            $this->_firstName = $firstName;
        }
    }

    /**
     * @var string
     */
    private $_lastName = null;

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->_lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        if (!SoapTools::isSoapValueNull($lastName)) {
            $this->_lastName = $lastName;
        }
    }

    /**
     * @var string
     */
    private $_mobilePhone = null;

    /**
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->_mobilePhone;
    }

    /**
     * @param string $mobilePhone
     */
    public function setMobilePhone($mobilePhone)
    {
        if (!SoapTools::isSoapValueNull($mobilePhone)) {
            $this->_mobilePhone = $mobilePhone;
        }
    }

    /**
     * @var string
     */
    private $_phone = null;

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        if (!SoapTools::isSoapValueNull($phone)) {
            $this->_phone = $phone;
        }
    }

    /**
     * @var string
     */
    private $_shippingFirstName = null;

    /**
     * @return string
     */
    public function getShippingFirstName()
    {
        return $this->_shippingFirstName;
    }

    /**
     * @param string $shippingFirstName
     */
    public function setShippingFirstName($shippingFirstName)
    {
        if (!SoapTools::isSoapValueNull($shippingFirstName)) {
            $this->_shippingFirstName = $shippingFirstName;
        }
    }

    /**
     * @var string
     */
    private $_shippingLastName = null;

    /**
     * @return string
     */
    public function getShippingLastName()
    {
        return $this->_shippingLastName;
    }

    /**
     * @param string $shippingLastName
     */
    public function setShippingLastName($shippingLastName)
    {
        if (!SoapTools::isSoapValueNull($shippingLastName)) {
            $this->_shippingLastName = $shippingLastName;
        }
    }

    /**
     * @var string
     */
    private $_secondPhone = null;

    /**
     * @return string
     */
    public function getSecondPhone()
    {
        return $this->_secondPhone;
    }

    /**
     * @param string $secondPhone
     */
    public function setSecondPhone($secondPhone)
    {
        if (!SoapTools::isSoapValueNull($secondPhone)) {
            $this->_secondPhone = $secondPhone;
        }
    }

    /**
     * Customer constructor.
     * @param $customerId string
     */
    public function __construct($customerId)
    {
        $this->_customerId = $customerId;
    }
}