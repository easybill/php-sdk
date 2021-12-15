<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class DocumentAddress
{
    public function __construct(protected $data = [])
    {
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getSalutation(): int
    {
        return $this->data['salutation'];
    }

    public function getPersonal(): bool
    {
        return $this->data['personal'];
    }

    public function getTitle(): string
    {
        return $this->data['title'];
    }

    public function getFirstName(): string
    {
        return $this->data['first_name'];
    }

    public function getLastName(): string
    {
        return $this->data['last_name'];
    }

    public function getSuffix1(): string
    {
        return $this->data['suffix_1'];
    }

    public function getSuffix2(): string
    {
        return $this->data['suffix_2'];
    }

    public function getCompanyName(): string
    {
        return $this->data['company_name'];
    }

    public function getStreet(): string
    {
        return $this->data['street'];
    }

    public function getZipCode(): string
    {
        return $this->data['zip_code'];
    }

    public function getCity(): string
    {
        return $this->data['city'];
    }

    public function getState(): string
    {
        return $this->data['state'];
    }

    public function getCountry(): string
    {
        return $this->data['country'];
    }
}
