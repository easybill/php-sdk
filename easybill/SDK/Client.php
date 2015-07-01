<?php

namespace easybill\SDK;

use easybill\SDK\Collection\CompanyPositionGroups;
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
        try {
            return $this->soapClient->searchCustomers((string)$term);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
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
     * @return Customer|null
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
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
     * @throws AuthenticationFailed
     * @throws CustomerNotFound
     * @throws ServerException
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
     * @return CustomerContacts
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
     */
    public function findCustomerContacts()
    {
        try {
            return $this->soapClient->getCustomerContacts();
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
    }

    /**
     * @param $customerID
     *
     * @return CustomerContacts
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws CustomerNotFound
     * @throws ServerException
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
     * @return Customer|null
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws CustomerContactNotFound
     * @throws ServerException
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
     * @throws AuthenticationFailed
     * @throws CustomerContactNotFound
     * @throws ServerException
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
     * @return CustomerGroups
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
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
     * @throws AuthenticationFailed
     * @throws ServerException
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
        $this->updateCustomerGroup($group);
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
        try {
            return $this->soapClient->setCustomerGroup($group);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
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
        try {
            $this->soapClient->deleteCustomerGroup((int)$groupID);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
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
        try {
            return $this->soapClient->searchCompanyPositions((string)$term);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
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
        try {
            return $this->soapClient->getCompanyPosition((int)$positionID);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault, array(111));
            return null;
        }
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
        try {
            return $this->soapClient->setCompanyPosition($position);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
    }

    /**
     * @param $positionID
     *
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws CompanyPositionNotFound
     * @throws ServerException
     */
    public function deleteCompanyPosition($positionID)
    {
        try {
            $this->soapClient->deleteCompanyPosition($positionID);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
    }

    /**
     * @return CompanyPositionGroups
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
     */
    public function findCompanyPositionGroups()
    {
        try {
            return $this->soapClient->getAllCompanyPositionGroups();
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
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
        try {
            return $this->soapClient->getCompanyPositionGroup((int)$groupID);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault, array(112));
            return null;
        }
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
        try {
            return $this->soapClient->setCompanyPositionGroup($group);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
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
        try {
            $this->soapClient->deleteCompanyPositionGroup((int)$groupID);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
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
        try {
            return $this->soapClient->getDocument((int)$documentID);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault, array(103));
            return null;
        }
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
        try {
            return $this->soapClient->findDocumentsByDocumentNumber($documentNumber);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
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

        try {
            return $this->soapClient->getDocuments($params);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
    }

    /**
     * @param int $documentID
     *
     * @return DocumentFile|null
     * @throws \SoapFault
     * @throws AuthenticationFailed
     * @throws ServerException
     */
    public function findDocumentPDF($documentID)
    {
        try {
            return $this->soapClient->getDocumentPDF((int)$documentID);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault, array(103));
            return null;
        }
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
        try {
            return $this->soapClient->getDocumentPayments((int)$documentID);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
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
        try {
            return $this->soapClient->getDocumentSent((int)$documentID);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
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
        try {
            return $this->soapClient->addDocumentPayment($payment);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
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
        try {
            /** @var DocumentCreated $documentCreated */
            $documentCreated = $this->soapClient->createDocument($createDocument);
            if (is_object($documentCreated->document->documentPosition)) {
                $documentCreated->document->documentPosition = array($documentCreated->document->documentPosition);
            }
            return $documentCreated;
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
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
        try {
            return $this->soapClient->createReminder($createReminder);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
        }
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
        try {
            return $this->soapClient->createReminder($createReminder);
        } catch (\SoapFault $soapFault) {
            $this->handleSoapFault($soapFault);
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
}