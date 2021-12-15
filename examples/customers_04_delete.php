<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use easybill\SDK\Client;
use easybill\SDK\Endpoint;

$client = new Client(new Endpoint(getenv('API_KEY')));

$customer_id = '... your customer id ...';

$client->request('DELETE', 'customers/' . $customer_id);
