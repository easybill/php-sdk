<?php

namespace easybill\SDK;

use easybill\SDK\HttpClient\BaseHttpClient;
use easybill\SDK\HttpClient\GuzzleHttpClient;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Client
{
    private Endpoint $endpoint;
    private HttpClientInterface $httpClient;
    /** @var string[] */
    private array $headers;

    public function __construct(Endpoint $endpoint, ?HttpClientInterface $httpClient = null, array $headers = [])
    {
        $this->endpoint = $endpoint;
        $this->headers = $headers;

        if ($httpClient) {
            $this->httpClient = $httpClient;
        } else {
            $this->httpClient = new BaseHttpClient(new GuzzleHttpClient());
        }
    }

    /**
     * @return mixed|string
     */
    public function request(string $method, string $uri = '', array $body = null, bool $raw = false)
    {
        $request = new Request(
            $method,
            $uri,
            array_merge([
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->endpoint->getApiKey(),
                'User-Agent' => 'easybill-php-sdk (rest-master)',
            ], $this->headers),
            is_array($body) ? json_encode($body, JSON_THROW_ON_ERROR) : null
        );

        $res = $this->send($request);

        if ($raw) {
            return $res->getBody()->getContents();
        }

        return json_decode($res->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
    }

    private function send(RequestInterface $request): ResponseInterface
    {
        return $this->httpClient->send($request, [
            'base_uri' => $this->endpoint->getHost(),
        ]);
    }
}
