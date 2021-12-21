<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class WebHookLastResponse implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getDate(): string
    {
        return $this->get('date');
    }

    public function getCode(): int
    {
        return $this->get('code');
    }

    public function getResponse(): string
    {
        return $this->get('response');
    }
}
