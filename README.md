easybill PHP SDK
================

[![Latest Stable Version](https://poser.pugx.org/easybill/php-sdk/v/stable.png)](https://packagist.org/packages/easybill/php-sdk) [![Total Downloads](https://poser.pugx.org/easybill/php-sdk/downloads.png)](https://packagist.org/packages/easybill/php-sdk) [![Latest Unstable Version](https://poser.pugx.org/easybill/php-sdk/v/unstable.png)](https://packagist.org/packages/easybill/php-sdk) [![License](https://poser.pugx.org/easybill/php-sdk/license.png)](https://packagist.org/packages/easybill/php-sdk)

## Installation
The recommended way of installing this library is using [Composer](http://getcomposer.org/). 

Add this repository to your composer information using the following command

```bash
composer require easybill/php-sdk dev-master
```

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