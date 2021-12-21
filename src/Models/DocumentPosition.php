<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
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
        return $this->get('number');
    }

    public function setDescription(?string $description): void
    {
        $this->data['description'] = $description;
    }

    public function getDescription(): ?string
    {
        return $this->get('description');
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
        return $this->get('document_note');
    }

    public function setQuantity(float $quantity): void
    {
        $this->data['quantity'] = $quantity;
    }

    public function getQuantity(): float
    {
        return $this->get('quantity');
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
        return $this->get('quantity_str');
    }

    public function setUnit(?string $unit): void
    {
        $this->data['unit'] = $unit;
    }

    public function getUnit(): ?string
    {
        return $this->get('unit');
    }

    public function setType(string $type): void
    {
        $this->data['type'] = $type;
    }

    public function getType(): string
    {
        return $this->get('type');
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
        return $this->get('position');
    }

    public function setSinglePriceNet(?float $single_price_net): void
    {
        $this->data['single_price_net'] = $single_price_net;
    }

    public function getSinglePriceNet(): ?float
    {
        return $this->get('single_price_net');
    }

    public function getSinglePriceGross(): float
    {
        return $this->get('single_price_gross');
    }

    public function setVatPercent(float $vat_percent): void
    {
        $this->data['vat_percent'] = $vat_percent;
    }

    public function getVatPercent(): float
    {
        return $this->get('vat_percent');
    }

    public function setDiscount(?float $discount): void
    {
        $this->data['discount'] = $discount;
    }

    public function getDiscount(): ?float
    {
        return $this->get('discount');
    }

    public function setDiscountType(?string $discount_type): void
    {
        $this->data['discount_type'] = $discount_type;
    }

    public function getDiscountType(): ?string
    {
        return $this->get('discount_type');
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
        return $this->get('position_id');
    }

    public function getTotalPriceNet(): float
    {
        return $this->get('total_price_net');
    }

    public function getTotalPriceGross(): float
    {
        return $this->get('total_price_gross');
    }

    public function getTotalVat(): float
    {
        return $this->get('total_vat');
    }

    public function getSerialNumberId(): string
    {
        return $this->get('serial_number_id');
    }

    public function getSerialNumber(): string
    {
        return $this->get('serial_number');
    }

    public function setBookingAccount(?string $booking_account): void
    {
        $this->data['booking_account'] = $booking_account;
    }

    public function getBookingAccount(): ?string
    {
        return $this->get('booking_account');
    }

    public function setExportCost1(?string $export_cost_1): void
    {
        $this->data['export_cost_1'] = $export_cost_1;
    }

    public function getExportCost1(): ?string
    {
        return $this->get('export_cost_1');
    }

    public function setExportCost2(?string $export_cost_2): void
    {
        $this->data['export_cost_2'] = $export_cost_2;
    }

    public function getExportCost2(): ?string
    {
        return $this->get('export_cost_2');
    }

    public function setCostPriceNet(?float $cost_price_net): void
    {
        $this->data['cost_price_net'] = $cost_price_net;
    }

    public function getCostPriceNet(): ?float
    {
        return $this->get('cost_price_net');
    }

    public function getCostPriceTotal(): float
    {
        return $this->get('cost_price_total');
    }

    public function getCostPriceCharge(): float
    {
        return $this->get('cost_price_charge');
    }

    public function getCostPriceChargeType(): string
    {
        return $this->get('cost_price_charge_type');
    }

    public function setItemType(string $itemType): void
    {
        $this->data['itemType'] = $itemType;
    }

    public function getItemType(): string
    {
        return $this->get('itemType');
    }

    public function getId(): int
    {
        return $this->get('id');
    }
}
