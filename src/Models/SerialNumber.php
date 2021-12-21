<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class SerialNumber implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getId(): int
    {
        return $this->get('id');
    }

    public function setSerialNumber(string $serial_number): void
    {
        $this->data['serial_number'] = $serial_number;
    }

    public function getSerialNumber(): string
    {
        return $this->get('serial_number');
    }

    public function setPositionId(int $position_id): void
    {
        $this->data['position_id'] = $position_id;
    }

    public function getPositionId(): int
    {
        return $this->get('position_id');
    }

    public function getDocumentId(): ?int
    {
        return $this->get('document_id');
    }

    public function getDocumentPositionId(): ?int
    {
        return $this->get('document_position_id');
    }

    public function getUsedAt(): ?string
    {
        return $this->get('used_at');
    }

    public function getCreatedAt(): string
    {
        return $this->get('created_at');
    }
}
