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
        return $this->get('id');
    }

    public function setFirstName(string $first_name): void
    {
        $this->data['first_name'] = $first_name;
    }

    public function getFirstName(): string
    {
        return $this->get('first_name');
    }

    public function setLastName(string $last_name): void
    {
        $this->data['last_name'] = $last_name;
    }

    public function getLastName(): string
    {
        return $this->get('last_name');
    }

    public function getDisplayName(): string
    {
        return $this->get('display_name');
    }

    public function setPhone(string $phone): void
    {
        $this->data['phone'] = $phone;
    }

    public function getPhone(): string
    {
        return $this->get('phone');
    }

    public function setEmail(string $email): void
    {
        $this->data['email'] = $email;
    }

    public function getEmail(): string
    {
        return $this->get('email');
    }

    public function setEmailSignature(string $email_signature): void
    {
        $this->data['email_signature'] = $email_signature;
    }

    public function getEmailSignature(): string
    {
        return $this->get('email_signature');
    }

    public function setLoginType(string $login_type): void
    {
        $this->data['login_type'] = $login_type;
    }

    public function getLoginType(): string
    {
        return $this->get('login_type');
    }

    public function setLocale(string $locale): void
    {
        $this->data['locale'] = $locale;
    }

    public function getLocale(): string
    {
        return $this->get('locale');
    }

    public function setTimeZone(string $time_zone): void
    {
        $this->data['time_zone'] = $time_zone;
    }

    public function getTimeZone(): string
    {
        return $this->get('time_zone');
    }

    public function setSecurity(LoginSecurity $security): void
    {
        $this->data['security'] = $security;
    }

    public function getSecurity(): LoginSecurity
    {
        return $this->getInstance('security', \easybill\SDK\Models\LoginSecurity::class);
    }
}
