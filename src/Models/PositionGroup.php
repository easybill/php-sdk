<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class PositionGroup
{
    public function __construct(protected $data = [])
    {
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setDescription(?string $description): void
    {
        $this->data['description'] = $description;
    }

    public function getDescription(): ?string
    {
        return $this->data['description'];
    }

    public function getLoginId(): int
    {
        return $this->data['login_id'];
    }

    public function setName(string $name): void
    {
        $this->data['name'] = $name;
    }

    public function getName(): string
    {
        return $this->data['name'];
    }

    public function setNumber(string $number): void
    {
        $this->data['number'] = $number;
    }

    public function getNumber(): string
    {
        return $this->data['number'];
    }

    public function getDisplayName(): string
    {
        return $this->data['display_name'];
    }

    public function getId(): int
    {
        return $this->data['id'];
    }
}