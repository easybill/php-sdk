<?php

namespace Easybill\SDK;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface HttpClientInterface
{
    public function send(RequestInterface $request, array $options = []): ResponseInterface;
}
