<?php

require_once '../vendor/autoload.php';

use easybill\SDK\Client;
use easybill\SDK\Endpoint;

$client = new Client(new Endpoint('... your API key ...'));

$result = $client->request(
    'GET',
    'documents?' . http_build_query([
        'page' => '2',
        'limit' => 10,
    ])
);

print_r($result);
