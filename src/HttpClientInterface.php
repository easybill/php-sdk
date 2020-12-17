<?php

namespace easybill\SDK;

use Psr\Http\Message\RequestInterface;

interface HttpClientInterface
{
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function send(RequestInterface $request, array $options = []);
}
