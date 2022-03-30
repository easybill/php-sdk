<?php

declare(strict_types=1);

namespace Easybill\SDK;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface HttpClientInterface
{
    public function send(RequestInterface $request, array $options = []): ResponseInterface;
}
