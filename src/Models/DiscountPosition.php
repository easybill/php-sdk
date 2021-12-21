<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class DiscountPosition extends Discount
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    public function setPositionId(int $position_id): void
    {
        $this->data['position_id'] = $position_id;
    }

    public function getPositionId(): int
    {
        return $this->get('position_id');
    }
}
