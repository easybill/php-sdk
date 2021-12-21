<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class ServiceDate implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * With DEFAULT no other fields are required and this message will be printed: 'Invoice date coincides with the time of supply'.<br/> For SERVICE or DELIVERY exactly one of the following fields must be set: date, date_from and date_to or text.
     */
    public function setType(string $type): void
    {
        $this->data['type'] = $type;
    }

    public function getType(): string
    {
        return $this->get('type');
    }

    public function setDate(?string $date): void
    {
        $this->data['date'] = $date;
    }

    public function getDate(): ?string
    {
        return $this->get('date');
    }

    public function setDateFrom(?string $date_from): void
    {
        $this->data['date_from'] = $date_from;
    }

    public function getDateFrom(): ?string
    {
        return $this->get('date_from');
    }

    public function setDateTo(?string $date_to): void
    {
        $this->data['date_to'] = $date_to;
    }

    public function getDateTo(): ?string
    {
        return $this->get('date_to');
    }

    public function setText(?string $text): void
    {
        $this->data['text'] = $text;
    }

    public function getText(): ?string
    {
        return $this->get('text');
    }
}
