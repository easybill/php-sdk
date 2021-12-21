<?php

namespace easybill\SDK\HttpClient;

use easybill\SDK\HttpClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class BaseHttpClient implements HttpClientInterface
{
    private HttpClientInterface $httpClient;
    private int $maxApiCallsPerMinute;

    /** @var int[] */
    private array $apiCalls = [];

    public function __construct(HttpClientInterface $httpClient, int $maxApiCallsPerMinute = 60)
    {
        $this->httpClient = $httpClient;
        $this->maxApiCallsPerMinute = $maxApiCallsPerMinute;
    }

    public function send(RequestInterface $request, array $options = []): ResponseInterface
    {
        $this->checkAndWaitForCall();

        // TODO:: Improve this client and allow to deal with both options.
        $options[RequestOptions::HTTP_ERRORS] = true;

        try {
            $res = $this->httpClient->send($request, $options);
            $this->apiCalls[] = time();

            return $res;
        } catch (ClientException $clientException) {
            if (429 === $clientException->getResponse()->getStatusCode()) {
                // Too Many Requests, wait and try again.
                sleep(30);

                return $this->send($request, $options);
            }

            throw $clientException;
        }
    }

    private function checkAndWaitForCall(): void
    {
        do {
            // remove old calls
            foreach ($this->apiCalls as $key => $time) {
                if ($time < (time() - 60)) {
                    unset($this->apiCalls[$key]);
                }
            }

            // count all calls!
            $count = count($this->apiCalls) + 1;

            if ($count > $this->maxApiCallsPerMinute) {
                sleep(2);
            }
        } while ($count > $this->maxApiCallsPerMinute);
    }
}
