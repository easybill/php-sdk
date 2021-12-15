<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class Login
{
    public function __construct(protected $data = [])
    {
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getId(): int
    {
        return $this->data['id'];
    }

    public function setFirstName(string $first_name): void
    {
        $this->data['first_name'] = $first_name;
    }

    public function getFirstName(): string
    {
        return $this->data['first_name'];
    }

    public function setLastName(string $last_name): void
    {
        $this->data['last_name'] = $last_name;
    }

    public function getLastName(): string
    {
        return $this->data['last_name'];
    }

    public function getDisplayName(): string
    {
        return $this->data['display_name'];
    }

    public function setPhone(string $phone): void
    {
        $this->data['phone'] = $phone;
    }

    public function getPhone(): string
    {
        return $this->data['phone'];
    }

    public function setEmail(string $email): void
    {
        $this->data['email'] = $email;
    }

    public function getEmail(): string
    {
        return $this->data['email'];
    }

    public function setEmailSignature(string $email_signature): void
    {
        $this->data['email_signature'] = $email_signature;
    }

    public function getEmailSignature(): string
    {
        return $this->data['email_signature'];
    }

    public function setLoginType(string $login_type): void
    {
        $this->data['login_type'] = $login_type;
    }

    public function getLoginType(): string
    {
        return $this->data['login_type'];
    }

    public function setLocale(string $locale): void
    {
        $this->data['locale'] = $locale;
    }

    public function getLocale(): string
    {
        return $this->data['locale'];
    }

    public function setTimeZone(string $time_zone): void
    {
        $this->data['time_zone'] = $time_zone;
    }

    public function getTimeZone(): string
    {
        return $this->data['time_zone'];
    }

    public function setSecurity(LoginSecurity $security): void
    {
        $this->data['security'] = $security;
    }

    public function getSecurity(): LoginSecurity
    {
        return $this->data['security'];
    }
}
