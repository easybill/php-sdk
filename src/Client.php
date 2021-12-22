<?php

namespace easybill\SDK;

use easybill\SDK\HttpClient\BaseHttpClient;
use easybill\SDK\HttpClient\GuzzleHttpClient;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Client
{
    private HttpClientInterface $httpClient;

    /**
     * @param string[] $headers
     */
    public function __construct(
        private Endpoint $endpoint,
        ?HttpClientInterface $httpClient = null,
        private array $headers = [],
    ) {
        if (null !== $httpClient) {
            $this->httpClient = $httpClient;
        } else {
            $this->httpClient = new BaseHttpClient(new GuzzleHttpClient());
        }
    }

    /**
     * @throws \JsonException
     */
    public function request(string $method, string $uri = '', array $body = null, bool $raw = false): string|array
    {
        $request = new Request(
            $method,
            $uri,
            array_merge([
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->endpoint->getApiKey(),
                'User-Agent' => 'easybill-php-sdk v4',
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
