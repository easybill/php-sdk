easybill PHP SDK
================

[![Latest Stable Version](https://poser.pugx.org/easybill/php-sdk/v/stable.png)](https://packagist.org/packages/easybill/php-sdk) [![Total Downloads](https://poser.pugx.org/easybill/php-sdk/downloads.png)](https://packagist.org/packages/easybill/php-sdk) [![Latest Unstable Version](https://poser.pugx.org/easybill/php-sdk/v/unstable.png)](https://packagist.org/packages/easybill/php-sdk) [![License](https://poser.pugx.org/easybill/php-sdk/license.png)](https://packagist.org/packages/easybill/php-sdk)

## Installation
The recommended way of installing this library is using [Composer](http://getcomposer.org/). 

Add this repository to your composer information using the following command

```bash
composer require easybill/php-sdk dev-master
```

## Structure/ Functions

```
// Customer
Client::searchCustomers($term): Customers
Client::findCustomer($customerID): Customer|null
Client::findCustomerByCustomerNumber($customerNumber): Customer|null
Client::createCustomer(Customer $customer): Customer
Client::updateCustomer(Customer $customer): Customer
Client::deleteCustomer($customerID): void

// Customer contact
Client::findCustomerContacts(): CustomerContacts
Client::findCustomerContactsByCustomer($customerID): CustomerContacts
Client::findCustomerContact($contactID): CustomerContact|null
Client::createCustomerContact(CustomerContact $contact): CustomerContact
Client::updateCustomerContact(CustomerContact $contact): CustomerContact
Client::deleteCustomerContact($contactID): void

// Customer group
Client::findCustomerGroups(): CustomerGroups
Client::findCustomerGroup($groupID): CustomerGroup|null
Client::createCustomerGroup(CustomerGroup $group): CustomerGroup
Client::updateCustomerGroup(CustomerGroup $group): CustomerGroup
Client::deleteCustomerGroup($groupID): void

// Company position
Client::searchCompanyPositions($term): CompanyPositions
Client::findCompanyPosition($positionID): CompanyPosition|null
Client::createCompanyPosition(CompanyPosition $position): CompanyPosition
Client::updateCompanyPosition(CompanyPosition $position): CompanyPosition
Client::deleteCompanyPosition($positionID): void

// Company position group
Client::findCompanyPositionGroups(): CompanyPositionGroups
Client::findCompanyPositionGroup($groupID): CompanyPositionGroup
Client::createCompanyPositionGroup(CompanyPositionGroup $group): CompanyPositionGroup
Client::updateCompanyPositionGroup(CompanyPositionGroup $group): CompanyPositionGroup
Client::deleteCompanyPositionGroup($groupID): void

// Document
Client::findDocument($documentID): Document
Client::findDocumentsByDocumentNumber($documentNumber): Documents
Client::findDocuments(DocumentsParams $params): Documents
Client::createDocument(CreateDocument $document): DocumentCreated

Client::findDocumentPDF($documentID): DocumentFile
Client::findDocumentPayments($documentID): Payments
Client::findDocumentSent($documentID): Outbox

Client::createPayment(Payment $payment): boolean

// Reminder
Client::createReminder(CreateReminder $document): DocumentCreated

// Dunning
Client::createReminder(CreateReminder $document): DocumentCreated

```

## Todo
- toCancelDocument()
- toCreditDocument()

## Todo new SOAP functions
- upload attachments via soap
- use attachment by create new document

## Usage

```php
// create a new service client
$client = new \easybill\SDK\Client(__DIR__ . '/path/to/soap.easybill.wsdl', 'your api secret key');

// create a new customer
$customer = new \easybill\SDK\Model\Customer();
$customer->lastName = 'bar';
$customer = $client->createCustomer($customer);


// update customer
$customer->firstName = 'foo';
try {
    $customer = $client->updateCustomer($customer);
} catch(\easybill\SDK\Exception\CustomerNotFoundException $exception) {
    // customer not found!
}

```
