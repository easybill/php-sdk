<?php

require_once '../vendor/autoload.php';

use easybill\SDK\Client;
use easybill\SDK\Endpoint;

$docID = 'Your docID';

$client = new Client(new Endpoint('... your API key ...'));

$result = $client->request('GET', "documents/{$docID}/pdf", null, true);

$file = tempnam(sys_get_temp_dir(), 'pdf_');
file_put_contents($file, $result);
rename($file, 'document_' . $docID . '.pdf');