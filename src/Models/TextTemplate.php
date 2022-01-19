<?php

declare(strict_types=1);

namespace Easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.70.1
 * @version rest v1
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
        return $this->attr('can_modify');
    }

    public function getId(): int
    {
        return $this->attr('id');
    }

    public function setText(string $text): void
    {
        $this->data['text'] = $text;
    }

    public function getText(): string
    {
        return $this->attr('text');
    }

    public function setTitle(string $title): void
    {
        $this->data['title'] = $title;
    }

    public function getTitle(): string
    {
        return $this->attr('title');
    }
}
