<?php

require_once '../vendor/autoload.php';

use easybill\SDK\Client;
use easybill\SDK\Endpoint;

$client = new Client(new Endpoint('... your API key ...'));

$result = $client->request('GET', 'documents?' . http_build_query([
        'number' => '2000003338',
    ])
);

print_r($result);