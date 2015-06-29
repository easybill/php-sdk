<?php

namespace easybill\SDK;

use easybill\SDK\Exception\AuthenticationFailedException;
use easybill\SDK\Model\Customer;
use easybill\SDK\Model\CustomerCollection;

class Client
{
    private $soapClient;

    function __construct($wsdlPath, $apiKey)
    {
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
     * @return CustomerCollection
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
     * @return Customer|null
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
     * @param $customerNumber
     *
     * @return Customer|null
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

    private function handleSoapFault(\SoapFault $soapFault, $ignoreCode = array())
    {
        if (property_exists($soapFault, 'faultcode')) {

            if (in_array($soapFault->faultcode, $ignoreCode)) {
                return;
            }

            switch ($soapFault->faultcode) {
                case "2":
                    throw new AuthenticationFailedException($soapFault->getMessage(), $soapFault->faultcode, $soapFault);
                    break;
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