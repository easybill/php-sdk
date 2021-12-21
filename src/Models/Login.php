<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class Login implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getId(): int
    {
        return $this->attr('id');
    }

    public function setFirstName(string $first_name): void
    {
        $this->data['first_name'] = $first_name;
    }

    public function getFirstName(): string
    {
        return $this->attr('first_name');
    }

    public function setLastName(string $last_name): void
    {
        $this->data['last_name'] = $last_name;
    }

    public function getLastName(): string
    {
        return $this->attr('last_name');
    }

    public function getDisplayName(): string
    {
        return $this->attr('display_name');
    }

    public function setPhone(string $phone): void
    {
        $this->data['phone'] = $phone;
    }

    public function getPhone(): string
    {
        return $this->attr('phone');
    }

    public function setEmail(string $email): void
    {
        $this->data['email'] = $email;
    }

    public function getEmail(): string
    {
        return $this->attr('email');
    }

    public function setEmailSignature(string $email_signature): void
    {
        $this->data['email_signature'] = $email_signature;
    }

    public function getEmailSignature(): string
    {
        return $this->attr('email_signature');
    }

    /**
     * @enum ["ADMIN","ASSISTANT"]
     */
    public function setLoginType(string $login_type): void
    {
        $this->data['login_type'] = $login_type;
    }

    /**
     * @enum ["ADMIN","ASSISTANT"]
     */
    public function getLoginType(): string
    {
        return $this->attr('login_type');
    }

    public function setLocale(string $locale): void
    {
        $this->data['locale'] = $locale;
    }

    public function getLocale(): string
    {
        return $this->attr('locale');
    }

    public function setTimeZone(string $time_zone): void
    {
        $this->data['time_zone'] = $time_zone;
    }

    public function getTimeZone(): string
    {
        return $this->attr('time_zone');
    }

    public function setSecurity(LoginSecurity $security): void
    {
        $this->data['security'] = $security;
    }

    public function getSecurity(): LoginSecurity
    {
        return $this->attrInstance('security', \easybill\SDK\Models\LoginSecurity::class);
    }
}
