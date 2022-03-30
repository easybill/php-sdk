<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use Easybill\SDK\Client;
use Easybill\SDK\Endpoint;
use Easybill\SDK\Models\Customer;

$client = new Client(new Endpoint(getenv('API_KEY')));

$result = $client->request('GET', 'customers');

$logins = array_map(static fn (array $data): Customer => new Customer($data), $result['items']);

var_dump($result);
