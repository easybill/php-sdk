<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`
 * This object is only displayed if your request the login resource as an admin. Otherwise this property will be null.
 */
class LoginSecurity
{
    public function __construct(protected $data = [])
    {
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getTwoFactorEnabled(): bool
    {
        return $this->data['two_factor_enabled'];
    }

    public function getRecoveryCodesEnabled(): bool
    {
        return $this->data['recovery_codes_enabled'];
    }

    public function getNotifyOnNewLoginEnabled(): bool
    {
        return $this->data['notify_on_new_login_enabled'];
    }
}
