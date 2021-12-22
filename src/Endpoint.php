<?php

declare(strict_types=1);

namespace Easybill\SDK;

class Endpoint
{
    private string $apiKey;
    private string $host;

    public function __construct(string $apiKey, string $host = 'https://api.easybill.de/rest/v1/')
    {
        $this->apiKey = $apiKey;
        $this->host = $host;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function getHost(): string
    {
        return $this->host;
    }
}
