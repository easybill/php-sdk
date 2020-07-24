<?php namespace easybill\SDK\HttpClient;

use easybill\SDK\HttpClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;

class BaseHttpClient implements HttpClientInterface
{

    /** @var HttpClientInterface */
    private $httpClient;

    /** @var int */
    private $maxApiCallsPerMinute;

    /** @var array int[] */
    private $apiCalls = [];

    /**
     * @param \easybill\SDK\HttpClientInterface $httpClient
     * @param int $maxApiCallsPerMinute
     */
    public function __construct(HttpClientInterface $httpClient, $maxApiCallsPerMinute = 60)
    {
        $this->httpClient = $httpClient;
        $this->maxApiCallsPerMinute = $maxApiCallsPerMinute;
    }

    /**
     * @param \Psr\Http\Message\RequestInterface $request
     * @param array $options
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function send(RequestInterface $request, array $options = [])
    {
        $this->checkAndWaitForCall();

        // TODO:: Improve this client and allow to deal with both options.
        $options[RequestOptions::HTTP_ERRORS] = true;

        try {
            $res = $this->httpClient->send($request, $options);
            $this->apiCalls[] = time();

            return $res;
        } catch (ClientException $clientException) {
            if ($clientException->hasResponse() && $clientException->getResponse()->getStatusCode() === 429) {
                // Too Many Requests, wait and try again.
                sleep(30);
                return $this->send($request, $options);
            }

            throw $clientException;
        }
    }

    private function checkAndWaitForCall()
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