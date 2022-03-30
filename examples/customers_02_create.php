<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Easybill\SDK\Client;
use Easybill\SDK\Endpoint;

$client = new Client(new Endpoint(getenv('API_KEY')));

$result = $client->request('POST', 'customers', [
    'first_name' => 'Foo',
    'last_name' => 'Bar',
    'company_name' => 'FooBar GmbH',
    'emails' => [
        'foo.bar@foobar.com',
    ],
]);

print_r($result);
