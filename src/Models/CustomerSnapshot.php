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
        return $this->get('acquire_options');
    }

    /**
     * @return int[]
     */
    public function getAdditionalGroupsIds(): array
    {
        return $this->get('additional_groups_ids');
    }

    public function getBankAccount(): ?string
    {
        return $this->get('bank_account');
    }

    public function getBankAccountOwner(): ?string
    {
        return $this->get('bank_account_owner');
    }

    public function getBankBic(): ?string
    {
        return $this->get('bank_bic');
    }

    public function getBankCode(): ?string
    {
        return $this->get('bank_code');
    }

    public function getBankIban(): ?string
    {
        return $this->get('bank_iban');
    }

    public function getBankName(): ?string
    {
        return $this->get('bank_name');
    }

    public function getBirthDate(): ?string
    {
        return $this->get('birth_date');
    }

    public function getCashAllowance(): ?float
    {
        return $this->get('cash_allowance');
    }

    public function getCashAllowanceDays(): int
    {
        return $this->get('cash_allowance_days');
    }

    public function getCashDiscount(): ?float
    {
        return $this->get('cash_discount');
    }

    public function getCashDiscountType(): ?string
    {
        return $this->get('cash_discount_type');
    }

    public function getCity(): ?string
    {
        return $this->get('city');
    }

    public function getState(): string
    {
        return $this->get('state');
    }

    public function getCompanyName(): ?string
    {
        return $this->get('company_name');
    }

    public function getCountry(): string
    {
        return $this->get('country');
    }

    public function getCreatedAt(): string
    {
        return $this->get('created_at');
    }

    public function getUpdatedAt(): string
    {
        return $this->get('updated_at');
    }

    public function getDeliveryTitle(): string
    {
        return $this->get('delivery_title');
    }

    public function getDeliveryCity(): ?string
    {
        return $this->get('delivery_city');
    }

    public function getDeliveryState(): string
    {
        return $this->get('delivery_state');
    }

    public function getDeliveryCompanyName(): ?string
    {
        return $this->get('delivery_company_name');
    }

    public function getDeliveryCountry(): ?string
    {
        return $this->get('delivery_country');
    }

    public function getDeliveryFirstName(): ?string
    {
        return $this->get('delivery_first_name');
    }

    public function getDeliveryLastName(): ?string
    {
        return $this->get('delivery_last_name');
    }

    public function getDeliveryPersonal(): bool
    {
        return $this->get('delivery_personal');
    }

    public function getDeliverySalutation(): int
    {
        return $this->get('delivery_salutation');
    }

    public function getDeliveryStreet(): ?string
    {
        return $this->get('delivery_street');
    }

    public function getDeliverySuffix1(): ?string
    {
        return $this->get('delivery_suffix_1');
    }

    public function getDeliverySuffix2(): ?string
    {
        return $this->get('delivery_suffix_2');
    }

    public function getDeliveryZipCode(): ?string
    {
        return $this->get('delivery_zip_code');
    }

    public function getDisplayName(): string
    {
        return $this->get('display_name');
    }

    /**
     * @return string[]
     */
    public function getEmails(): array
    {
        return $this->get('emails');
    }

    public function getFax(): ?string
    {
        return $this->get('fax');
    }

    public function getFirstName(): ?string
    {
        return $this->get('first_name');
    }

    public function getGracePeriod(): ?int
    {
        return $this->get('grace_period');
    }

    public function getDueInDays(): ?int
    {
        return $this->get('due_in_days');
    }

    public function getGroupId(): ?int
    {
        return $this->get('group_id');
    }

    public function getId(): int
    {
        return $this->get('id');
    }

    public function getInfo1(): ?string
    {
        return $this->get('info_1');
    }

    public function getInfo2(): ?string
    {
        return $this->get('info_2');
    }

    public function getInternet(): ?string
    {
        return $this->get('internet');
    }

    public function getLastName(): ?string
    {
        return $this->get('last_name');
    }

    public function getLoginId(): int
    {
        return $this->get('login_id');
    }

    public function getMobile(): ?string
    {
        return $this->get('mobile');
    }

    public function getNote(): ?string
    {
        return $this->get('note');
    }

    public function getNumber(): string
    {
        return $this->get('number');
    }

    public function getPaymentOptions(): ?int
    {
        return $this->get('payment_options');
    }

    public function getPersonal(): bool
    {
        return $this->get('personal');
    }

    public function getPhone1(): ?string
    {
        return $this->get('phone_1');
    }

    public function getPhone2(): ?string
    {
        return $this->get('phone_2');
    }

    public function getPostbox(): ?string
    {
        return $this->get('postbox');
    }

    public function getPostboxCity(): ?string
    {
        return $this->get('postbox_city');
    }

    public function getPostboxState(): string
    {
        return $this->get('postbox_state');
    }

    public function getPostboxCountry(): ?string
    {
        return $this->get('postbox_country');
    }

    public function getPostboxZipCode(): ?string
    {
        return $this->get('postbox_zip_code');
    }

    public function getSalePriceLevel(): ?string
    {
        return $this->get('sale_price_level');
    }

    public function getSalutation(): int
    {
        return $this->get('salutation');
    }

    public function getSepaAgreement(): ?string
    {
        return $this->get('sepa_agreement');
    }

    public function getSepaAgreementDate(): ?string
    {
        return $this->get('sepa_agreement_date');
    }

    public function getSepaMandateReference(): ?string
    {
        return $this->get('sepa_mandate_reference');
    }

    public function getSinceDate(): ?string
    {
        return $this->get('since_date');
    }

    public function getStreet(): ?string
    {
        return $this->get('street');
    }

    public function getSuffix1(): ?string
    {
        return $this->get('suffix_1');
    }

    public function getSuffix2(): ?string
    {
        return $this->get('suffix_2');
    }

    public function getTaxNumber(): ?string
    {
        return $this->get('tax_number');
    }

    public function getCourt(): ?string
    {
        return $this->get('court');
    }

    public function getCourtRegistryNumber(): ?string
    {
        return $this->get('court_registry_number');
    }

    public function getTaxOptions(): ?string
    {
        return $this->get('tax_options');
    }

    public function getTitle(): ?string
    {
        return $this->get('title');
    }

    public function getVatIdentifier(): ?string
    {
        return $this->get('vat_identifier');
    }

    public function getZipCode(): ?string
    {
        return $this->get('zip_code');
    }

    public function getDocumentPdfType(): string
    {
        return $this->get('documentPdfType');
    }

    public function getBuyerReference(): string
    {
        return $this->get('buyer_reference');
    }

    public function getForeignSupplierNumber(): string
    {
        return $this->get('foreign_supplier_number');
    }
}
