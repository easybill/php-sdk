<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class DiscountPosition implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function setPositionId(int $position_id): void
    {
        $this->data['position_id'] = $position_id;
    }

    public function getPositionId(): int
    {
        return $this->get('position_id');
    }

    public function getId(): int
    {
        return $this->get('id');
    }

    public function setCustomerId(int $customer_id): void
    {
        $this->data['customer_id'] = $customer_id;
    }

    public function getCustomerId(): int
    {
        return $this->get('customer_id');
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
        return $this->get('discount');
    }

    /**
     * AMOUNT subtracts the value in "discount" from the total<br/> QUANTITY subtracts the value in "discount" multiplied by quantity<br/> PERCENT uses the value in "discount" as a percentage<br/> FIX sets the value in "discount" as the new price.
     */
    public function setDiscountType(string $discount_type): void
    {
        $this->data['discount_type'] = $discount_type;
    }

    public function getDiscountType(): string
    {
        return $this->get('discount_type');
    }
}
