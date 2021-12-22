<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Easybill\SDK\Client;
use Easybill\SDK\Endpoint;

$client = new Client(new Endpoint(getenv('API_KEY')));

$result = $client->request('GET', 'documents');

print_r($result);
