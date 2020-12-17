<?php

require_once '../vendor/autoload.php';

use easybill\SDK\Client;
use easybill\SDK\Endpoint;

$client = new Client(new Endpoint('... your API key ...'));

$result = $client->request('POST', 'customers', [
    'first_name' => 'Foo',
    'last_name' => 'Bar',
    'company_name' => 'FooBar GmbH',
    'emails' => [
        'foo.bar@foobar.com',
    ],
]);

print_r($result);
