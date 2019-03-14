<?php

require_once '../vendor/autoload.php';

use easybill\SDK\Client;
use easybill\SDK\Endpoint;

$client = new Client(new Endpoint('... your API key ...'));

$result = $client->request('GET', 'documents', [
    'title' => 'Example Title',
    'items' => [
        [
            'number'           => '0001',
            'item_type'        => 'POSITION',
            'quantity'         => 3,
            'description'      => 'Test Position',
            'single_price_net' => 2000,
            'vat_percent'      => 19,
        ],
    ],
]);

print_r($result);
