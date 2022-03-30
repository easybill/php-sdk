<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Easybill\SDK\Client;
use Easybill\SDK\Endpoint;

$client = new Client(new Endpoint(getenv('API_KEY')));

$result = $client->request('POST', 'documents', [
    'title' => 'Example Title',
    'items' => [
        [
            'number' => '0001',
            'item_type' => 'POSITION',
            'quantity' => 3,
            'description' => 'Test Position',
            'single_price_net' => 2000,
            'vat_percent' => 19,
        ],
    ],
]);

print_r($result);
