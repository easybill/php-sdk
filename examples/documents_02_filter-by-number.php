<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Easybill\SDK\Client;
use Easybill\SDK\Endpoint;

$client = new Client(new Endpoint(getenv('API_KEY')));

$result = $client->request(
    'GET',
    'documents?' . http_build_query([
        'number' => '2000003338',
    ])
);

print_r($result);
