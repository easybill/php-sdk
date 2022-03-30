<?php

declare(strict_types=1);

namespace Easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.70.1
 * @version rest v1
 */
class Customer implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * 1 = Empfehlung eines anderen Kunden, 2 = Zeitungsanzeige, 3 = Eigene Akquisition, 4 = Mitarbeiter Akquisition, 5 = Google, 6 = Gelbe Seiten, 7 = Kostenlose Internet Plattform, 8 = Bezahlte Internet Plattform.
     *
     * @enum [1,2,3,4,5,6,7,8]
     */
    public function setAcquireOptions(?int $acquire_options): void
    {
        $this->data['acquire_options'] = $acquire_options;
    }

    /**
     * @enum [1,2,3,4,5,6,7,8]
     */
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

    public function setBankAccount(?string $bank_account): void
    {
        $this->data['bank_account'] = $bank_account;
    }

    public function getBankAccount(): ?string
    {
        return $this->attr('bank_account');
    }

    public function setBankAccountOwner(?string $bank_account_owner): void
    {
        $this->data['bank_account_owner'] = $bank_account_owner;
    }

    public function getBankAccountOwner(): ?string
    {
        return $this->attr('bank_account_owner');
    }

    public function setBankBic(?string $bank_bic): void
    {
        $this->data['bank_bic'] = $bank_bic;
    }

    public function getBankBic(): ?string
    {
        return $this->attr('bank_bic');
    }

    public function setBankCode(?string $bank_code): void
    {
        $this->data['bank_code'] = $bank_code;
    }

    public function getBankCode(): ?string
    {
        return $this->attr('bank_code');
    }

    public function setBankIban(?string $bank_iban): void
    {
        $this->data['bank_iban'] = $bank_iban;
    }

    public function getBankIban(): ?string
    {
        return $this->attr('bank_iban');
    }

    public function setBankName(?string $bank_name): void
    {
        $this->data['bank_name'] = $bank_name;
    }

    public function getBankName(): ?string
    {
        return $this->attr('bank_name');
    }

    public function setBirthDate(?\DateTimeImmutable $birth_date): void
    {
        $this->data['birth_date'] = $birth_date;
    }

    public function getBirthDate(): ?\DateTimeImmutable
    {
        return $this->attrDate('birth_date');
    }

    public function setCashAllowance(?float $cash_allowance): void
    {
        $this->data['cash_allowance'] = $cash_allowance;
    }

    public function getCashAllowance(): ?float
    {
        return $this->attr('cash_allowance');
    }

    public function setCashAllowanceDays(int $cash_allowance_days): void
    {
        $this->data['cash_allowance_days'] = $cash_allowance_days;
    }

    public function getCashAllowanceDays(): int
    {
        return $this->attr('cash_allowance_days');
    }

    public function setCashDiscount(?float $cash_discount): void
    {
        $this->data['cash_discount'] = $cash_discount;
    }

    public function getCashDiscount(): ?float
    {
        return $this->attr('cash_discount');
    }

    /**
     * @enum ["PERCENT","AMOUNT"]
     */
    public function setCashDiscountType(?string $cash_discount_type): void
    {
        $this->data['cash_discount_type'] = $cash_discount_type;
    }

    /**
     * @enum ["PERCENT","AMOUNT"]
     */
    public function getCashDiscountType(): ?string
    {
        return $this->attr('cash_discount_type');
    }

    public function setCity(?string $city): void
    {
        $this->data['city'] = $city;
    }

    public function getCity(): ?string
    {
        return $this->attr('city');
    }

    public function setState(string $state): void
    {
        $this->data['state'] = $state;
    }

    public function getState(): string
    {
        return $this->attr('state');
    }

    public function setCompanyName(?string $company_name): void
    {
        $this->data['company_name'] = $company_name;
    }

    public function getCompanyName(): ?string
    {
        return $this->attr('company_name');
    }

    public function setCountry(string $country): void
    {
        $this->data['country'] = $country;
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

    public function setDeliveryTitle(string $delivery_title): void
    {
        $this->data['delivery_title'] = $delivery_title;
    }

    public function getDeliveryTitle(): string
    {
        return $this->attr('delivery_title');
    }

    public function setDeliveryCity(?string $delivery_city): void
    {
        $this->data['delivery_city'] = $delivery_city;
    }

    public function getDeliveryCity(): ?string
    {
        return $this->attr('delivery_city');
    }

    public function setDeliveryState(string $delivery_state): void
    {
        $this->data['delivery_state'] = $delivery_state;
    }

    public function getDeliveryState(): string
    {
        return $this->attr('delivery_state');
    }

    public function setDeliveryCompanyName(?string $delivery_company_name): void
    {
        $this->data['delivery_company_name'] = $delivery_company_name;
    }

    public function getDeliveryCompanyName(): ?string
    {
        return $this->attr('delivery_company_name');
    }

    public function setDeliveryCountry(?string $delivery_country): void
    {
        $this->data['delivery_country'] = $delivery_country;
    }

    public function getDeliveryCountry(): ?string
    {
        return $this->attr('delivery_country');
    }

    public function setDeliveryFirstName(?string $delivery_first_name): void
    {
        $this->data['delivery_first_name'] = $delivery_first_name;
    }

    public function getDeliveryFirstName(): ?string
    {
        return $this->attr('delivery_first_name');
    }

    public function setDeliveryLastName(?string $delivery_last_name): void
    {
        $this->data['delivery_last_name'] = $delivery_last_name;
    }

    public function getDeliveryLastName(): ?string
    {
        return $this->attr('delivery_last_name');
    }

    public function setDeliveryPersonal(bool $delivery_personal): void
    {
        $this->data['delivery_personal'] = $delivery_personal;
    }

    public function getDeliveryPersonal(): bool
    {
        return $this->attr('delivery_personal');
    }

    /**
     * 0 = nothing, 1 = Mr, 2 = Mrs, 3 = Company, 4 = Mr & Mrs, 5 = Married couple, 6 = Family.
     *
     * @enum [0,1,2,3,4,5,6]
     */
    public function setDeliverySalutation(int $delivery_salutation): void
    {
        $this->data['delivery_salutation'] = $delivery_salutation;
    }

    /**
     * @enum [0,1,2,3,4,5,6]
     */
    public function getDeliverySalutation(): int
    {
        return $this->attr('delivery_salutation');
    }

    public function setDeliveryStreet(?string $delivery_street): void
    {
        $this->data['delivery_street'] = $delivery_street;
    }

    public function getDeliveryStreet(): ?string
    {
        return $this->attr('delivery_street');
    }

    public function setDeliverySuffix1(?string $delivery_suffix_1): void
    {
        $this->data['delivery_suffix_1'] = $delivery_suffix_1;
    }

    public function getDeliverySuffix1(): ?string
    {
        return $this->attr('delivery_suffix_1');
    }

    public function setDeliverySuffix2(?string $delivery_suffix_2): void
    {
        $this->data['delivery_suffix_2'] = $delivery_suffix_2;
    }

    public function getDeliverySuffix2(): ?string
    {
        return $this->attr('delivery_suffix_2');
    }

    public function setDeliveryZipCode(?string $delivery_zip_code): void
    {
        $this->data['delivery_zip_code'] = $delivery_zip_code;
    }

    public function getDeliveryZipCode(): ?string
    {
        return $this->attr('delivery_zip_code');
    }

    public function getDisplayName(): string
    {
        return $this->attr('display_name');
    }

    public function setEmails(array $emails): void
    {
        $this->data['emails'] = $emails;
    }

    /**
     * @return string[]
     */
    public function getEmails(): array
    {
        return $this->attr('emails');
    }

    public function setFax(?string $fax): void
    {
        $this->data['fax'] = $fax;
    }

    public function getFax(): ?string
    {
        return $this->attr('fax');
    }

    public function setFirstName(?string $first_name): void
    {
        $this->data['first_name'] = $first_name;
    }

    public function getFirstName(): ?string
    {
        return $this->attr('first_name');
    }

    /**
     * will be replaced by its alias due_in_days.
     */
    public function setGracePeriod(?int $grace_period): void
    {
        $this->data['grace_period'] = $grace_period;
    }

    public function getGracePeriod(): ?int
    {
        return $this->attr('grace_period');
    }

    /**
     * due date in days.
     */
    public function setDueInDays(?int $due_in_days): void
    {
        $this->data['due_in_days'] = $due_in_days;
    }

    public function getDueInDays(): ?int
    {
        return $this->attr('due_in_days');
    }

    public function setGroupId(?int $group_id): void
    {
        $this->data['group_id'] = $group_id;
    }

    public function getGroupId(): ?int
    {
        return $this->attr('group_id');
    }

    public function getId(): int
    {
        return $this->attr('id');
    }

    public function setInfo1(?string $info_1): void
    {
        $this->data['info_1'] = $info_1;
    }

    public function getInfo1(): ?string
    {
        return $this->attr('info_1');
    }

    public function setInfo2(?string $info_2): void
    {
        $this->data['info_2'] = $info_2;
    }

    public function getInfo2(): ?string
    {
        return $this->attr('info_2');
    }

    public function setInternet(?string $internet): void
    {
        $this->data['internet'] = $internet;
    }

    public function getInternet(): ?string
    {
        return $this->attr('internet');
    }

    public function setLastName(?string $last_name): void
    {
        $this->data['last_name'] = $last_name;
    }

    public function getLastName(): ?string
    {
        return $this->attr('last_name');
    }

    public function setLoginId(int $login_id): void
    {
        $this->data['login_id'] = $login_id;
    }

    public function getLoginId(): int
    {
        return $this->attr('login_id');
    }

    public function setMobile(?string $mobile): void
    {
        $this->data['mobile'] = $mobile;
    }

    public function getMobile(): ?string
    {
        return $this->attr('mobile');
    }

    public function setNote(?string $note): void
    {
        $this->data['note'] = $note;
    }

    public function getNote(): ?string
    {
        return $this->attr('note');
    }

    /**
     * Automatically generated if empty.
     */
    public function setNumber(string $number): void
    {
        $this->data['number'] = $number;
    }

    public function getNumber(): string
    {
        return $this->attr('number');
    }

    /**
     * 1 = Stets pünktliche Zahlung, 2 = überwiegend pünktliche Zahlung, 3 = überwiegend verspätete Zahlung, 5 = Grundsätzlich verspätete Zahlung.
     *
     * @enum [1,2,3,5]
     */
    public function setPaymentOptions(?int $payment_options): void
    {
        $this->data['payment_options'] = $payment_options;
    }

    /**
     * @enum [1,2,3,5]
     */
    public function getPaymentOptions(): ?int
    {
        return $this->attr('payment_options');
    }

    public function setPersonal(bool $personal): void
    {
        $this->data['personal'] = $personal;
    }

    public function getPersonal(): bool
    {
        return $this->attr('personal');
    }

    public function setPhone1(?string $phone_1): void
    {
        $this->data['phone_1'] = $phone_1;
    }

    public function getPhone1(): ?string
    {
        return $this->attr('phone_1');
    }

    public function setPhone2(?string $phone_2): void
    {
        $this->data['phone_2'] = $phone_2;
    }

    public function getPhone2(): ?string
    {
        return $this->attr('phone_2');
    }

    public function setPostbox(?string $postbox): void
    {
        $this->data['postbox'] = $postbox;
    }

    public function getPostbox(): ?string
    {
        return $this->attr('postbox');
    }

    public function setPostboxCity(?string $postbox_city): void
    {
        $this->data['postbox_city'] = $postbox_city;
    }

    public function getPostboxCity(): ?string
    {
        return $this->attr('postbox_city');
    }

    public function setPostboxState(string $postbox_state): void
    {
        $this->data['postbox_state'] = $postbox_state;
    }

    public function getPostboxState(): string
    {
        return $this->attr('postbox_state');
    }

    public function setPostboxCountry(?string $postbox_country): void
    {
        $this->data['postbox_country'] = $postbox_country;
    }

    public function getPostboxCountry(): ?string
    {
        return $this->attr('postbox_country');
    }

    public function setPostboxZipCode(?string $postbox_zip_code): void
    {
        $this->data['postbox_zip_code'] = $postbox_zip_code;
    }

    public function getPostboxZipCode(): ?string
    {
        return $this->attr('postbox_zip_code');
    }

    /**
     * @enum ["SALEPRICE2","SALEPRICE3","SALEPRICE4","SALEPRICE5","SALEPRICE6","SALEPRICE7","SALEPRICE8","SALEPRICE9","SALEPRICE10"]
     */
    public function setSalePriceLevel(?string $sale_price_level): void
    {
        $this->data['sale_price_level'] = $sale_price_level;
    }

    /**
     * @enum ["SALEPRICE2","SALEPRICE3","SALEPRICE4","SALEPRICE5","SALEPRICE6","SALEPRICE7","SALEPRICE8","SALEPRICE9","SALEPRICE10"]
     */
    public function getSalePriceLevel(): ?string
    {
        return $this->attr('sale_price_level');
    }

    /**
     * 0 = nothing, 1 = Mr, 2 = Mrs, 3 = Company, 4 = Mr & Mrs, 5 = Married couple, 6 = Family.
     *
     * @enum [0,1,2,3,4,5,6]
     */
    public function setSalutation(int $salutation): void
    {
        $this->data['salutation'] = $salutation;
    }

    /**
     * @enum [0,1,2,3,4,5,6]
     */
    public function getSalutation(): int
    {
        return $this->attr('salutation');
    }

    /**
     * BASIC = SEPA-Basislastschrift, COR1 = SEPA-Basislastschrift COR1, COMPANY = SEPA-Firmenlastschrift, NULL = Noch kein Mandat erteilt.
     *
     * @enum ["BASIC","COR1","COMPANY","NULL"]
     */
    public function setSepaAgreement(?string $sepa_agreement): void
    {
        $this->data['sepa_agreement'] = $sepa_agreement;
    }

    /**
     * @enum ["BASIC","COR1","COMPANY","NULL"]
     */
    public function getSepaAgreement(): ?string
    {
        return $this->attr('sepa_agreement');
    }

    public function setSepaAgreementDate(?\DateTimeImmutable $sepa_agreement_date): void
    {
        $this->data['sepa_agreement_date'] = $sepa_agreement_date;
    }

    public function getSepaAgreementDate(): ?\DateTimeImmutable
    {
        return $this->attrDate('sepa_agreement_date');
    }

    public function setSepaMandateReference(?string $sepa_mandate_reference): void
    {
        $this->data['sepa_mandate_reference'] = $sepa_mandate_reference;
    }

    public function getSepaMandateReference(): ?string
    {
        return $this->attr('sepa_mandate_reference');
    }

    public function setSinceDate(?\DateTimeImmutable $since_date): void
    {
        $this->data['since_date'] = $since_date;
    }

    public function getSinceDate(): ?\DateTimeImmutable
    {
        return $this->attrDate('since_date');
    }

    public function setStreet(?string $street): void
    {
        $this->data['street'] = $street;
    }

    public function getStreet(): ?string
    {
        return $this->attr('street');
    }

    public function setSuffix1(?string $suffix_1): void
    {
        $this->data['suffix_1'] = $suffix_1;
    }

    public function getSuffix1(): ?string
    {
        return $this->attr('suffix_1');
    }

    public function setSuffix2(?string $suffix_2): void
    {
        $this->data['suffix_2'] = $suffix_2;
    }

    public function getSuffix2(): ?string
    {
        return $this->attr('suffix_2');
    }

    public function setTaxNumber(?string $tax_number): void
    {
        $this->data['tax_number'] = $tax_number;
    }

    public function getTaxNumber(): ?string
    {
        return $this->attr('tax_number');
    }

    public function setCourt(?string $court): void
    {
        $this->data['court'] = $court;
    }

    public function getCourt(): ?string
    {
        return $this->attr('court');
    }

    public function setCourtRegistryNumber(?string $court_registry_number): void
    {
        $this->data['court_registry_number'] = $court_registry_number;
    }

    public function getCourtRegistryNumber(): ?string
    {
        return $this->attr('court_registry_number');
    }

    /**
     * nStb = Nicht steuerbar (Drittland), nStbUstID = Nicht steuerbar (EU mit USt-IdNr.), nStbNoneUstID = Nicht steuerbar (EU ohne USt-IdNr.), revc = Steuerschuldwechsel §13b (Inland), IG = Innergemeinschaftliche Lieferung, AL = Ausfuhrlieferung, sStfr = sonstige Steuerbefreiung, NULL = Umsatzsteuerpflichtig.
     *
     * @enum ["nStb","nStbUstID","nStbNoneUstID","nStbIm","revc","IG","AL","sStfr","NULL"]
     */
    public function setTaxOptions(?string $tax_options): void
    {
        $this->data['tax_options'] = $tax_options;
    }

    /**
     * @enum ["nStb","nStbUstID","nStbNoneUstID","nStbIm","revc","IG","AL","sStfr","NULL"]
     */
    public function getTaxOptions(): ?string
    {
        return $this->attr('tax_options');
    }

    public function setTitle(?string $title): void
    {
        $this->data['title'] = $title;
    }

    public function getTitle(): ?string
    {
        return $this->attr('title');
    }

    public function setVatIdentifier(?string $vat_identifier): void
    {
        $this->data['vat_identifier'] = $vat_identifier;
    }

    public function getVatIdentifier(): ?string
    {
        return $this->attr('vat_identifier');
    }

    public function setZipCode(?string $zip_code): void
    {
        $this->data['zip_code'] = $zip_code;
    }

    public function getZipCode(): ?string
    {
        return $this->attr('zip_code');
    }

    /**
     * Type of PDF to use when sending a Document to the Customer.
     *
     * @enum ["default","zugferd1","zugferd2","xrechnung","xrechnung_xml"]
     */
    public function setDocumentPdfType(string $documentPdfType): void
    {
        $this->data['documentPdfType'] = $documentPdfType;
    }

    /**
     * @enum ["default","zugferd1","zugferd2","xrechnung","xrechnung_xml"]
     */
    public function getDocumentPdfType(): string
    {
        return $this->attr('documentPdfType');
    }

    /**
     * Used as "buyerReference" in ZUGFeRD and as "Leitweg-ID" in the XRechnung format.
     */
    public function setBuyerReference(string $buyer_reference): void
    {
        $this->data['buyer_reference'] = $buyer_reference;
    }

    public function getBuyerReference(): string
    {
        return $this->attr('buyer_reference');
    }

    /**
     * The ID given to your company by the customer in his system.
     */
    public function setForeignSupplierNumber(string $foreign_supplier_number): void
    {
        $this->data['foreign_supplier_number'] = $foreign_supplier_number;
    }

    public function getForeignSupplierNumber(): string
    {
        return $this->attr('foreign_supplier_number');
    }
}
