<?php

namespace easybill\SDK\HttpClient;

use easybill\SDK\HttpClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Client;

class GuzzleHttpClient implements HttpClientInterface
{
    private Client $guzzleClient;

    public function __construct()
    {
        $this->guzzleClient = new Client();
    }

    public function send(RequestInterface $request, array $options = []): ResponseInterface
    {
        return $this->guzzleClient->send($request, $options);
    }
}
