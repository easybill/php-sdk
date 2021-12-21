<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class DocumentRecurring implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * Must be in the future.
     */
    public function setNextDate(string $next_date): void
    {
        $this->data['next_date'] = $next_date;
    }

    public function getNextDate(): string
    {
        return $this->get('next_date');
    }

    public function setFrequency(string $frequency): void
    {
        $this->data['frequency'] = $frequency;
    }

    public function getFrequency(): string
    {
        return $this->get('frequency');
    }

    public function setFrequencySpecial(?string $frequency_special): void
    {
        $this->data['frequency_special'] = $frequency_special;
    }

    public function getFrequencySpecial(): ?string
    {
        return $this->get('frequency_special');
    }

    public function setInterval(int $interval): void
    {
        $this->data['interval'] = $interval;
    }

    public function getInterval(): int
    {
        return $this->get('interval');
    }

    /**
     * Date of last exectution day or number of times to exectute.
     */
    public function setEndDateOrCount(?string $end_date_or_count): void
    {
        $this->data['end_date_or_count'] = $end_date_or_count;
    }

    public function getEndDateOrCount(): ?string
    {
        return $this->get('end_date_or_count');
    }

    public function setStatus(string $status): void
    {
        $this->data['status'] = $status;
    }

    public function getStatus(): string
    {
        return $this->get('status');
    }

    public function setAsDraft(bool $as_draft): void
    {
        $this->data['as_draft'] = $as_draft;
    }

    public function getAsDraft(): bool
    {
        return $this->get('as_draft');
    }

    public function setIsNotify(bool $is_notify): void
    {
        $this->data['is_notify'] = $is_notify;
    }

    public function getIsNotify(): bool
    {
        return $this->get('is_notify');
    }

    public function setSendAs(?string $send_as): void
    {
        $this->data['send_as'] = $send_as;
    }

    public function getSendAs(): ?string
    {
        return $this->get('send_as');
    }

    public function setIsSign(bool $is_sign): void
    {
        $this->data['is_sign'] = $is_sign;
    }

    public function getIsSign(): bool
    {
        return $this->get('is_sign');
    }

    public function setIsPaid(bool $is_paid): void
    {
        $this->data['is_paid'] = $is_paid;
    }

    public function getIsPaid(): bool
    {
        return $this->get('is_paid');
    }

    /**
     * Option is used to determine what date is used for the payment if is_paid is true. "next_valid_date" selects the next workday in regards to the created date of the document if the date falls on a saturday or sunday.
     */
    public function setPaidDateOption(string $paid_date_option): void
    {
        $this->data['paid_date_option'] = $paid_date_option;
    }

    public function getPaidDateOption(): string
    {
        return $this->get('paid_date_option');
    }

    public function setIsSepa(bool $is_sepa): void
    {
        $this->data['is_sepa'] = $is_sepa;
    }

    public function getIsSepa(): bool
    {
        return $this->get('is_sepa');
    }

    public function setSepaLocalInstrument(?string $sepa_local_instrument): void
    {
        $this->data['sepa_local_instrument'] = $sepa_local_instrument;
    }

    public function getSepaLocalInstrument(): ?string
    {
        return $this->get('sepa_local_instrument');
    }

    public function setSepaSequenceType(?string $sepa_sequence_type): void
    {
        $this->data['sepa_sequence_type'] = $sepa_sequence_type;
    }

    public function getSepaSequenceType(): ?string
    {
        return $this->get('sepa_sequence_type');
    }

    public function setSepaReference(?string $sepa_reference): void
    {
        $this->data['sepa_reference'] = $sepa_reference;
    }

    public function getSepaReference(): ?string
    {
        return $this->get('sepa_reference');
    }

    public function setSepaRemittanceInformation(?string $sepa_remittance_information): void
    {
        $this->data['sepa_remittance_information'] = $sepa_remittance_information;
    }

    public function getSepaRemittanceInformation(): ?string
    {
        return $this->get('sepa_remittance_information');
    }

    /**
     * The document type that will be generated. Can not be changed on existing documents.
     */
    public function setTargetType(string $target_type): void
    {
        $this->data['target_type'] = $target_type;
    }

    public function getTargetType(): string
    {
        return $this->get('target_type');
    }
}
