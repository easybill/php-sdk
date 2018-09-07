<?php namespace easybill\SDK;

class Endpoint
{
    /** @var  string */
    private $apiKey;

    /** @var  string */
    private $host;

    /**
     * Endpoint constructor.
     *
     * @param string $apiKey
     * @param string $host
     */
    public function __construct($apiKey, $host = 'https://api.easybill.de/rest/v1/')
    {
        $this->apiKey = (string)$apiKey;
        $this->host = (string)$host;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }
}