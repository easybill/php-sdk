<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class TextTemplate
{
    public function __construct(protected $data = [])
    {
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getCanModify(): bool
    {
        return $this->data['can_modify'];
    }

    public function getId(): int
    {
        return $this->data['id'];
    }

    public function setText(string $text): void
    {
        $this->data['text'] = $text;
    }

    public function getText(): string
    {
        return $this->data['text'];
    }

    public function setTitle(string $title): void
    {
        $this->data['title'] = $title;
    }

    public function getTitle(): string
    {
        return $this->data['title'];
    }
}
