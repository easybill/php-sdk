<?php

declare(strict_types=1);

namespace Easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.70.1
 * @version rest v1
 */
class DiscountPositionGroup implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function setPositionGroupId(int $position_group_id): void
    {
        $this->data['position_group_id'] = $position_group_id;
    }

    public function getPositionGroupId(): int
    {
        return $this->attr('position_group_id');
    }

    public function getId(): int
    {
        return $this->attr('id');
    }

    public function setCustomerId(int $customer_id): void
    {
        $this->data['customer_id'] = $customer_id;
    }

    public function getCustomerId(): int
    {
        return $this->attr('customer_id');
    }

    /**
     * The discount value depending on "discount_type".
     */
    public function setDiscount(int $discount): void
    {
        $this->data['discount'] = $discount;
    }

    public function getDiscount(): int
    {
        return $this->attr('discount');
    }

    /**
     * AMOUNT subtracts the value in "discount" from the total<br/> QUANTITY subtracts the value in "discount" multiplied by quantity<br/> PERCENT uses the value in "discount" as a percentage<br/> FIX sets the value in "discount" as the new price.
     *
     * @enum ["AMOUNT","PERCENT","QUANTITY","FIX"]
     */
    public function setDiscountType(string $discount_type): void
    {
        $this->data['discount_type'] = $discount_type;
    }

    /**
     * @enum ["AMOUNT","PERCENT","QUANTITY","FIX"]
     */
    public function getDiscountType(): string
    {
        return $this->attr('discount_type');
    }
}
