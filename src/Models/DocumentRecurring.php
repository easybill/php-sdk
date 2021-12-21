<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.68.0
 * @version rest v1
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
    public function setNextDate(\DateTimeImmutable $next_date): void
    {
        $this->data['next_date'] = $next_date;
    }

    public function getNextDate(): \DateTimeImmutable
    {
        return $this->attrDate('next_date');
    }

    /**
     * @enum ["DAILY","WEEKLY","MONTHLY","YEARLY"]
     */
    public function setFrequency(string $frequency): void
    {
        $this->data['frequency'] = $frequency;
    }

    /**
     * @enum ["DAILY","WEEKLY","MONTHLY","YEARLY"]
     */
    public function getFrequency(): string
    {
        return $this->attr('frequency');
    }

    /**
     * @enum ["LASTDAYOFMONTH"]
     */
    public function setFrequencySpecial(?string $frequency_special): void
    {
        $this->data['frequency_special'] = $frequency_special;
    }

    /**
     * @enum ["LASTDAYOFMONTH"]
     */
    public function getFrequencySpecial(): ?string
    {
        return $this->attr('frequency_special');
    }

    public function setInterval(int $interval): void
    {
        $this->data['interval'] = $interval;
    }

    public function getInterval(): int
    {
        return $this->attr('interval');
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
        return $this->attr('end_date_or_count');
    }

    /**
     * @enum ["RUNNING","PAUSE","STOP","WAITING"]
     */
    public function setStatus(string $status): void
    {
        $this->data['status'] = $status;
    }

    /**
     * @enum ["RUNNING","PAUSE","STOP","WAITING"]
     */
    public function getStatus(): string
    {
        return $this->attr('status');
    }

    public function setAsDraft(bool $as_draft): void
    {
        $this->data['as_draft'] = $as_draft;
    }

    public function getAsDraft(): bool
    {
        return $this->attr('as_draft');
    }

    public function setIsNotify(bool $is_notify): void
    {
        $this->data['is_notify'] = $is_notify;
    }

    public function getIsNotify(): bool
    {
        return $this->attr('is_notify');
    }

    /**
     * @enum ["EMAIL","FAX","POST"]
     */
    public function setSendAs(?string $send_as): void
    {
        $this->data['send_as'] = $send_as;
    }

    /**
     * @enum ["EMAIL","FAX","POST"]
     */
    public function getSendAs(): ?string
    {
        return $this->attr('send_as');
    }

    public function setIsSign(bool $is_sign): void
    {
        $this->data['is_sign'] = $is_sign;
    }

    public function getIsSign(): bool
    {
        return $this->attr('is_sign');
    }

    public function setIsPaid(bool $is_paid): void
    {
        $this->data['is_paid'] = $is_paid;
    }

    public function getIsPaid(): bool
    {
        return $this->attr('is_paid');
    }

    /**
     * Option is used to determine what date is used for the payment if is_paid is true. "next_valid_date" selects the next workday in regards to the created date of the document if the date falls on a saturday or sunday.
     *
     * @enum ["created_date","due_date","next_valid_date"]
     */
    public function setPaidDateOption(string $paid_date_option): void
    {
        $this->data['paid_date_option'] = $paid_date_option;
    }

    /**
     * @enum ["created_date","due_date","next_valid_date"]
     */
    public function getPaidDateOption(): string
    {
        return $this->attr('paid_date_option');
    }

    public function setIsSepa(bool $is_sepa): void
    {
        $this->data['is_sepa'] = $is_sepa;
    }

    public function getIsSepa(): bool
    {
        return $this->attr('is_sepa');
    }

    /**
     * @enum ["CORE","COR1","B2B"]
     */
    public function setSepaLocalInstrument(?string $sepa_local_instrument): void
    {
        $this->data['sepa_local_instrument'] = $sepa_local_instrument;
    }

    /**
     * @enum ["CORE","COR1","B2B"]
     */
    public function getSepaLocalInstrument(): ?string
    {
        return $this->attr('sepa_local_instrument');
    }

    /**
     * @enum ["FRST","OOFF","FNAL","RCUR"]
     */
    public function setSepaSequenceType(?string $sepa_sequence_type): void
    {
        $this->data['sepa_sequence_type'] = $sepa_sequence_type;
    }

    /**
     * @enum ["FRST","OOFF","FNAL","RCUR"]
     */
    public function getSepaSequenceType(): ?string
    {
        return $this->attr('sepa_sequence_type');
    }

    public function setSepaReference(?string $sepa_reference): void
    {
        $this->data['sepa_reference'] = $sepa_reference;
    }

    public function getSepaReference(): ?string
    {
        return $this->attr('sepa_reference');
    }

    public function setSepaRemittanceInformation(?string $sepa_remittance_information): void
    {
        $this->data['sepa_remittance_information'] = $sepa_remittance_information;
    }

    public function getSepaRemittanceInformation(): ?string
    {
        return $this->attr('sepa_remittance_information');
    }

    /**
     * The document type that will be generated. Can not be changed on existing documents.
     *
     * @enum ["INVOICE","CREDIT","ORDER","OFFER"]
     */
    public function setTargetType(string $target_type): void
    {
        $this->data['target_type'] = $target_type;
    }

    /**
     * @enum ["INVOICE","CREDIT","ORDER","OFFER"]
     */
    public function getTargetType(): string
    {
        return $this->attr('target_type');
    }
}
