<?php

declare(strict_types=1);

namespace Easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.68.0
 * @version rest v1
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
        return $this->attr('id');
    }

    public function setNote(string $note): void
    {
        $this->data['note'] = $note;
    }

    public function getNote(): string
    {
        return $this->attr('note');
    }

    public function setStockCount(int $stock_count): void
    {
        $this->data['stock_count'] = $stock_count;
    }

    public function getStockCount(): int
    {
        return $this->attr('stock_count');
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

    public function setStoredAt(?string $stored_at): void
    {
        $this->data['stored_at'] = $stored_at;
    }

    public function getStoredAt(): ?string
    {
        return $this->attr('stored_at');
    }

    public function getCreatedAt(): string
    {
        return $this->attr('created_at');
    }

    public function getUpdatedAt(): string
    {
        return $this->attr('updated_at');
    }
}
