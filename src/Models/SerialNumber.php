<?php

declare(strict_types=1);

namespace Easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.68.0
 * @version rest v1
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
        return $this->attr('id');
    }

    public function setSerialNumber(string $serial_number): void
    {
        $this->data['serial_number'] = $serial_number;
    }

    public function getSerialNumber(): string
    {
        return $this->attr('serial_number');
    }

    public function setPositionId(int $position_id): void
    {
        $this->data['position_id'] = $position_id;
    }

    public function getPositionId(): int
    {
        return $this->attr('position_id');
    }

    public function getDocumentId(): ?int
    {
        return $this->attr('document_id');
    }

    public function getDocumentPositionId(): ?int
    {
        return $this->attr('document_position_id');
    }

    public function getUsedAt(): ?string
    {
        return $this->attr('used_at');
    }

    public function getCreatedAt(): string
    {
        return $this->attr('created_at');
    }
}
