<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.68.0
 * @version rest v1
 */
class Position implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getId(): int
    {
        return $this->attr('id');
    }

    /**
     * @enum ["PRODUCT","SERVICE","TEXT"]
     */
    public function setType(string $type): void
    {
        $this->data['type'] = $type;
    }

    /**
     * @enum ["PRODUCT","SERVICE","TEXT"]
     */
    public function getType(): string
    {
        return $this->attr('type');
    }

    public function setNumber(string $number): void
    {
        $this->data['number'] = $number;
    }

    public function getNumber(): string
    {
        return $this->attr('number');
    }

    /**
     * The positions name or description.
     */
    public function setDescription(string $description): void
    {
        $this->data['description'] = $description;
    }

    public function getDescription(): string
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

    /**
     * Note for internal use.
     */
    public function setNote(?string $note): void
    {
        $this->data['note'] = $note;
    }

    public function getNote(): ?string
    {
        return $this->attr('note');
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
     * The FAS-Account is the four-digit revenue account, in which the revenue will be entered when doing the export to your tax consultant. In case you want to split your revenue to several revenue accounts, please talk to your tax consultant before, to guarantee an unobstructed use of the interface. For every revenue element, there are number ranges, which can be used. Please avoid using combinations of numbers, which can not be used by your tax consultant.
     */
    public function setExportIdentifier(?string $export_identifier): void
    {
        $this->data['export_identifier'] = $export_identifier;
    }

    public function getExportIdentifier(): ?string
    {
        return $this->attr('export_identifier');
    }

    public function setExportIdentifierExtended(PositionExportIdentifierExtended $export_identifier_extended): void
    {
        $this->data['export_identifier_extended'] = $export_identifier_extended;
    }

    public function getExportIdentifierExtended(): PositionExportIdentifierExtended
    {
        return $this->attrInstance('export_identifier_extended', \easybill\SDK\Models\PositionExportIdentifierExtended::class);
    }

    public function getLoginId(): int
    {
        return $this->attr('login_id');
    }

    /**
     * @enum ["BRUTTO","NETTO"]
     */
    public function setPriceType(string $price_type): void
    {
        $this->data['price_type'] = $price_type;
    }

    /**
     * @enum ["BRUTTO","NETTO"]
     */
    public function getPriceType(): string
    {
        return $this->attr('price_type');
    }

    public function setVatPercent(float $vat_percent): void
    {
        $this->data['vat_percent'] = $vat_percent;
    }

    public function getVatPercent(): float
    {
        return $this->attr('vat_percent');
    }

    /**
     * Price in cents (e.g. "150" = 1.50€).
     */
    public function setSalePrice(float $sale_price): void
    {
        $this->data['sale_price'] = $sale_price;
    }

    public function getSalePrice(): float
    {
        return $this->attr('sale_price');
    }

    /**
     * Price for customers of group 2 in cents (e.g. "150" = 1.50€).
     */
    public function setSalePrice2(?float $sale_price2): void
    {
        $this->data['sale_price2'] = $sale_price2;
    }

    public function getSalePrice2(): ?float
    {
        return $this->attr('sale_price2');
    }

    /**
     * Price for customers of group 3 in cents (e.g. "150" = 1.50€).
     */
    public function setSalePrice3(?float $sale_price3): void
    {
        $this->data['sale_price3'] = $sale_price3;
    }

    public function getSalePrice3(): ?float
    {
        return $this->attr('sale_price3');
    }

    /**
     * Price for customers of group 4 in cents (e.g. "150" = 1.50€).
     */
    public function setSalePrice4(?float $sale_price4): void
    {
        $this->data['sale_price4'] = $sale_price4;
    }

    public function getSalePrice4(): ?float
    {
        return $this->attr('sale_price4');
    }

    /**
     * Price for customers of group 5 in cents (e.g. "150" = 1.50€).
     */
    public function setSalePrice5(?float $sale_price5): void
    {
        $this->data['sale_price5'] = $sale_price5;
    }

    public function getSalePrice5(): ?float
    {
        return $this->attr('sale_price5');
    }

    /**
     * Price for customers of group 6 in cents (e.g. "150" = 1.50€).
     */
    public function setSalePrice6(?float $sale_price6): void
    {
        $this->data['sale_price6'] = $sale_price6;
    }

    public function getSalePrice6(): ?float
    {
        return $this->attr('sale_price6');
    }

    /**
     * Price for customers of group 7 in cents (e.g. "150" = 1.50€).
     */
    public function setSalePrice7(?float $sale_price7): void
    {
        $this->data['sale_price7'] = $sale_price7;
    }

    public function getSalePrice7(): ?float
    {
        return $this->attr('sale_price7');
    }

    /**
     * Price for customers of group 8 in cents (e.g. "150" = 1.50€).
     */
    public function setSalePrice8(?float $sale_price8): void
    {
        $this->data['sale_price8'] = $sale_price8;
    }

    public function getSalePrice8(): ?float
    {
        return $this->attr('sale_price8');
    }

    /**
     * Price for customers of group 9 in cents (e.g. "150" = 1.50€).
     */
    public function setSalePrice9(?float $sale_price9): void
    {
        $this->data['sale_price9'] = $sale_price9;
    }

    public function getSalePrice9(): ?float
    {
        return $this->attr('sale_price9');
    }

    /**
     * Price for customers of group 10 in cents (e.g. "150" = 1.50€).
     */
    public function setSalePrice10(?float $sale_price10): void
    {
        $this->data['sale_price10'] = $sale_price10;
    }

    public function getSalePrice10(): ?float
    {
        return $this->attr('sale_price10');
    }

    /**
     * Price in cents (e.g. "150" = 1.50€).
     */
    public function setCostPrice(?float $cost_price): void
    {
        $this->data['cost_price'] = $cost_price;
    }

    public function getCostPrice(): ?float
    {
        return $this->attr('cost_price');
    }

    public function setExportCost1(?string $export_cost1): void
    {
        $this->data['export_cost1'] = $export_cost1;
    }

    public function getExportCost1(): ?string
    {
        return $this->attr('export_cost1');
    }

    public function setExportCost2(?string $export_cost2): void
    {
        $this->data['export_cost2'] = $export_cost2;
    }

    public function getExportCost2(): ?string
    {
        return $this->attr('export_cost2');
    }

    public function setGroupId(?int $group_id): void
    {
        $this->data['group_id'] = $group_id;
    }

    public function getGroupId(): ?int
    {
        return $this->attr('group_id');
    }

    /**
     * Activates stock management for this position.
     *
     * @enum ["YES","NO"]
     */
    public function setStock(string $stock): void
    {
        $this->data['stock'] = $stock;
    }

    /**
     * @enum ["YES","NO"]
     */
    public function getStock(): string
    {
        return $this->attr('stock');
    }

    public function getStockCount(): int
    {
        return $this->attr('stock_count');
    }

    /**
     * Notify when stock_count is lower than stock_limit.
     */
    public function setStockLimitNotify(bool $stock_limit_notify): void
    {
        $this->data['stock_limit_notify'] = $stock_limit_notify;
    }

    public function getStockLimitNotify(): bool
    {
        return $this->attr('stock_limit_notify');
    }

    /**
     * Notify frequency when stock_count is lower than stock_limit (ALWAYS, ONCE).
     *
     * @enum ["ALWAYS","ONCE"]
     */
    public function setStockLimitNotifyFrequency(string $stock_limit_notify_frequency): void
    {
        $this->data['stock_limit_notify_frequency'] = $stock_limit_notify_frequency;
    }

    /**
     * @enum ["ALWAYS","ONCE"]
     */
    public function getStockLimitNotifyFrequency(): string
    {
        return $this->attr('stock_limit_notify_frequency');
    }

    public function setStockLimit(int $stock_limit): void
    {
        $this->data['stock_limit'] = $stock_limit;
    }

    public function getStockLimit(): int
    {
        return $this->attr('stock_limit');
    }

    /**
     * Used as the default quantity when adding this position to a document.
     */
    public function setQuantity(?float $quantity): void
    {
        $this->data['quantity'] = $quantity;
    }

    public function getQuantity(): ?float
    {
        return $this->attr('quantity');
    }
}
