<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class Project
{
    public function __construct(protected $data = [])
    {
    }

    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Project budget in cents (e.g. "150" = 1.50€).
     */
    public function setBudgetAmount(int $budget_amount): void
    {
        $this->data['budget_amount'] = $budget_amount;
    }

    public function getBudgetAmount(): int
    {
        return $this->data['budget_amount'];
    }

    /**
     * Time budget in minutes (e.g. "90" = 1 hour and 30 minutes).
     */
    public function setBudgetTime(int $budget_time): void
    {
        $this->data['budget_time'] = $budget_time;
    }

    public function getBudgetTime(): int
    {
        return $this->data['budget_time'];
    }

    public function setCustomerId(?int $customer_id): void
    {
        $this->data['customer_id'] = $customer_id;
    }

    public function getCustomerId(): ?int
    {
        return $this->data['customer_id'];
    }

    /**
     * Hourly rate in cents (e.g. "150" = 1.50€).
     */
    public function setHourlyRate(float $hourly_rate): void
    {
        $this->data['hourly_rate'] = $hourly_rate;
    }

    public function getHourlyRate(): float
    {
        return $this->data['hourly_rate'];
    }

    public function getId(): int
    {
        return $this->data['id'];
    }

    /**
     * If omitted or null, the currently active login is used.
     */
    public function setLoginId(?int $login_id): void
    {
        $this->data['login_id'] = $login_id;
    }

    public function getLoginId(): ?int
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

    public function setNote(?string $note): void
    {
        $this->data['note'] = $note;
    }

    public function getNote(): ?string
    {
        return $this->data['note'];
    }

    public function setStatus(string $status): void
    {
        $this->data['status'] = $status;
    }

    public function getStatus(): string
    {
        return $this->data['status'];
    }

    public function setDueAt(?string $due_at): void
    {
        $this->data['due_at'] = $due_at;
    }

    public function getDueAt(): ?string
    {
        return $this->data['due_at'];
    }

    public function setBudgetNotifyFrequency(string $budget_notify_frequency): void
    {
        $this->data['budget_notify_frequency'] = $budget_notify_frequency;
    }

    public function getBudgetNotifyFrequency(): string
    {
        return $this->data['budget_notify_frequency'];
    }

    public function getConsumedTime(): int
    {
        return $this->data['consumed_time'];
    }

    public function getConsumedAmount(): int
    {
        return $this->data['consumed_amount'];
    }
}
