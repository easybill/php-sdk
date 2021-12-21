<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class TimeTracking implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function setClearedAt(?\DateTimeImmutable $cleared_at): void
    {
        $this->data['cleared_at'] = $cleared_at;
    }

    public function getClearedAt(): ?\DateTimeImmutable
    {
        return $this->attr('cleared_at');
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->attr('created_at');
    }

    public function setDateFromAt(?\DateTimeImmutable $date_from_at): void
    {
        $this->data['date_from_at'] = $date_from_at;
    }

    public function getDateFromAt(): ?\DateTimeImmutable
    {
        return $this->attr('date_from_at');
    }

    public function setDateThruAt(?\DateTimeImmutable $date_thru_at): void
    {
        $this->data['date_thru_at'] = $date_thru_at;
    }

    public function getDateThruAt(): ?\DateTimeImmutable
    {
        return $this->attr('date_thru_at');
    }

    public function setDescription(string $description): void
    {
        $this->data['description'] = $description;
    }

    public function getDescription(): string
    {
        return $this->attr('description');
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

    public function setNote(?string $note): void
    {
        $this->data['note'] = $note;
    }

    public function getNote(): ?string
    {
        return $this->attr('note');
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
        return $this->attr('number');
    }

    public function setPositionId(?int $position_id): void
    {
        $this->data['position_id'] = $position_id;
    }

    public function getPositionId(): ?int
    {
        return $this->attr('position_id');
    }

    public function setProjectId(?int $project_id): void
    {
        $this->data['project_id'] = $project_id;
    }

    public function getProjectId(): ?int
    {
        return $this->attr('project_id');
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

    /**
     * Tracked time in minutes.
     */
    public function setTimerValue(?int $timer_value): void
    {
        $this->data['timer_value'] = $timer_value;
    }

    public function getTimerValue(): ?int
    {
        return $this->attr('timer_value');
    }
}
