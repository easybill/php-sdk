<?php

declare(strict_types=1);

namespace Easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.70.1
 * @version rest v1
 */
class DocumentPosition implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function setNumber(?string $number): void
    {
        $this->data['number'] = $number;
    }

    public function getNumber(): ?string
    {
        return $this->attr('number');
    }

    public function setDescription(?string $description): void
    {
        $this->data['description'] = $description;
    }

    public function getDescription(): ?string
    {
        return $this->attr('description');
    }

    /**
     * This field can be used in the document text areas with the liquid placeholder {{document.item_notes}}. Every note is only displayed once for every kind of product. This is useful if you want to add something like an instruction.
     */
    public function setDocumentNote(string $document_note): void
    {
        $this->data['document_note'] = $document_note;
    }

    public function getDocumentNote(): string
    {
        return $this->attr('document_note');
    }

    public function setQuantity(float $quantity): void
    {
        $this->data['quantity'] = $quantity;
    }

    public function getQuantity(): float
    {
        return $this->attr('quantity');
    }

    /**
     * Use quantity_str if you want to set a quantity like: 1:30 h or 3x5 m. quantity_str overwrites quantity.
     */
    public function setQuantityStr(string $quantity_str): void
    {
        $this->data['quantity_str'] = $quantity_str;
    }

    public function getQuantityStr(): string
    {
        return $this->attr('quantity_str');
    }

    public function setUnit(?string $unit): void
    {
        $this->data['unit'] = $unit;
    }

    public function getUnit(): ?string
    {
        return $this->attr('unit');
    }

    /**
     * @enum ["POSITION","POSITION_NOCALC","TEXT"]
     */
    public function setType(string $type): void
    {
        $this->data['type'] = $type;
    }

    /**
     * @enum ["POSITION","POSITION_NOCALC","TEXT"]
     */
    public function getType(): string
    {
        return $this->attr('type');
    }

    /**
     * Automatic by default (first item: 1, second item: 2, ...).
     */
    public function setPosition(int $position): void
    {
        $this->data['position'] = $position;
    }

    public function getPosition(): int
    {
        return $this->attr('position');
    }

    public function setSinglePriceNet(?float $single_price_net): void
    {
        $this->data['single_price_net'] = $single_price_net;
    }

    public function getSinglePriceNet(): ?float
    {
        return $this->attr('single_price_net');
    }

    public function setSinglePriceGross(float $single_price_gross): void
    {
        $this->data['single_price_gross'] = $single_price_gross;
    }

    public function getSinglePriceGross(): float
    {
        return $this->attr('single_price_gross');
    }

    public function setVatPercent(float $vat_percent): void
    {
        $this->data['vat_percent'] = $vat_percent;
    }

    public function getVatPercent(): float
    {
        return $this->attr('vat_percent');
    }

    public function setDiscount(?float $discount): void
    {
        $this->data['discount'] = $discount;
    }

    public function getDiscount(): ?float
    {
        return $this->attr('discount');
    }

    /**
     * @enum ["PERCENT","AMOUNT"]
     */
    public function setDiscountType(?string $discount_type): void
    {
        $this->data['discount_type'] = $discount_type;
    }

    /**
     * @enum ["PERCENT","AMOUNT"]
     */
    public function getDiscountType(): ?string
    {
        return $this->attr('discount_type');
    }

    /**
     * If set, values are copied from the referenced position.
     */
    public function setPositionId(?int $position_id): void
    {
        $this->data['position_id'] = $position_id;
    }

    public function getPositionId(): ?int
    {
        return $this->attr('position_id');
    }

    public function getTotalPriceNet(): float
    {
        return $this->attr('total_price_net');
    }

    public function getTotalPriceGross(): float
    {
        return $this->attr('total_price_gross');
    }

    public function getTotalVat(): float
    {
        return $this->attr('total_vat');
    }

    public function getSerialNumberId(): string
    {
        return $this->attr('serial_number_id');
    }

    public function getSerialNumber(): string
    {
        return $this->attr('serial_number');
    }

    public function setBookingAccount(?string $booking_account): void
    {
        $this->data['booking_account'] = $booking_account;
    }

    public function getBookingAccount(): ?string
    {
        return $this->attr('booking_account');
    }

    public function setExportCost1(?string $export_cost_1): void
    {
        $this->data['export_cost_1'] = $export_cost_1;
    }

    public function getExportCost1(): ?string
    {
        return $this->attr('export_cost_1');
    }

    public function setExportCost2(?string $export_cost_2): void
    {
        $this->data['export_cost_2'] = $export_cost_2;
    }

    public function getExportCost2(): ?string
    {
        return $this->attr('export_cost_2');
    }

    public function setCostPriceNet(?float $cost_price_net): void
    {
        $this->data['cost_price_net'] = $cost_price_net;
    }

    public function getCostPriceNet(): ?float
    {
        return $this->attr('cost_price_net');
    }

    public function getCostPriceTotal(): float
    {
        return $this->attr('cost_price_total');
    }

    public function getCostPriceCharge(): float
    {
        return $this->attr('cost_price_charge');
    }

    /**
     * @enum ["PERCENT","AMOUNT"]
     */
    public function getCostPriceChargeType(): string
    {
        return $this->attr('cost_price_charge_type');
    }

    /**
     * @enum ["PRODUCT","SERVICE","UNDEFINED"]
     */
    public function setItemType(string $itemType): void
    {
        $this->data['itemType'] = $itemType;
    }

    /**
     * @enum ["PRODUCT","SERVICE","UNDEFINED"]
     */
    public function getItemType(): string
    {
        return $this->attr('itemType');
    }

    public function getId(): int
    {
        return $this->attr('id');
    }
}
