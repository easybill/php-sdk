<?php

namespace easybill\SDK\HttpClient;

use easybill\SDK\HttpClientInterface;
use Psr\Http\Message\RequestInterface;

class GuzzleHttpClient implements HttpClientInterface
{
    private $guzzleClient;

    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function send(RequestInterface $request, array $options = [])
    {
        if ($this->guzzleClient === null) {
            $this->guzzleClient = new \GuzzleHttp\Client();
        }

        return $this->guzzleClient->send($request, $options);
    }
}
