<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use easybill\SDK\Client;
use easybill\SDK\Endpoint;

$client = new Client(new Endpoint(getenv('API_KEY')));

$docID = 'Your docID';

$result = $client->request('GET', "documents/{$docID}/pdf", null, true);

$file = tempnam(sys_get_temp_dir(), 'pdf_');
file_put_contents($file, $result);
rename($file, 'document_' . $docID . '.pdf');
