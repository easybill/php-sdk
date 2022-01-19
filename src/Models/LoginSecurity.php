<?php

declare(strict_types=1);

namespace Easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.70.1
 * @version rest v1
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
        return $this->attr('two_factor_enabled');
    }

    public function getRecoveryCodesEnabled(): bool
    {
        return $this->attr('recovery_codes_enabled');
    }

    public function getNotifyOnNewLoginEnabled(): bool
    {
        return $this->attr('notify_on_new_login_enabled');
    }
}
