<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use easybill\SDK\Client;
use easybill\SDK\Endpoint;

$client = new Client(new Endpoint(getenv('API_KEY')));

$customer_id = '... your customer id ...';

$result = $client->request('PUT', 'customers/' . $customer_id, [
    'first_name' => 'Foo2',
    'last_name' => 'Bar2',
    'company_name' => 'FooBar GmbH2',
]);

print_r($result);
