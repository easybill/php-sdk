<?php

declare(strict_types=1);

namespace Easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.70.1
 * @version rest v1
 */
class PositionGroup implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function setDescription(?string $description): void
    {
        $this->data['description'] = $description;
    }

    public function getDescription(): ?string
    {
        return $this->attr('description');
    }

    public function getLoginId(): int
    {
        return $this->attr('login_id');
    }

    public function setName(string $name): void
    {
        $this->data['name'] = $name;
    }

    public function getName(): string
    {
        return $this->attr('name');
    }

    public function setNumber(string $number): void
    {
        $this->data['number'] = $number;
    }

    public function getNumber(): string
    {
        return $this->attr('number');
    }

    public function getDisplayName(): string
    {
        return $this->attr('display_name');
    }

    public function getId(): int
    {
        return $this->attr('id');
    }
}
