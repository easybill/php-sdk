<?php

declare(strict_types=1);

namespace Easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.70.1
 * @version rest v1
 */
class Project implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
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
        return $this->attr('budget_amount');
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
        return $this->attr('budget_time');
    }

    public function setCustomerId(?int $customer_id): void
    {
        $this->data['customer_id'] = $customer_id;
    }

    public function getCustomerId(): ?int
    {
        return $this->attr('customer_id');
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
        return $this->attr('hourly_rate');
    }

    public function getId(): int
    {
        return $this->attr('id');
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

    public function setNote(?string $note): void
    {
        $this->data['note'] = $note;
    }

    public function getNote(): ?string
    {
        return $this->attr('note');
    }

    /**
     * @enum ["OPEN","DONE","CANCEL"]
     */
    public function setStatus(string $status): void
    {
        $this->data['status'] = $status;
    }

    /**
     * @enum ["OPEN","DONE","CANCEL"]
     */
    public function getStatus(): string
    {
        return $this->attr('status');
    }

    public function setDueAt(?\DateTimeImmutable $due_at): void
    {
        $this->data['due_at'] = $due_at;
    }

    public function getDueAt(): ?\DateTimeImmutable
    {
        return $this->attrDate('due_at');
    }

    /**
     * @enum ["ALWAYS","ONCE","NEVER"]
     */
    public function setBudgetNotifyFrequency(string $budget_notify_frequency): void
    {
        $this->data['budget_notify_frequency'] = $budget_notify_frequency;
    }

    /**
     * @enum ["ALWAYS","ONCE","NEVER"]
     */
    public function getBudgetNotifyFrequency(): string
    {
        return $this->attr('budget_notify_frequency');
    }

    public function getConsumedTime(): int
    {
        return $this->attr('consumed_time');
    }

    public function getConsumedAmount(): int
    {
        return $this->attr('consumed_amount');
    }
}
