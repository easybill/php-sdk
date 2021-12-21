<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class DocumentPayment implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function setAmount(int $amount): void
    {
        $this->data['amount'] = $amount;
    }

    public function getAmount(): int
    {
        return $this->get('amount');
    }

    public function setDocumentId(int $document_id): void
    {
        $this->data['document_id'] = $document_id;
    }

    public function getDocumentId(): int
    {
        return $this->get('document_id');
    }

    public function getId(): int
    {
        return $this->get('id');
    }

    public function setIsOverdueFee(bool $is_overdue_fee): void
    {
        $this->data['is_overdue_fee'] = $is_overdue_fee;
    }

    public function getIsOverdueFee(): bool
    {
        return $this->get('is_overdue_fee');
    }

    public function getLoginId(): int
    {
        return $this->get('login_id');
    }

    public function setNotice(string $notice): void
    {
        $this->data['notice'] = $notice;
    }

    public function getNotice(): string
    {
        return $this->get('notice');
    }

    public function setPaymentAt(string $payment_at): void
    {
        $this->data['payment_at'] = $payment_at;
    }

    public function getPaymentAt(): string
    {
        return $this->get('payment_at');
    }

    public function setType(string $type): void
    {
        $this->data['type'] = $type;
    }

    public function getType(): string
    {
        return $this->get('type');
    }

    public function setProvider(string $provider): void
    {
        $this->data['provider'] = $provider;
    }

    public function getProvider(): string
    {
        return $this->get('provider');
    }

    public function setReference(string $reference): void
    {
        $this->data['reference'] = $reference;
    }

    public function getReference(): string
    {
        return $this->get('reference');
    }
}
