<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class Stock
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

    public function setNote(string $note): void
    {
        $this->data['note'] = $note;
    }

    public function getNote(): string
    {
        return $this->data['note'];
    }

    public function setStockCount(int $stock_count): void
    {
        $this->data['stock_count'] = $stock_count;
    }

    public function getStockCount(): int
    {
        return $this->data['stock_count'];
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

    public function setStoredAt(?string $stored_at): void
    {
        $this->data['stored_at'] = $stored_at;
    }

    public function getStoredAt(): ?string
    {
        return $this->data['stored_at'];
    }

    public function getCreatedAt(): string
    {
        return $this->data['created_at'];
    }

    public function getUpdatedAt(): string
    {
        return $this->data['updated_at'];
    }
}
