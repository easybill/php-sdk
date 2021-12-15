<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class Discount
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

    public function setCustomerId(int $customer_id): void
    {
        $this->data['customer_id'] = $customer_id;
    }

    public function getCustomerId(): int
    {
        return $this->data['customer_id'];
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
        return $this->data['discount'];
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
        return $this->data['discount_type'];
    }
}
