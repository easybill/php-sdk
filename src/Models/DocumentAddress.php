<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`
 * This information comes from the customer which can be set with customer_id.
 */
class DocumentAddress implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getSalutation(): int
    {
        return $this->get('salutation');
    }

    public function getPersonal(): bool
    {
        return $this->get('personal');
    }

    public function getTitle(): string
    {
        return $this->get('title');
    }

    public function getFirstName(): string
    {
        return $this->get('first_name');
    }

    public function getLastName(): string
    {
        return $this->get('last_name');
    }

    public function getSuffix1(): string
    {
        return $this->get('suffix_1');
    }

    public function getSuffix2(): string
    {
        return $this->get('suffix_2');
    }

    public function getCompanyName(): string
    {
        return $this->get('company_name');
    }

    public function getStreet(): string
    {
        return $this->get('street');
    }

    public function getZipCode(): string
    {
        return $this->get('zip_code');
    }

    public function getCity(): string
    {
        return $this->get('city');
    }

    public function getState(): string
    {
        return $this->get('state');
    }

    public function getCountry(): string
    {
        return $this->get('country');
    }
}
