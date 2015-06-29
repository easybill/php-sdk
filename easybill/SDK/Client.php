<?php

namespace easybill\SDK;

use easybill\SDK\Collection\CustomerGroupCollection;
use easybill\SDK\Exception\AuthenticationFailedException;
use easybill\SDK\Exception\CustomerContactNotFoundException;
use easybill\SDK\Exception\CustomerGroupNotFoundException;
use easybill\SDK\Exception\CustomerNotFoundException;
use easybill\SDK\Exception\ModelDataNotValidException;
use easybill\SDK\Exception\ServerException;
use easybill\SDK\Model\Customer;
use easybill\SDK\Model\CustomerContact;
use easybill\SDK\Model\CustomerGroup;

class Client
{
    private $soapClient;

    function __construct($wsdlPath, $apiKey)
    {
        ini_set('soap.wsdl_cache_enabled', '0');
        $this->soapClient = new \SoapClient($wsdlPath, array(
            'trace'      => 1,
            'exceptions' => 1,
            'classmap'   => array(
                'SearchCustomersType'               => '\easybill\SDK\Collection\CustomerCollection',
                'GetContactsByCustomerResponseType' => '\easybill\SDK\Collection\CustomerContactCollection',
                'AllCustomerGroupsResponseType'     => '\easybill\SDK\Collection\CustomerGroupCollection',
                'customertype'                      => '\easybill\SDK\Model\Customer',
                'customerContactType'               => '\easybill\SDK\Model\CustomerContact',
                'customergrouptype'                 => '\easybill\SDK\Model\CustomerGroup',
            )
        ));
        $header = new \SoapHeader('http://www.easybill.de/webservice', 'UserAuthKey', $apiKey);
        $this->soapClient->__setSoapHeaders($header);
    }

    /**
     * @param string $term
     *
     * @return \easybill\SDK\Collection\CustomerCollection
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
        return $this->updateCustomer($customer);
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
     * @param $customerID
     *
     * @return \easybill\SDK\Collection\CustomerContactCollection
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailedException
     * @throws \easybill\SDK\Exception\CustomerNotFoundException
     * @throws \easybill\SDK\Exception\ServerException
     */
    public function findCustomerContactsByCustomer($customerID)
    {
        try {
            return $this->soapClient->getContactsByCustomer($customerID);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
    }

    /**
     * @param $contactID
     *
     * @return \easybill\SDK\Model\Customer|null
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailedException
     * @throws \easybill\SDK\Exception\CustomerContactNotFoundException
     * @throws \easybill\SDK\Exception\ServerException
     */
    public function findCustomerContact($contactID)
    {
        try {
            return $this->soapClient->getCustomerContact($contactID);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault, array(104));
            return null;
        }
    }

    /**
     * @param \easybill\SDK\Model\CustomerContact $contact
     *
     * @return \easybill\SDK\Model\CustomerContact
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailedException
     * @throws \easybill\SDK\Exception\CustomerNotFoundException
     * @throws \easybill\SDK\Exception\ModelDataNotValidException
     * @throws \easybill\SDK\Exception\ServerException
     */
    public function createCustomerContact(CustomerContact $contact)
    {
        return $this->updateCustomerContact($contact);
    }

    /**
     * @param \easybill\SDK\Model\CustomerContact $contact
     *
     * @return CustomerContact
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailedException
     * @throws \easybill\SDK\Exception\CustomerNotFoundException
     * @throws \easybill\SDK\Exception\ModelDataNotValidException
     * @throws \easybill\SDK\Exception\ServerException
     */
    public function updateCustomerContact(CustomerContact $contact)
    {
        try {
            return $this->soapClient->setCustomerContact($contact);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
    }

    /**
     * @param integer $contactID
     *
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailedException
     * @throws \easybill\SDK\Exception\CustomerContactNotFoundException
     * @throws \easybill\SDK\Exception\ServerException
     */
    public function deleteCustomerContact($contactID)
    {
        try {
            $this->soapClient->deleteCustomerContact((int)$contactID);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
    }

    /**
     * @return CustomerGroupCollection
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailedException
     * @throws \easybill\SDK\Exception\ServerException
     */
    public function findCustomerGroups()
    {
        try {
            return $this->soapClient->getAllCustomerGroups();
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
    }

    /**
     * @param integer $groupID
     *
     * @return CustomerGroup
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailedException
     * @throws \easybill\SDK\Exception\ServerException
     */
    public function findCustomerGroup($groupID)
    {
        try {
            return $this->soapClient->getCustomerGroup((int)$groupID);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault, array(102));
        }
    }

    /**
     * @param \easybill\SDK\Model\CustomerGroup $group
     *
     * @return \easybill\SDK\Model\CustomerGroup
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailedException
     * @throws \easybill\SDK\Exception\ModelDataNotValidException
     * @throws \easybill\SDK\Exception\ServerException
     */
    public function createCustomerGroup(CustomerGroup $group)
    {
        $this->updateCustomerGroup($group);
    }

    /**
     * @param \easybill\SDK\Model\CustomerGroup $group
     *
     * @return \easybill\SDK\Model\CustomerGroup
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailedException
     * @throws \easybill\SDK\Exception\ModelDataNotValidException
     * @throws \easybill\SDK\Exception\ServerException
     */
    public function updateCustomerGroup(CustomerGroup $group)
    {
        try {
            return $this->soapClient->setCustomerGroup($group);
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
     * @throws \easybill\SDK\Exception\CustomerContactNotFoundException
     * @throws \easybill\SDK\Exception\CustomerGroupNotFoundException
     */
    private function handleSoapFault(\SoapFault $soapFault, $ignoreCode = array())
    {
        if (property_exists($soapFault, 'faultcode')) {

            if (in_array((int)$soapFault->faultcode, $ignoreCode)) {
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
                case "102":
                    throw new CustomerGroupNotFoundException($soapFault->getMessage(), 102, $soapFault);
                case "104":
                    throw new CustomerContactNotFoundException($soapFault->getMessage(), 104, $soapFault);
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