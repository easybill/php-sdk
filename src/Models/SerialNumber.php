<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class SerialNumber
{
    public function __construct(protected $data = [])
    {
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getId(): int
    {
        return $this->data['id'];
    }

    public function setSerialNumber(string $serial_number): void
    {
        $this->data['serial_number'] = $serial_number;
    }

    public function getSerialNumber(): string
    {
        return $this->data['serial_number'];
    }

    public function setPositionId(int $position_id): void
    {
        $this->data['position_id'] = $position_id;
    }

    public function getPositionId(): int
    {
        return $this->data['position_id'];
    }

    public function getDocumentId(): ?int
    {
        return $this->data['document_id'];
    }

    public function getDocumentPositionId(): ?int
    {
        return $this->data['document_position_id'];
    }

    public function getUsedAt(): ?string
    {
        return $this->data['used_at'];
    }

    public function getCreatedAt(): string
    {
        return $this->data['created_at'];
    }
}
