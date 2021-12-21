<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class CustomerGroup implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function setName(string $name): void
    {
        $this->data['name'] = $name;
    }

    public function getName(): string
    {
        return $this->get('name');
    }

    public function setDescription(?string $description): void
    {
        $this->data['description'] = $description;
    }

    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    /**
     * Can be chosen freely.
     */
    public function setNumber(string $number): void
    {
        $this->data['number'] = $number;
    }

    public function getNumber(): string
    {
        return $this->get('number');
    }

    public function getDisplayName(): string
    {
        return $this->get('display_name');
    }

    public function getId(): int
    {
        return $this->get('id');
    }
}
