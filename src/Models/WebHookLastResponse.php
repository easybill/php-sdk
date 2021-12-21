<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.68.0
 * @version rest v1
 */
class WebHookLastResponse implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getDate(): \DateTimeImmutable
    {
        return $this->attr('date');
    }

    public function getCode(): int
    {
        return $this->attr('code');
    }

    public function getResponse(): string
    {
        return $this->attr('response');
    }
}
