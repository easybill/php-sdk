<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class TimeTracking
{
    public function __construct(protected $data = [])
    {
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setClearedAt(?string $cleared_at): void
    {
        $this->data['cleared_at'] = $cleared_at;
    }

    public function getClearedAt(): ?string
    {
        return $this->data['cleared_at'];
    }

    public function getCreatedAt(): string
    {
        return $this->data['created_at'];
    }

    public function setDateFromAt(?string $date_from_at): void
    {
        $this->data['date_from_at'] = $date_from_at;
    }

    public function getDateFromAt(): ?string
    {
        return $this->data['date_from_at'];
    }

    public function setDateThruAt(?string $date_thru_at): void
    {
        $this->data['date_thru_at'] = $date_thru_at;
    }

    public function getDateThruAt(): ?string
    {
        return $this->data['date_thru_at'];
    }

    public function setDescription(string $description): void
    {
        $this->data['description'] = $description;
    }

    public function getDescription(): string
    {
        return $this->data['description'];
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

    public function setNote(?string $note): void
    {
        $this->data['note'] = $note;
    }

    public function getNote(): ?string
    {
        return $this->data['note'];
    }

    /**
     * Can be chosen freely.
     */
    public function setNumber(?string $number): void
    {
        $this->data['number'] = $number;
    }

    public function getNumber(): ?string
    {
        return $this->data['number'];
    }

    public function setPositionId(?int $position_id): void
    {
        $this->data['position_id'] = $position_id;
    }

    public function getPositionId(): ?int
    {
        return $this->data['position_id'];
    }

    public function setProjectId(?int $project_id): void
    {
        $this->data['project_id'] = $project_id;
    }

    public function getProjectId(): ?int
    {
        return $this->data['project_id'];
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

    /**
     * Tracked time in minutes.
     */
    public function setTimerValue(?int $timer_value): void
    {
        $this->data['timer_value'] = $timer_value;
    }

    public function getTimerValue(): ?int
    {
        return $this->data['timer_value'];
    }
}
