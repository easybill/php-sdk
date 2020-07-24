<?php namespace easybill\SDK;

use easybill\SDK\HttpClient\BaseHttpClient;
use easybill\SDK\HttpClient\GuzzleHttpClient;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;

class Client
{
    /** @var Endpoint */
    private $endpoint;

    /** @var HttpClientInterface */
    private $httpClient;

    /** @var string[] */
    private $headers;

    public function __construct(Endpoint $endpoint, HttpClientInterface $httpClient = null, array $headers = [])
    {
        $this->endpoint = $endpoint;
        $this->httpClient = $httpClient;
        $this->headers = $headers;

        if ($this->httpClient === null) {
            $this->httpClient = new BaseHttpClient(new GuzzleHttpClient());
        }
    }


    /**
     * @param string $method
     * @param string $uri
     * @param array|null $body
     * @param bool $raw
     *
     * @return mixed|string
     */
    public function request($method, $uri = '', array $body = null, $raw = false)
    {
        $request = new Request(
            (string)$method,
            (string)$uri,
            array_merge([
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->endpoint->getApiKey(),
                'User-Agent' => 'easybill-php-sdk (rest-master)',
            ], $this->headers),
            is_array($body) ? json_encode($body) : null
        );

        $res = $this->send($request);

        return $raw ? $res->getBody()->getContents() : json_decode($res->getBody()->getContents(), true);
    }

    /**
     * @param \Psr\Http\Message\RequestInterface $request
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    private function send(RequestInterface $request)
    {
        return $this->httpClient->send($request, [
            'base_uri' => $this->endpoint->getHost(),
            'http_errors' => true,
            'timeout' => 30,
        ]);
    }
}