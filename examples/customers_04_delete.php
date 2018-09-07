<?php

require_once '../vendor/autoload.php';

use easybill\SDK\Client;
use easybill\SDK\Endpoint;

$client = new Client(new Endpoint('... your API key ...'));

$customer_id = '... your customer id ...';

$client->request('DELETE', 'customers/' . $customer_id);
