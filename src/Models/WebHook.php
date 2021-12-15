<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class WebHook
{
    public function __construct(protected $data = [])
    {
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setContentType(string $content_type): void
    {
        $this->data['content_type'] = $content_type;
    }

    public function getContentType(): string
    {
        return $this->data['content_type'];
    }

    public function setDescription(string $description): void
    {
        $this->data['description'] = $description;
    }

    public function getDescription(): string
    {
        return $this->data['description'];
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
        return $this->data['events'];
    }

    public function getId(): int
    {
        return $this->data['id'];
    }

    public function setIsActive(bool $is_active): void
    {
        $this->data['is_active'] = $is_active;
    }

    public function getIsActive(): bool
    {
        return $this->data['is_active'];
    }

    public function getLastResponse(): \stdClass
    {
        return $this->data['last_response'];
    }

    public function setSecret(string $secret): void
    {
        $this->data['secret'] = $secret;
    }

    public function getSecret(): string
    {
        return $this->data['secret'];
    }

    public function setUrl(string $url): void
    {
        $this->data['url'] = $url;
    }

    public function getUrl(): string
    {
        return $this->data['url'];
    }
}
