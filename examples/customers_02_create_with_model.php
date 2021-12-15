<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use easybill\SDK\Client;
use easybill\SDK\Endpoint;
use easybill\SDK\Models\Customer;

$client = new Client(new Endpoint(getenv('API_KEY')));

$customerCreate = new Customer();
$customerCreate->setFirstName('Foo');
$customerCreate->setLastName('Bar');
$customerCreate->setCompanyName('FooBar GmbH');
$customerCreate->setEmails(['foo.bar@foobar.com']);

$result = $client->request('POST', 'customers', $customerCreate->getData());

$customer = new Customer($result);

var_dump($customer);
