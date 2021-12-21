<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.68.0
 * @version rest v1
 */
class WebHook implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * @enum ["form","json"]
     */
    public function setContentType(string $content_type): void
    {
        $this->data['content_type'] = $content_type;
    }

    /**
     * @enum ["form","json"]
     */
    public function getContentType(): string
    {
        return $this->attr('content_type');
    }

    public function setDescription(string $description): void
    {
        $this->data['description'] = $description;
    }

    public function getDescription(): string
    {
        return $this->attr('description');
    }

    public function setEvents(array $events): void
    {
        $this->data['events'] = $events;
    }

    /**
     * @return string[]
     */
    public function getEvents(): array
    {
        return $this->attr('events');
    }

    public function getId(): int
    {
        return $this->attr('id');
    }

    public function setIsActive(bool $is_active): void
    {
        $this->data['is_active'] = $is_active;
    }

    public function getIsActive(): bool
    {
        return $this->attr('is_active');
    }

    public function getLastResponse(): WebHookLastResponse
    {
        return $this->attrInstance('last_response', \easybill\SDK\Models\WebHookLastResponse::class);
    }

    public function setSecret(string $secret): void
    {
        $this->data['secret'] = $secret;
    }

    public function getSecret(): string
    {
        return $this->attr('secret');
    }

    public function setUrl(string $url): void
    {
        $this->data['url'] = $url;
    }

    public function getUrl(): string
    {
        return $this->attr('url');
    }
}
