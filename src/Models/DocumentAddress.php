<?php

declare(strict_types=1);

namespace Easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.68.0
 * @version rest v1
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
        return $this->attr('salutation');
    }

    public function getPersonal(): bool
    {
        return $this->attr('personal');
    }

    public function getTitle(): string
    {
        return $this->attr('title');
    }

    public function getFirstName(): string
    {
        return $this->attr('first_name');
    }

    public function getLastName(): string
    {
        return $this->attr('last_name');
    }

    public function getSuffix1(): string
    {
        return $this->attr('suffix_1');
    }

    public function getSuffix2(): string
    {
        return $this->attr('suffix_2');
    }

    public function getCompanyName(): string
    {
        return $this->attr('company_name');
    }

    public function getStreet(): string
    {
        return $this->attr('street');
    }

    public function getZipCode(): string
    {
        return $this->attr('zip_code');
    }

    public function getCity(): string
    {
        return $this->attr('city');
    }

    public function getState(): string
    {
        return $this->attr('state');
    }

    public function getCountry(): string
    {
        return $this->attr('country');
    }
}
