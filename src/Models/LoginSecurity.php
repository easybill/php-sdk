<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`
 * This object is only displayed if your request the login resource as an admin. Otherwise this property will be null.
 */
class LoginSecurity implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getTwoFactorEnabled(): bool
    {
        return $this->get('two_factor_enabled');
    }

    public function getRecoveryCodesEnabled(): bool
    {
        return $this->get('recovery_codes_enabled');
    }

    public function getNotifyOnNewLoginEnabled(): bool
    {
        return $this->get('notify_on_new_login_enabled');
    }
}
