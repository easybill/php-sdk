<?php

namespace easybill\SDK;

use easybill\SDK\Collection\CompanyPositionGroups;
use easybill\SDK\Collection\CompanyPositions;
use easybill\SDK\Collection\CustomerContacts;
use easybill\SDK\Collection\CustomerGroups;
use easybill\SDK\Collection\Documents;
use easybill\SDK\Collection\Outbox;
use easybill\SDK\Collection\Payments;
use easybill\SDK\Exception\AuthenticationFailed;
use easybill\SDK\Exception\CompanyPositionGroupNotFound;
use easybill\SDK\Exception\CompanyPositionNotFound;
use easybill\SDK\Exception\CustomerContactNotFound;
use easybill\SDK\Exception\CustomerGroupNotFound;
use easybill\SDK\Exception\CustomerNotFound;
use easybill\SDK\Exception\DocumentNotFound;
use easybill\SDK\Exception\ModelDataNotValid;
use easybill\SDK\Exception\ServerException;
use easybill\SDK\Model\CompanyPosition;
use easybill\SDK\Model\CompanyPositionGroup;
use easybill\SDK\Model\CreateDocument;
use easybill\SDK\Model\CreateReminder;
use easybill\SDK\Model\Customer;
use easybill\SDK\Model\CustomerContact;
use easybill\SDK\Model\CustomerGroup;
use easybill\SDK\Model\Document;
use easybill\SDK\Model\DocumentCreated;
use easybill\SDK\Model\DocumentFile;
use easybill\SDK\Model\Payment;
use easybill\SDK\Request\DocumentsParams;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

class Client
{
    /** @var \SoapClient */
    private $soapClient;
    /** @var  LoggerInterface */
    private $logger;

    function __construct($wsdlPath, $apiKey)
    {
        ini_set('soap.wsdl_cache_enabled', '0');
        $this->soapClient = new \SoapClient($wsdlPath, array(
            'trace'      => 1,
            'exceptions' => 1,
            'classmap'   => array(
                // Collections
                'SearchCustomersType'                  => '\easybill\SDK\Collection\Customers',
                'GetContactsByCustomerResponseType'    => '\easybill\SDK\Collection\CustomerContacts',
                'AllCustomerGroupsResponseType'        => '\easybill\SDK\Collection\CustomerGroups',
                'SearchCompanyPositionsType'           => '\easybill\SDK\Collection\CompanyPositions',
                'AllCompanyPositionGroupsResponseType' => '\easybill\SDK\Collection\CompanyPositionGroups',
                'GetDocumentPaymentsType'              => '\easybill\SDK\Collection\Payments',
                'DocumentSentType'                     => '\easybill\SDK\Collection\Outbox',
                // Models
                'GetDocumentsResponseType'             => '\easybill\SDK\Collection\Documents',
                'customertype'                         => '\easybill\SDK\Model\Customer',
                'customerContactType'                  => '\easybill\SDK\Model\CustomerContact',
                'customergrouptype'                    => '\easybill\SDK\Model\CustomerGroup',
                'companypositiontype'                  => '\easybill\SDK\Model\CompanyPosition',
                'companypositiongrouptype'             => '\easybill\SDK\Model\CompanyPositionGroup',
                'GetDocumentType'                      => '\easybill\SDK\Model\Document',
                'GetDocumentPDFResponseType'           => '\easybill\SDK\Model\DocumentFile',
                'documentpaymenttype'                  => '\easybill\SDK\Model\Payment',
                'DocumentSentItemType'                 => '\easybill\SDK\Model\Sent',
                'CreateDocumentType'                   => '\easybill\SDK\Model\CreateDocument',
                'documentcreatedtype'                  => '\easybill\SDK\Model\DocumentCreated',
                'documentdescriptiontype'              => '\easybill\SDK\Model\DocumentDescriber',
                'documentpositiontype'                 => '\easybill\SDK\Model\DocumentPosition',
                'createReminderType'                   => '\easybill\SDK\Model\CreateReminder',
                // Requests
                'GetDocumentsRequestType'              => '\easybill\SDK\Request\DocumentsParams',
            )
        ));
        $this->soapClient->__setSoapHeaders(array(
            new \SoapHeader('http://www.easybill.de/webservice', 'UserAuthKey', $apiKey),
            new \SoapHeader('http://www.easybill.de/webservice', 'UserAgent', 'easybill-php-sdk v1.0')
        ));
        $this->logger = new NullLogger();
    }

    /**
     * @param string $term
     *
     * @return \easybill\SDK\Collection\Customers
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
     */
    public function searchCustomers($term)
    {
        return $this->call('searchCustomers', (string)$term);
    }

    /**
     * @param integer $customerID
     *
     * @return Customer|null
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
     */
    public function findCustomer($customerID)
    {
        return $this->call('getCustomer', (int)$customerID, array(101));
    }

    /**
     * @param string $customerNumber
     *
     * @return Customer|null
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
     */
    public function findCustomerByCustomerNumber($customerNumber)
    {
        return $this->call('getCustomerByCustomerNumber', (string)$customerNumber, array(101));
    }

    /**
     * @param Customer $customer
     *
     * @return Customer
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws CustomerNotFound
     * @throws ModelDataNotValid
     * @throws ServerException
     */
    public function createCustomer(Customer $customer)
    {
        return $this->updateCustomer($customer);
    }

    /**
     * @param Customer $customer
     *
     * @return Customer
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws CustomerNotFound
     * @throws ModelDataNotValid
     * @throws ServerException
     */
    public function updateCustomer(Customer $customer)
    {
        return $this->call('setCustomer', $customer);
    }

    /**
     * @param integer $customerID
     *
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws CustomerNotFound
     * @throws ServerException
     */
    public function deleteCustomer($customerID)
    {
        $this->call('deleteCustomer', (int)$customerID);
    }

    /**
     * @return CustomerContacts
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
     */
    public function findCustomerContacts()
    {
        return $this->call('getCustomerContacts');
    }

    /**
     * @param integer $customerID
     *
     * @return CustomerContacts
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws CustomerNotFound
     * @throws ServerException
     */
    public function findCustomerContactsByCustomer($customerID)
    {
        return $this->call('getContactsByCustomer', (int)$customerID);
    }

    /**
     * @param integer $contactID
     *
     * @return Customer|null
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws CustomerContactNotFound
     * @throws ServerException
     */
    public function findCustomerContact($contactID)
    {
        return $this->call('getCustomerContact', (int)$contactID, array(104));
    }

    /**
     * @param CustomerContact $contact
     *
     * @return CustomerContact
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws CustomerNotFound
     * @throws ModelDataNotValid
     * @throws ServerException
     */
    public function createCustomerContact(CustomerContact $contact)
    {
        return $this->updateCustomerContact($contact);
    }

    /**
     * @param CustomerContact $contact
     *
     * @return CustomerContact
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws CustomerNotFound
     * @throws ModelDataNotValid
     * @throws ServerException
     */
    public function updateCustomerContact(CustomerContact $contact)
    {
        return $this->call('setCustomerContact', $contact);
    }

    /**
     * @param integer $contactID
     *
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws CustomerContactNotFound
     * @throws ServerException
     */
    public function deleteCustomerContact($contactID)
    {
        $this->call('deleteCustomerContact', (int)$contactID);
    }

    /**
     * @return CustomerGroups
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
     */
    public function findCustomerGroups()
    {
        return $this->call('getAllCustomerGroups');
    }

    /**
     * @param integer $groupID
     *
     * @return CustomerGroup
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
     */
    public function findCustomerGroup($groupID)
    {
        return $this->call('getCustomerGroup', (int)$groupID, array(102));
    }

    /**
     * @param CustomerGroup $group
     *
     * @return CustomerGroup
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ModelDataNotValid
     * @throws ServerException
     */
    public function createCustomerGroup(CustomerGroup $group)
    {
        return $this->updateCustomerGroup($group);
    }

    /**
     * @param CustomerGroup $group
     *
     * @return CustomerGroup
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ModelDataNotValid
     * @throws ServerException
     */
    public function updateCustomerGroup(CustomerGroup $group)
    {
        return $this->call('setCustomerGroup', $group);
    }

    /**
     * @param integer $groupID
     *
     * @return void
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
     */
    public function deleteCustomerGroup($groupID)
    {
        $this->call('deleteCustomerGroup', (int)$groupID);
    }

    /**
     * @param string $term
     *
     * @return CompanyPositions
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
     */
    public function searchCompanyPositions($term)
    {
        return $this->call('searchCompanyPositions', (string)$term);
    }

    /**
     * @param int $positionID
     *
     * @return CompanyPosition|null
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws CompanyPositionNotFound
     * @throws ServerException
     */
    public function findCompanyPosition($positionID)
    {
        return $this->call('getCompanyPosition', (int)$positionID, array(111));
    }

    /**
     * @param CompanyPosition $position
     *
     * @return CompanyPosition
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws CompanyPositionNotFound
     * @throws ModelDataNotValid
     * @throws ServerException
     */
    public function createCompanyPosition(CompanyPosition $position)
    {
        return $this->updateCompanyPosition($position);
    }

    /**
     * @param CompanyPosition $position
     *
     * @return CompanyPosition
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws CompanyPositionNotFound
     * @throws ModelDataNotValid
     * @throws ServerException
     */
    public function updateCompanyPosition(CompanyPosition $position)
    {
        return $this->call('setCompanyPosition', $position);
    }

    /**
     * @param integer $positionID
     *
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws CompanyPositionNotFound
     * @throws ServerException
     */
    public function deleteCompanyPosition($positionID)
    {
        $this->call('deleteCompanyPosition', (int)$positionID);
    }

    /**
     * @return CompanyPositionGroups
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
     */
    public function findCompanyPositionGroups()
    {
        return $this->call('getAllCompanyPositionGroups');
    }

    /**
     * @param integer $groupID
     *
     * @return CompanyPositionGroup|null
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
     */
    public function findCompanyPositionGroup($groupID)
    {
        return $this->call('getCompanyPositionGroup', (int)$groupID, array(112));
    }

    /**
     * @param CompanyPositionGroup $group
     *
     * @return CompanyPositionGroup
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ModelDataNotValid
     * @throws ServerException
     */
    public function createCompanyPositionGroup(CompanyPositionGroup $group)
    {
        return $this->updateCompanyPositionGroup($group);
    }

    /**
     * @param CompanyPositionGroup $group
     *
     * @return CompanyPositionGroup
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws CompanyPositionGroupNotFound
     * @throws ModelDataNotValid
     * @throws ServerException
     */
    public function updateCompanyPositionGroup(CompanyPositionGroup $group)
    {
        return $this->call('setCompanyPositionGroup', $group);
    }

    /**
     * @param integer $groupID
     *
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws CompanyPositionGroupNotFound
     * @throws ServerException
     */
    public function deleteCompanyPositionGroup($groupID)
    {
        $this->call('deleteCompanyPositionGroup', (int)$groupID);
    }

    /**
     * @param integer $documentID
     *
     * @return Document
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
     */
    public function findDocument($documentID)
    {
        return $this->call('getDocument', (int)$documentID, array(103));
    }

    /**
     * @param $documentNumber
     *
     * @return Documents|Document[]
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
     */
    public function findDocumentsByDocumentNumber($documentNumber)
    {
        return $this->call('findDocumentsByDocumentNumber', (string)$documentNumber, array(103));
    }

    /**
     * @param DocumentsParams $params
     *
     * @return Documents|Document[]
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ModelDataNotValid
     * @throws ServerException
     */
    public function findDocuments(DocumentsParams $params)
    {
        if ($params->LimitPeriod->from == null || $params->LimitPeriod->until == null) {
            unset($params->LimitPeriod);
        }
        return $this->call('getDocuments', $params);
    }

    /**
     * @param int $documentID
     *
     * @return DocumentFile|null
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws DocumentNotFound
     * @throws ServerException
     */
    public function findDocumentPDF($documentID)
    {
        return $this->call('getDocumentPDF', (int)$documentID);
    }

    /**
     * @param integer $documentID
     *
     * @return Payments|Payment[]
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
     * @throws DocumentNotFound
     */
    public function findDocumentPayments($documentID)
    {
        return $this->call('getDocumentPayments', (int)$documentID);
    }


    /**
     * @param integer $documentID
     *
     * @return Outbox
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
     */
    public function findDocumentSent($documentID)
    {
        return $this->call('getDocumentSent', (int)$documentID);
    }

    /**
     * @param Payment $payment
     *
     * @return bool
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws DocumentNotFound
     * @throws ModelDataNotValid
     * @throws ServerException
     */
    public function createPayment(Payment $payment)
    {
        return $this->call('addDocumentPayment', $payment);
    }

    /**
     * @param CreateDocument $createDocument
     *
     * @return DocumentCreated
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
     */
    public function createDocument(CreateDocument $createDocument)
    {
        /** @var DocumentCreated $documentCreated */
        $documentCreated = $this->call('createDocument', $createDocument);
        if (is_object($documentCreated->document->documentPosition)) {
            $documentCreated->document->documentPosition = array($documentCreated->document->documentPosition);
        }
        return $documentCreated;
    }

    /**
     * @param CreateReminder $createReminder
     *
     * @return DocumentCreated
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailed
     * @throws \easybill\SDK\Exception\DocumentNotFound
     * @throws \easybill\SDK\Exception\ServerException
     */
    public function createReminder(CreateReminder $createReminder)
    {
        return $this->call('createReminder', $createReminder);
    }

    /**
     * @param CreateReminder $createReminder
     *
     * @return DocumentCreated
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailed
     * @throws \easybill\SDK\Exception\DocumentNotFound
     * @throws \easybill\SDK\Exception\ServerException
     */
    public function createDunning(CreateReminder $createReminder)
    {
        return $this->call('createReminder', $createReminder);
    }

    /**
     * @param string $method
     * @param mixed  $args
     * @param array  $ignoreCodes
     * @param null   $return
     *
     * @return mixed|null
     * @throws \SoapFault
     * @throws \easybill\SDK\Exception\AuthenticationFailed
     * @throws \easybill\SDK\Exception\CompanyPositionGroupNotFound
     * @throws \easybill\SDK\Exception\CompanyPositionNotFound
     * @throws \easybill\SDK\Exception\CustomerContactNotFound
     * @throws \easybill\SDK\Exception\CustomerGroupNotFound
     * @throws \easybill\SDK\Exception\CustomerNotFound
     * @throws \easybill\SDK\Exception\DocumentNotFound
     * @throws \easybill\SDK\Exception\ModelDataNotValid
     * @throws \easybill\SDK\Exception\ServerException
     */
    private function call($method, $args = null, $ignoreCodes = array(), $return = null)
    {
        if (!is_array($args)) {
            $args = array($args);
        }
        $this->logger->debug('call ' . $method . '()', $args);
        try {
            return call_user_func_array(array($this->soapClient, $method), $args);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault, $ignoreCodes);
            return $return;
        }
    }

    /**
     * @param \SoapFault $soapFault
     * @param array      $ignoreCode
     *
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws CustomerNotFound
     * @throws ModelDataNotValid
     * @throws ServerException
     * @throws CustomerContactNotFound
     * @throws CustomerGroupNotFound
     * @throws CompanyPositionNotFound
     * @throws CompanyPositionGroupNotFound
     * @throws DocumentNotFound
     */
    private function handleSoapFault(\SoapFault $soapFault, $ignoreCode = array())
    {
        if (property_exists($soapFault, 'faultcode')) {

            if (in_array((int)$soapFault->faultcode, $ignoreCode)) {
                return;
            }

            switch ((int)$soapFault->faultcode) {
                case 1:
                    throw new ServerException($soapFault->getMessage(), 1, $soapFault);
                case 2:
                    throw new AuthenticationFailed($soapFault->getMessage(), 2, $soapFault);
                case 3:
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
                    throw new ModelDataNotValid($message, 3, $soapFault);
                case 101:
                    throw new CustomerNotFound($soapFault->getMessage(), 101, $soapFault);
                case 102:
                    throw new CustomerGroupNotFound($soapFault->getMessage(), 102, $soapFault);
                case 103:
                    throw new DocumentNotFound($soapFault->getMessage(), 103, $soapFault);
                case 104:
                    throw new CustomerContactNotFound($soapFault->getMessage(), 104, $soapFault);
                case 111:
                    throw new CompanyPositionNotFound($soapFault->getMessage(), 111, $soapFault);
                case 112:
                    throw new CompanyPositionGroupNotFound($soapFault->getMessage(), 112, $soapFault);
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

    /**
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}