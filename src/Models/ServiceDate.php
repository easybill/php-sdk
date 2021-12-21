<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.68.0
 * @version rest v1
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
     *
     * @enum ["DEFAULT","SERVICE","DELIVERY"]
     */
    public function setType(string $type): void
    {
        $this->data['type'] = $type;
    }

    /**
     * @enum ["DEFAULT","SERVICE","DELIVERY"]
     */
    public function getType(): string
    {
        return $this->attr('type');
    }

    public function setDate(?\DateTimeImmutable $date): void
    {
        $this->data['date'] = $date;
    }

    public function getDate(): ?\DateTimeImmutable
    {
        return $this->attrDate('date');
    }

    public function setDateFrom(?\DateTimeImmutable $date_from): void
    {
        $this->data['date_from'] = $date_from;
    }

    public function getDateFrom(): ?\DateTimeImmutable
    {
        return $this->attrDate('date_from');
    }

    public function setDateTo(?\DateTimeImmutable $date_to): void
    {
        $this->data['date_to'] = $date_to;
    }

    public function getDateTo(): ?\DateTimeImmutable
    {
        return $this->attrDate('date_to');
    }

    public function setText(?string $text): void
    {
        $this->data['text'] = $text;
    }

    public function getText(): ?string
    {
        return $this->attr('text');
    }
}
