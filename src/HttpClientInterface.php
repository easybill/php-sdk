<?php namespace easybill\SDK;

use Psr\Http\Message\RequestInterface;

interface HttpClientInterface
{
    /**
     * @param \Psr\Http\Message\RequestInterface $request
     * @param array                              $options
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function send(RequestInterface $request, array $options = []);
}