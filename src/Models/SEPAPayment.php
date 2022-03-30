<?php

declare(strict_types=1);

namespace Easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.70.1
 * @version rest v1
 */
class SEPAPayment implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * Amount in cents (e.g. "150" = 1.50€).
     */
    public function setAmount(int $amount): void
    {
        $this->data['amount'] = $amount;
    }

    public function getAmount(): int
    {
        return $this->attr('amount');
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->attrDateTime('created_at');
    }

    /**
     * If type is DEBIT, this field is overwritten with the selected bank account data on export.
     */
    public function setCreditorBic(?string $creditor_bic): void
    {
        $this->data['creditor_bic'] = $creditor_bic;
    }

    public function getCreditorBic(): ?string
    {
        return $this->attr('creditor_bic');
    }

    /**
     * Mandatory if type is CREDIT. If type is DEBIT, this field is overwritten with the selected bank account data on export.
     */
    public function setCreditorIban(?string $creditor_iban): void
    {
        $this->data['creditor_iban'] = $creditor_iban;
    }

    public function getCreditorIban(): ?string
    {
        return $this->attr('creditor_iban');
    }

    /**
     * Mandatory if type is CREDIT. If type is DEBIT, this field is overwritten with the selected bank account data on export.
     */
    public function setCreditorName(?string $creditor_name): void
    {
        $this->data['creditor_name'] = $creditor_name;
    }

    public function getCreditorName(): ?string
    {
        return $this->attr('creditor_name');
    }

    /**
     * If type is CREDIT, this field is overwritten with the selected bank account data on export.
     */
    public function setDebitorBic(?string $debitor_bic): void
    {
        $this->data['debitor_bic'] = $debitor_bic;
    }

    public function getDebitorBic(): ?string
    {
        return $this->attr('debitor_bic');
    }

    /**
     * Mandatory if type is DEBIT. If type is CREDIT, this field is overwritten with the selected bank account data on export.
     */
    public function setDebitorIban(?string $debitor_iban): void
    {
        $this->data['debitor_iban'] = $debitor_iban;
    }

    public function getDebitorIban(): ?string
    {
        return $this->attr('debitor_iban');
    }

    /**
     * Mandatory if type is DEBIT. If type is CREDIT, this field is overwritten with the selected bank account data on export.
     */
    public function setDebitorName(?string $debitor_name): void
    {
        $this->data['debitor_name'] = $debitor_name;
    }

    public function getDebitorName(): ?string
    {
        return $this->attr('debitor_name');
    }

    /**
     * Mandatory if type is DEBIT and the debitor's IBAN belongs to a country outside the EEA.
     */
    public function setDebitorAddressLine1(string $debitor_address_line_1): void
    {
        $this->data['debitor_address_line_1'] = $debitor_address_line_1;
    }

    public function getDebitorAddressLine1(): string
    {
        return $this->attr('debitor_address_line_1');
    }

    /**
     * string.
     */
    public function setDebitorAddressLine2(string $debitor_address_line2): void
    {
        $this->data['debitor_address_line2'] = $debitor_address_line2;
    }

    public function getDebitorAddressLine2(): string
    {
        return $this->attr('debitor_address_line2');
    }

    /**
     * Mandatory if type is DEBIT and the debitor's IBAN belongs to a country outside the EEA.
     */
    public function setDebitorCountry(string $debitor_country): void
    {
        $this->data['debitor_country'] = $debitor_country;
    }

    public function getDebitorCountry(): string
    {
        return $this->attr('debitor_country');
    }

    public function setDocumentId(int $document_id): void
    {
        $this->data['document_id'] = $document_id;
    }

    public function getDocumentId(): int
    {
        return $this->attr('document_id');
    }

    /**
     * If a date is set, this record is marked as exported.
     */
    public function setExportAt(?\DateTimeImmutable $export_at): void
    {
        $this->data['export_at'] = $export_at;
    }

    public function getExportAt(): ?\DateTimeImmutable
    {
        return $this->attrDateTime('export_at');
    }

    public function getExportError(): string
    {
        return $this->attr('export_error');
    }

    public function getId(): int
    {
        return $this->attr('id');
    }

    /**
     * CORE: SEPA Core Direct Debit<br/> COR1: SEPA-Basislastschrift COR1<br/> B2B: SEPA Business to Business Direct Debit.
     *
     * @enum ["CORE","COR1","B2B"]
     */
    public function setLocalInstrument(string $local_instrument): void
    {
        $this->data['local_instrument'] = $local_instrument;
    }

    /**
     * @enum ["CORE","COR1","B2B"]
     */
    public function getLocalInstrument(): string
    {
        return $this->attr('local_instrument');
    }

    public function setMandateDateOfSignature(\DateTimeImmutable $mandate_date_of_signature): void
    {
        $this->data['mandate_date_of_signature'] = $mandate_date_of_signature;
    }

    public function getMandateDateOfSignature(): \DateTimeImmutable
    {
        return $this->attrDate('mandate_date_of_signature');
    }

    public function setMandateId(string $mandate_id): void
    {
        $this->data['mandate_id'] = $mandate_id;
    }

    public function getMandateId(): string
    {
        return $this->attr('mandate_id');
    }

    public function setReference(string $reference): void
    {
        $this->data['reference'] = $reference;
    }

    public function getReference(): string
    {
        return $this->attr('reference');
    }

    public function setRemittanceInformation(?string $remittance_information): void
    {
        $this->data['remittance_information'] = $remittance_information;
    }

    public function getRemittanceInformation(): ?string
    {
        return $this->attr('remittance_information');
    }

    /**
     * Booking date.
     */
    public function setRequestedAt(\DateTimeImmutable $requested_at): void
    {
        $this->data['requested_at'] = $requested_at;
    }

    public function getRequestedAt(): \DateTimeImmutable
    {
        return $this->attrDate('requested_at');
    }

    /**
     * FRST: Erstlastschrift<br/> RCUR: Folgelastschrift<br/> OOFF: Einmallastschrift<br/> FNAL: Letztmalige Lastschrift.
     *
     * @enum ["FRST","OOFF","FNAL","RCUR"]
     */
    public function setSequenceType(string $sequence_type): void
    {
        $this->data['sequence_type'] = $sequence_type;
    }

    /**
     * @enum ["FRST","OOFF","FNAL","RCUR"]
     */
    public function getSequenceType(): string
    {
        return $this->attr('sequence_type');
    }

    public function getUpdatedAt(): string
    {
        return $this->attr('updated_at');
    }

    /**
     * @enum ["DEBIT","CREDIT"]
     */
    public function setType(string $type): void
    {
        $this->data['type'] = $type;
    }

    /**
     * @enum ["DEBIT","CREDIT"]
     */
    public function getType(): string
    {
        return $this->attr('type');
    }
}
