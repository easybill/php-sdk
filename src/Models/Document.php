<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class Document
{
    public function __construct(protected $data = [])
    {
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getAddress(): DocumentAddress
    {
        return $this->data['address'];
    }

    /**
     * @return int[]
     */
    public function getAttachmentIds(): array
    {
        return $this->data['attachment_ids'];
    }

    public function getLabelAddress(): DocumentAddress
    {
        return $this->data['label_address'];
    }

    public function getAmount(): int
    {
        return $this->data['amount'];
    }

    public function getAmountNet(): int
    {
        return $this->data['amount_net'];
    }

    public function setBankDebitForm(?string $bank_debit_form): void
    {
        $this->data['bank_debit_form'] = $bank_debit_form;
    }

    public function getBankDebitForm(): ?string
    {
        return $this->data['bank_debit_form'];
    }

    public function getBillingCountry(): string
    {
        return $this->data['billing_country'];
    }

    /**
     * 0 === Net, 1 === Gross.
     */
    public function setCalcVatFrom(int $calc_vat_from): void
    {
        $this->data['calc_vat_from'] = $calc_vat_from;
    }

    public function getCalcVatFrom(): int
    {
        return $this->data['calc_vat_from'];
    }

    public function getCancelId(): int
    {
        return $this->data['cancel_id'];
    }

    public function setCashAllowance(?float $cash_allowance): void
    {
        $this->data['cash_allowance'] = $cash_allowance;
    }

    public function getCashAllowance(): ?float
    {
        return $this->data['cash_allowance'];
    }

    public function setCashAllowanceDays(?int $cash_allowance_days): void
    {
        $this->data['cash_allowance_days'] = $cash_allowance_days;
    }

    public function getCashAllowanceDays(): ?int
    {
        return $this->data['cash_allowance_days'];
    }

    public function setCashAllowanceText(?string $cash_allowance_text): void
    {
        $this->data['cash_allowance_text'] = $cash_allowance_text;
    }

    public function getCashAllowanceText(): ?string
    {
        return $this->data['cash_allowance_text'];
    }

    public function setContactId(?int $contact_id): void
    {
        $this->data['contact_id'] = $contact_id;
    }

    public function getContactId(): ?int
    {
        return $this->data['contact_id'];
    }

    public function setContactLabel(string $contact_label): void
    {
        $this->data['contact_label'] = $contact_label;
    }

    public function getContactLabel(): string
    {
        return $this->data['contact_label'];
    }

    public function setContactText(string $contact_text): void
    {
        $this->data['contact_text'] = $contact_text;
    }

    public function getContactText(): string
    {
        return $this->data['contact_text'];
    }

    public function getCreatedAt(): string
    {
        return $this->data['created_at'];
    }

    public function setCurrency(string $currency): void
    {
        $this->data['currency'] = $currency;
    }

    public function getCurrency(): string
    {
        return $this->data['currency'];
    }

    public function setCustomerId(?int $customer_id): void
    {
        $this->data['customer_id'] = $customer_id;
    }

    public function getCustomerId(): ?int
    {
        return $this->data['customer_id'];
    }

    public function getCustomerSnapshot(): CustomerSnapshot
    {
        return $this->data['customer_snapshot'];
    }

    public function setDiscount(?string $discount): void
    {
        $this->data['discount'] = $discount;
    }

    public function getDiscount(): ?string
    {
        return $this->data['discount'];
    }

    public function setDiscountType(?string $discount_type): void
    {
        $this->data['discount_type'] = $discount_type;
    }

    public function getDiscountType(): ?string
    {
        return $this->data['discount_type'];
    }

    public function setDocumentDate(string $document_date): void
    {
        $this->data['document_date'] = $document_date;
    }

    public function getDocumentDate(): string
    {
        return $this->data['document_date'];
    }

    public function getDueDate(): string
    {
        return $this->data['due_date'];
    }

    public function getEditedAt(): string
    {
        return $this->data['edited_at'];
    }

    public function setExternalId(?string $external_id): void
    {
        $this->data['external_id'] = $external_id;
    }

    public function getExternalId(): ?string
    {
        return $this->data['external_id'];
    }

    public function setReplicaUrl(?string $replica_url): void
    {
        $this->data['replica_url'] = $replica_url;
    }

    public function getReplicaUrl(): ?string
    {
        return $this->data['replica_url'];
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
        return $this->data['grace_period'];
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
        return $this->data['due_in_days'];
    }

    public function getId(): int
    {
        return $this->data['id'];
    }

    public function setIsArchive(bool $is_archive): void
    {
        $this->data['is_archive'] = $is_archive;
    }

    public function getIsArchive(): bool
    {
        return $this->data['is_archive'];
    }

    public function getIsDraft(): bool
    {
        return $this->data['is_draft'];
    }

    /**
     * Marks a document as a replica from another software.
     */
    public function setIsReplica(bool $is_replica): void
    {
        $this->data['is_replica'] = $is_replica;
    }

    public function getIsReplica(): bool
    {
        return $this->data['is_replica'];
    }

    public function getIsCold(): bool
    {
        return $this->data['is_cold'];
    }

    /**
     * Indicates if a document is a one-stop-shop document.
     */
    public function setIsOss(bool $is_oss): void
    {
        $this->data['is_oss'] = $is_oss;
    }

    public function getIsOss(): bool
    {
        return $this->data['is_oss'];
    }

    /**
     * Signals when the document should be moved to the long term archive.
     */
    public function setColdstorageDueDate(?string $coldstorage_due_date): void
    {
        $this->data['coldstorage_due_date'] = $coldstorage_due_date;
    }

    public function getColdstorageDueDate(): ?string
    {
        return $this->data['coldstorage_due_date'];
    }

    /**
     * @return string[]
     */
    public function getItemNotes(): array
    {
        return $this->data['item_notes'];
    }

    public function setItems(array $items): void
    {
        $this->data['items'] = $items;
    }

    /**
     * @return \easybill\SDK\Models\DocumentPosition[]
     */
    public function getItems(): array
    {
        return $this->data['items'];
    }

    public function getLastPostboxId(): int
    {
        return $this->data['last_postbox_id'];
    }

    /**
     * If omitted or null, the currently active login is used.
     */
    public function setLoginId(int $login_id): void
    {
        $this->data['login_id'] = $login_id;
    }

    public function getLoginId(): int
    {
        return $this->data['login_id'];
    }

    public function setNumber(?string $number): void
    {
        $this->data['number'] = $number;
    }

    public function getNumber(): ?string
    {
        return $this->data['number'];
    }

    public function setOrderNumber(string $order_number): void
    {
        $this->data['order_number'] = $order_number;
    }

    public function getOrderNumber(): string
    {
        return $this->data['order_number'];
    }

    public function setBuyerReference(string $buyer_reference): void
    {
        $this->data['buyer_reference'] = $buyer_reference;
    }

    public function getBuyerReference(): string
    {
        return $this->data['buyer_reference'];
    }

    public function getPaidAmount(): int
    {
        return $this->data['paid_amount'];
    }

    public function getPaidAt(): string
    {
        return $this->data['paid_at'];
    }

    public function getPdfPages(): int
    {
        return $this->data['pdf_pages'];
    }

    /**
     * Default template is null or 'DE', default english is 'EN' and for all others use the numeric template ID.
     */
    public function setPdfTemplate(string $pdf_template): void
    {
        $this->data['pdf_template'] = $pdf_template;
    }

    public function getPdfTemplate(): string
    {
        return $this->data['pdf_template'];
    }

    public function setProjectId(?int $project_id): void
    {
        $this->data['project_id'] = $project_id;
    }

    public function getProjectId(): ?int
    {
        return $this->data['project_id'];
    }

    /**
     * This object is only available in document type RECURRING.
     */
    public function setRecurringOptions(DocumentRecurring $recurring_options): void
    {
        $this->data['recurring_options'] = $recurring_options;
    }

    public function getRecurringOptions(): DocumentRecurring
    {
        return $this->data['recurring_options'];
    }

    /**
     * Reference document id.
     */
    public function setRefId(?int $ref_id): void
    {
        $this->data['ref_id'] = $ref_id;
    }

    public function getRefId(): ?int
    {
        return $this->data['ref_id'];
    }

    /**
     * This object is only available in document type INVOICE or CREDIT.
     */
    public function setServiceDate(ServiceDate $service_date): void
    {
        $this->data['service_date'] = $service_date;
    }

    public function getServiceDate(): ServiceDate
    {
        return $this->data['service_date'];
    }

    public function setShippingCountry(?string $shipping_country): void
    {
        $this->data['shipping_country'] = $shipping_country;
    }

    public function getShippingCountry(): ?string
    {
        return $this->data['shipping_country'];
    }

    /**
     * This value can only be used in document type DELIVERY, ORDER, CHARGE or OFFER. NULL is default = not set.
     */
    public function setStatus(?string $status): void
    {
        $this->data['status'] = $status;
    }

    public function getStatus(): ?string
    {
        return $this->data['status'];
    }

    public function setText(string $text): void
    {
        $this->data['text'] = $text;
    }

    public function getText(): string
    {
        return $this->data['text'];
    }

    public function setTextPrefix(string $text_prefix): void
    {
        $this->data['text_prefix'] = $text_prefix;
    }

    public function getTextPrefix(): string
    {
        return $this->data['text_prefix'];
    }

    /**
     * Overwrites the default vat-option text from the document layout. It is only displayed in documents with the type other than: Delivery, Dunning, Reminder or Letter and a different vat-option than null.
     */
    public function setTextTax(?string $text_tax): void
    {
        $this->data['text_tax'] = $text_tax;
    }

    public function getTextTax(): ?string
    {
        return $this->data['text_tax'];
    }

    public function setTitle(?string $title): void
    {
        $this->data['title'] = $title;
    }

    public function getTitle(): ?string
    {
        return $this->data['title'];
    }

    /**
     * Can only set on create.
     */
    public function setType(string $type): void
    {
        $this->data['type'] = $type;
    }

    public function getType(): string
    {
        return $this->data['type'];
    }

    /**
     * If true and customer has shipping address then it will be used.
     */
    public function setUseShippingAddress(bool $use_shipping_address): void
    {
        $this->data['use_shipping_address'] = $use_shipping_address;
    }

    public function getUseShippingAddress(): bool
    {
        return $this->data['use_shipping_address'];
    }

    public function setVatCountry(?string $vat_country): void
    {
        $this->data['vat_country'] = $vat_country;
    }

    public function getVatCountry(): ?string
    {
        return $this->data['vat_country'];
    }

    public function getVatId(): string
    {
        return $this->data['vat_id'];
    }

    public function setFulfillmentCountry(?string $fulfillment_country): void
    {
        $this->data['fulfillment_country'] = $fulfillment_country;
    }

    public function getFulfillmentCountry(): ?string
    {
        return $this->data['fulfillment_country'];
    }

    /**
     * NULL: Normal steuerbar<br/> nStb: Nicht steuerbar (Drittland)<br/> nStbUstID: Nicht steuerbar (EU mit USt-IdNr.)<br/> nStbNoneUstID: Nicht steuerbar (EU ohne USt-IdNr.)<br/> nStbIm: Nicht steuerbarer Innenumsatz<br/> revc: Steuerschuldwechsel §13b (Inland)<br/> IG: Innergemeinschaftliche Lieferung<br/> AL: Ausfuhrlieferung<br/> sStfr: sonstige Steuerbefreiung<br/> smallBusiness: Kleinunternehmen (Keine MwSt.).
     */
    public function setVatOption(?string $vat_option): void
    {
        $this->data['vat_option'] = $vat_option;
    }

    public function getVatOption(): ?string
    {
        return $this->data['vat_option'];
    }
}
