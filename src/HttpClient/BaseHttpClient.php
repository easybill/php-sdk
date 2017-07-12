<?php namespace easybill\SDK\HttpClient;

use easybill\SDK\HttpClientInterface;
use GuzzleHttp\Exception\ClientException;
use Psr\Http\Message\RequestInterface;

class BaseHttpClient implements HttpClientInterface
{

    /** @var HttpClientInterface */
    private $httpClient;

    private $maxApiCallsPerMinute;

    /** @var array int[] */
    private $apiCalls = [];

    public function __construct(HttpClientInterface $httpClient, $maxApiCallsPerMinute = 60)
    {
        $this->httpClient = $httpClient;
        $this->maxApiCallsPerMinute = $maxApiCallsPerMinute;
    }

    /**
     * @param \Psr\Http\Message\RequestInterface $request
     * @param array                              $options
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function send(RequestInterface $request, array $options = [])
    {
        $this->checkAndWaitForCall();
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