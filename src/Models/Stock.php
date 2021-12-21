<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class Stock implements ToArrayInterface
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

    public function setNote(string $note): void
    {
        $this->data['note'] = $note;
    }

    public function getNote(): string
    {
        return $this->get('note');
    }

    public function setStockCount(int $stock_count): void
    {
        $this->data['stock_count'] = $stock_count;
    }

    public function getStockCount(): int
    {
        return $this->get('stock_count');
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

    public function setStoredAt(?string $stored_at): void
    {
        $this->data['stored_at'] = $stored_at;
    }

    public function getStoredAt(): ?string
    {
        return $this->get('stored_at');
    }

    public function getCreatedAt(): string
    {
        return $this->get('created_at');
    }

    public function getUpdatedAt(): string
    {
        return $this->get('updated_at');
    }
}
