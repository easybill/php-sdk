<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class TextTemplate implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getCanModify(): bool
    {
        return $this->get('can_modify');
    }

    public function getId(): int
    {
        return $this->get('id');
    }

    public function setText(string $text): void
    {
        $this->data['text'] = $text;
    }

    public function getText(): string
    {
        return $this->get('text');
    }

    public function setTitle(string $title): void
    {
        $this->data['title'] = $title;
    }

    public function getTitle(): string
    {
        return $this->get('title');
    }
}
