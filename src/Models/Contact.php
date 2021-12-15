<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class Contact
{
    public function __construct(protected $data = [])
    {
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setCity(string $city): void
    {
        $this->data['city'] = $city;
    }

    public function getCity(): string
    {
        return $this->data['city'];
    }

    public function setState(string $state): void
    {
        $this->data['state'] = $state;
    }

    public function getState(): string
    {
        return $this->data['state'];
    }

    public function setCompanyName(?string $company_name): void
    {
        $this->data['company_name'] = $company_name;
    }

    public function getCompanyName(): ?string
    {
        return $this->data['company_name'];
    }

    /**
     * Two-letter country code.
     */
    public function setCountry(string $country): void
    {
        $this->data['country'] = $country;
    }

    public function getCountry(): string
    {
        return $this->data['country'];
    }

    public function setDepartment(?string $department): void
    {
        $this->data['department'] = $department;
    }

    public function getDepartment(): ?string
    {
        return $this->data['department'];
    }

    public function setEmails(array $emails): void
    {
        $this->data['emails'] = $emails;
    }

    /**
     * @return string[]
     */
    public function getEmails(): array
    {
        return $this->data['emails'];
    }

    public function setFax(?string $fax): void
    {
        $this->data['fax'] = $fax;
    }

    public function getFax(): ?string
    {
        return $this->data['fax'];
    }

    public function setFirstName(?string $first_name): void
    {
        $this->data['first_name'] = $first_name;
    }

    public function getFirstName(): ?string
    {
        return $this->data['first_name'];
    }

    public function getId(): int
    {
        return $this->data['id'];
    }

    public function setLastName(?string $last_name): void
    {
        $this->data['last_name'] = $last_name;
    }

    public function getLastName(): ?string
    {
        return $this->data['last_name'];
    }

    public function getLoginId(): int
    {
        return $this->data['login_id'];
    }

    public function setMobile(?string $mobile): void
    {
        $this->data['mobile'] = $mobile;
    }

    public function getMobile(): ?string
    {
        return $this->data['mobile'];
    }

    public function setNote(?string $note): void
    {
        $this->data['note'] = $note;
    }

    public function getNote(): ?string
    {
        return $this->data['note'];
    }

    public function setPersonal(bool $personal): void
    {
        $this->data['personal'] = $personal;
    }

    public function getPersonal(): bool
    {
        return $this->data['personal'];
    }

    public function setPhone1(?string $phone_1): void
    {
        $this->data['phone_1'] = $phone_1;
    }

    public function getPhone1(): ?string
    {
        return $this->data['phone_1'];
    }

    public function setPhone2(?string $phone_2): void
    {
        $this->data['phone_2'] = $phone_2;
    }

    public function getPhone2(): ?string
    {
        return $this->data['phone_2'];
    }

    /**
     * 0: empty<br/> 1: Herrn<br/> 2: Frau<br/> 3: Firma<br/> 4: Herrn und Frau<br/> 5: Eheleute<br/> 6: Familie.
     */
    public function setSalutation(int $salutation): void
    {
        $this->data['salutation'] = $salutation;
    }

    public function getSalutation(): int
    {
        return $this->data['salutation'];
    }

    public function setStreet(string $street): void
    {
        $this->data['street'] = $street;
    }

    public function getStreet(): string
    {
        return $this->data['street'];
    }

    public function setSuffix1(?string $suffix_1): void
    {
        $this->data['suffix_1'] = $suffix_1;
    }

    public function getSuffix1(): ?string
    {
        return $this->data['suffix_1'];
    }

    public function setSuffix2(?string $suffix_2): void
    {
        $this->data['suffix_2'] = $suffix_2;
    }

    public function getSuffix2(): ?string
    {
        return $this->data['suffix_2'];
    }

    public function setTitle(?string $title): void
    {
        $this->data['title'] = $title;
    }

    public function getTitle(): ?string
    {
        return $this->data['title'];
    }

    public function setZipCode(?string $zip_code): void
    {
        $this->data['zip_code'] = $zip_code;
    }

    public function getZipCode(): ?string
    {
        return $this->data['zip_code'];
    }

    public function getCreatedAt(): string
    {
        return $this->data['created_at'];
    }

    public function getUpdatedAt(): string
    {
        return $this->data['updated_at'];
    }
}