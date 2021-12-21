<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class DiscountPositionGroup extends Discount
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    public function setPositionGroupId(int $position_group_id): void
    {
        $this->data['position_group_id'] = $position_group_id;
    }

    public function getPositionGroupId(): int
    {
        return $this->get('position_group_id');
    }
}
