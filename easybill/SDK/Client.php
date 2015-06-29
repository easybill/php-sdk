<?php

namespace easybill\SDK;

use easybill\SDK\Exception\AuthenticationFailedException;
use easybill\SDK\Exception\CustomerNotFoundException;
use easybill\SDK\Exception\ModelDataNotValidException;
use easybill\SDK\Exception\ServerException;
use easybill\SDK\Model\Customer;
use easybill\SDK\Model\CustomerCollection;

class Client
{
    private $soapClient;

    function __construct($wsdlPath, $apiKey)
    {
        ini_set("soap.wsdl_cache_enabled", "0");
        $this->soapClient = new \SoapClient($wsdlPath, array(
            'trace'      => 1,
            'exceptions' => 1,
            'classmap'   => array(
                'SearchCustomersType' => '\easybill\SDK\Model\CustomerCollection',
                'customertype'        => '\easybill\SDK\Model\Customer',
            )
        ));
        $header = new \SoapHeader('http://www.easybill.de/webservice', 'UserAuthKey', $apiKey);
        $this->soapClient->__setSoapHeaders($header);
    }

    /**
     * @param string $term
     *
     * @return \easybill\SDK\Model\CustomerCollection
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailedException
     * @throws \easybill\SDK\Exception\ServerException
     */
    public function searchCustomers($term)
    {
        try {
            return $this->soapClient->searchCustomers((string)$term);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
            return new CustomerCollection();
        }
    }

    /**
     * @param integer $customerID
     *
     * @return \easybill\SDK\Model\Customer|null
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailedException
     * @throws \easybill\SDK\Exception\ServerException
     */
    public function findCustomer($customerID)
    {
        try {
            return $this->soapClient->getCustomer((int)$customerID);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault, array(101));
            return null;
        }
    }

    /**
     * @param string $customerNumber
     *
     * @return \easybill\SDK\Model\Customer|null
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailedException
     * @throws \easybill\SDK\Exception\ServerException
     */
    public function findCustomerByCustomerNumber($customerNumber)
    {
        try {
            return $this->soapClient->getCustomerByCustomerNumber($customerNumber);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault, array(101));
            return null;
        }
    }

    /**
     * @param \easybill\SDK\Model\Customer $customer
     *
     * @return \easybill\SDK\Model\Customer
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailedException
     * @throws \easybill\SDK\Exception\CustomerNotFoundException
     * @throws \easybill\SDK\Exception\ModelDataNotValidException
     * @throws \easybill\SDK\Exception\ServerException
     */
    public function createCustomer(Customer $customer)
    {
        try {
            return $this->updateCustomer($customer);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
    }

    /**
     * @param \easybill\SDK\Model\Customer $customer
     *
     * @return \easybill\SDK\Model\Customer
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailedException
     * @throws \easybill\SDK\Exception\CustomerNotFoundException
     * @throws \easybill\SDK\Exception\ModelDataNotValidException
     * @throws \easybill\SDK\Exception\ServerException
     */
    public function updateCustomer(Customer $customer)
    {
        try {
            return $this->soapClient->setCustomer($customer);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
    }

    /**
     * @param integer $customerID
     *
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailedException
     * @throws \easybill\SDK\Exception\CustomerNotFoundException
     * @throws \easybill\SDK\Exception\ServerException
     */
    public function deleteCustomer($customerID)
    {
        try {
            $this->soapClient->deleteCustomer($customerID);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
    }

    /**
     * @param \SoapFault $soapFault
     * @param array      $ignoreCode
     *
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailedException
     * @throws \easybill\SDK\Exception\CustomerNotFoundException
     * @throws \easybill\SDK\Exception\ModelDataNotValidException
     * @throws \easybill\SDK\Exception\ServerException
     */
    private function handleSoapFault(\SoapFault $soapFault, $ignoreCode = array())
    {
        if (property_exists($soapFault, 'faultcode')) {

            if (in_array($soapFault->faultcode, $ignoreCode)) {
                return;
            }

            switch ($soapFault->faultcode) {
                case "1":
                    throw new ServerException($soapFault->getMessage(), 1, $soapFault);
                case "2":
                    throw new AuthenticationFailedException($soapFault->getMessage(), 2, $soapFault);
                case "3":
                    $message = $soapFault->getMessage();

                    if (
                        property_exists($soapFault, 'detail')
                        && is_object($soapFault->detail)
                        && property_exists($soapFault->detail, 'DataNotValidFault')
                        && is_object($soapFault->detail->DataNotValidFault)
                        && property_exists($soapFault->detail->DataNotValidFault, 'datafield')
                    ) {
                        $message = $soapFault->detail->DataNotValidFault->datafield;
                    }


                    throw new ModelDataNotValidException($message, 3, $soapFault);
                case "101":
                    throw new CustomerNotFoundException($soapFault->getMessage(), 101, $soapFault);
            }
        }
        throw $soapFault;
    }

    /**
     * @return \SoapClient
     */
    public function getSoapClient()
    {
        return $this->soapClient;
    }
}