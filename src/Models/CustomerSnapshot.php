<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`
 * A snapshot of the customer model which belongs to a document. This model is readonly and the state is final after finalization of the document. It's is identical to the state of the customer model at the time of finalization. Updates to the actual customer dataset won't affect this snapshot, however if you update the document the customer and therefore the customer snapshot may reflect a different state.
 */
class CustomerSnapshot implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getAcquireOptions(): ?int
    {
        return $this->attr('acquire_options');
    }

    /**
     * @return int[]
     */
    public function getAdditionalGroupsIds(): array
    {
        return $this->attr('additional_groups_ids');
    }

    public function getBankAccount(): ?string
    {
        return $this->attr('bank_account');
    }

    public function getBankAccountOwner(): ?string
    {
        return $this->attr('bank_account_owner');
    }

    public function getBankBic(): ?string
    {
        return $this->attr('bank_bic');
    }

    public function getBankCode(): ?string
    {
        return $this->attr('bank_code');
    }

    public function getBankIban(): ?string
    {
        return $this->attr('bank_iban');
    }

    public function getBankName(): ?string
    {
        return $this->attr('bank_name');
    }

    public function getBirthDate(): ?\DateTimeImmutable
    {
        return $this->attrDate('birth_date');
    }

    public function getCashAllowance(): ?float
    {
        return $this->attr('cash_allowance');
    }

    public function getCashAllowanceDays(): int
    {
        return $this->attr('cash_allowance_days');
    }

    public function getCashDiscount(): ?float
    {
        return $this->attr('cash_discount');
    }

    public function getCashDiscountType(): ?string
    {
        return $this->attr('cash_discount_type');
    }

    public function getCity(): ?string
    {
        return $this->attr('city');
    }

    public function getState(): string
    {
        return $this->attr('state');
    }

    public function getCompanyName(): ?string
    {
        return $this->attr('company_name');
    }

    public function getCountry(): string
    {
        return $this->attr('country');
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->attrDate('created_at');
    }

    public function getUpdatedAt(): string
    {
        return $this->attr('updated_at');
    }

    public function getDeliveryTitle(): string
    {
        return $this->attr('delivery_title');
    }

    public function getDeliveryCity(): ?string
    {
        return $this->attr('delivery_city');
    }

    public function getDeliveryState(): string
    {
        return $this->attr('delivery_state');
    }

    public function getDeliveryCompanyName(): ?string
    {
        return $this->attr('delivery_company_name');
    }

    public function getDeliveryCountry(): ?string
    {
        return $this->attr('delivery_country');
    }

    public function getDeliveryFirstName(): ?string
    {
        return $this->attr('delivery_first_name');
    }

    public function getDeliveryLastName(): ?string
    {
        return $this->attr('delivery_last_name');
    }

    public function getDeliveryPersonal(): bool
    {
        return $this->attr('delivery_personal');
    }

    public function getDeliverySalutation(): int
    {
        return $this->attr('delivery_salutation');
    }

    public function getDeliveryStreet(): ?string
    {
        return $this->attr('delivery_street');
    }

    public function getDeliverySuffix1(): ?string
    {
        return $this->attr('delivery_suffix_1');
    }

    public function getDeliverySuffix2(): ?string
    {
        return $this->attr('delivery_suffix_2');
    }

    public function getDeliveryZipCode(): ?string
    {
        return $this->attr('delivery_zip_code');
    }

    public function getDisplayName(): string
    {
        return $this->attr('display_name');
    }

    /**
     * @return string[]
     */
    public function getEmails(): array
    {
        return $this->attr('emails');
    }

    public function getFax(): ?string
    {
        return $this->attr('fax');
    }

    public function getFirstName(): ?string
    {
        return $this->attr('first_name');
    }

    public function getGracePeriod(): ?int
    {
        return $this->attr('grace_period');
    }

    public function getDueInDays(): ?int
    {
        return $this->attr('due_in_days');
    }

    public function getGroupId(): ?int
    {
        return $this->attr('group_id');
    }

    public function getId(): int
    {
        return $this->attr('id');
    }

    public function getInfo1(): ?string
    {
        return $this->attr('info_1');
    }

    public function getInfo2(): ?string
    {
        return $this->attr('info_2');
    }

    public function getInternet(): ?string
    {
        return $this->attr('internet');
    }

    public function getLastName(): ?string
    {
        return $this->attr('last_name');
    }

    public function getLoginId(): int
    {
        return $this->attr('login_id');
    }

    public function getMobile(): ?string
    {
        return $this->attr('mobile');
    }

    public function getNote(): ?string
    {
        return $this->attr('note');
    }

    public function getNumber(): string
    {
        return $this->attr('number');
    }

    public function getPaymentOptions(): ?int
    {
        return $this->attr('payment_options');
    }

    public function getPersonal(): bool
    {
        return $this->attr('personal');
    }

    public function getPhone1(): ?string
    {
        return $this->attr('phone_1');
    }

    public function getPhone2(): ?string
    {
        return $this->attr('phone_2');
    }

    public function getPostbox(): ?string
    {
        return $this->attr('postbox');
    }

    public function getPostboxCity(): ?string
    {
        return $this->attr('postbox_city');
    }

    public function getPostboxState(): string
    {
        return $this->attr('postbox_state');
    }

    public function getPostboxCountry(): ?string
    {
        return $this->attr('postbox_country');
    }

    public function getPostboxZipCode(): ?string
    {
        return $this->attr('postbox_zip_code');
    }

    public function getSalePriceLevel(): ?string
    {
        return $this->attr('sale_price_level');
    }

    public function getSalutation(): int
    {
        return $this->attr('salutation');
    }

    public function getSepaAgreement(): ?string
    {
        return $this->attr('sepa_agreement');
    }

    public function getSepaAgreementDate(): ?\DateTimeImmutable
    {
        return $this->attrDate('sepa_agreement_date');
    }

    public function getSepaMandateReference(): ?string
    {
        return $this->attr('sepa_mandate_reference');
    }

    public function getSinceDate(): ?\DateTimeImmutable
    {
        return $this->attrDate('since_date');
    }

    public function getStreet(): ?string
    {
        return $this->attr('street');
    }

    public function getSuffix1(): ?string
    {
        return $this->attr('suffix_1');
    }

    public function getSuffix2(): ?string
    {
        return $this->attr('suffix_2');
    }

    public function getTaxNumber(): ?string
    {
        return $this->attr('tax_number');
    }

    public function getCourt(): ?string
    {
        return $this->attr('court');
    }

    public function getCourtRegistryNumber(): ?string
    {
        return $this->attr('court_registry_number');
    }

    public function getTaxOptions(): ?string
    {
        return $this->attr('tax_options');
    }

    public function getTitle(): ?string
    {
        return $this->attr('title');
    }

    public function getVatIdentifier(): ?string
    {
        return $this->attr('vat_identifier');
    }

    public function getZipCode(): ?string
    {
        return $this->attr('zip_code');
    }

    public function getDocumentPdfType(): string
    {
        return $this->attr('documentPdfType');
    }

    public function getBuyerReference(): string
    {
        return $this->attr('buyer_reference');
    }

    public function getForeignSupplierNumber(): string
    {
        return $this->attr('foreign_supplier_number');
    }
}
