<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use easybill\SDK\Client;
use easybill\SDK\Endpoint;
use easybill\SDK\Models\Login;

$client = new Client(new Endpoint(getenv('API_KEY')));

$result = $client->request('GET', 'logins');
$result['items'] = array_map(static fn (array $data): Login => new Login($data), $result['items']);

var_dump($result);
