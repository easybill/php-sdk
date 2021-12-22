<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.68.0
 * @version rest v1
 */
class PostBox implements ToArrayInterface
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

    public function setDocumentId(int $document_id): void
    {
        $this->data['document_id'] = $document_id;
    }

    public function getDocumentId(): int
    {
        return $this->attr('document_id');
    }

    public function setTo(string $to): void
    {
        $this->data['to'] = $to;
    }

    public function getTo(): string
    {
        return $this->attr('to');
    }

    public function setCc(string $cc): void
    {
        $this->data['cc'] = $cc;
    }

    public function getCc(): string
    {
        return $this->attr('cc');
    }

    public function setFrom(string $from): void
    {
        $this->data['from'] = $from;
    }

    public function getFrom(): string
    {
        return $this->attr('from');
    }

    public function setSubject(string $subject): void
    {
        $this->data['subject'] = $subject;
    }

    public function getSubject(): string
    {
        return $this->attr('subject');
    }

    public function setMessage(string $message): void
    {
        $this->data['message'] = $message;
    }

    public function getMessage(): string
    {
        return $this->attr('message');
    }

    public function setDate(\DateTimeImmutable $date): void
    {
        $this->data['date'] = $date;
    }

    public function getDate(): \DateTimeImmutable
    {
        return $this->attrDate('date');
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): void
    {
        $this->data['created_at'] = $created_at;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->attrDateTime('created_at');
    }

    public function setProcessedAt(\DateTimeImmutable $processed_at): void
    {
        $this->data['processed_at'] = $processed_at;
    }

    public function getProcessedAt(): \DateTimeImmutable
    {
        return $this->attrDateTime('processed_at');
    }

    public function setSendBySelf(bool $send_by_self): void
    {
        $this->data['send_by_self'] = $send_by_self;
    }

    public function getSendBySelf(): bool
    {
        return $this->attr('send_by_self');
    }

    public function setSendWithAttachment(bool $send_with_attachment): void
    {
        $this->data['send_with_attachment'] = $send_with_attachment;
    }

    public function getSendWithAttachment(): bool
    {
        return $this->attr('send_with_attachment');
    }

    /**
     * @enum ["FAX","EMAIL","POST"]
     */
    public function setType(string $type): void
    {
        $this->data['type'] = $type;
    }

    /**
     * @enum ["FAX","EMAIL","POST"]
     */
    public function getType(): string
    {
        return $this->attr('type');
    }

    /**
     * @enum ["WAITING","PREPARE","ERROR","OK","PROCESSING"]
     */
    public function setStatus(string $status): void
    {
        $this->data['status'] = $status;
    }

    /**
     * @enum ["WAITING","PREPARE","ERROR","OK","PROCESSING"]
     */
    public function getStatus(): string
    {
        return $this->attr('status');
    }

    public function setStatusMsg(string $status_msg): void
    {
        $this->data['status_msg'] = $status_msg;
    }

    public function getStatusMsg(): string
    {
        return $this->attr('status_msg');
    }

    public function getLoginId(): int
    {
        return $this->attr('login_id');
    }

    /**
     * @enum ["default","zugferd1","zugferd2","xrechnung","xrechnung_xml"]
     */
    public function setDocumentFileType(?string $document_file_type): void
    {
        $this->data['document_file_type'] = $document_file_type;
    }

    /**
     * @enum ["default","zugferd1","zugferd2","xrechnung","xrechnung_xml"]
     */
    public function getDocumentFileType(): ?string
    {
        return $this->attr('document_file_type');
    }

    /**
     * This value indicates what method is used when the document is send via mail.
     * The different types are offered by the german post as additional services.
     * The registered mail options will include a tracking number which will be
     * added to the postbox when known.
     *
     * If the value is omitted or empty when a postbox is created with the type "POST"
     * post_send_type_standard will be used.
     *
     * For postbox with a different type than "POST" this field will hold a empty string.
     *
     * @enum ["post_send_type_standard","post_send_type_registered","post_send_type_registered_and_personal","post_send_type_registered_and_receipt","post_send_type_registered_throwin","post_send_type_prio"]
     */
    public function setPostSendType(string $post_send_type): void
    {
        $this->data['post_send_type'] = $post_send_type;
    }

    /**
     * @enum ["post_send_type_standard","post_send_type_registered","post_send_type_registered_and_personal","post_send_type_registered_and_receipt","post_send_type_registered_throwin","post_send_type_prio"]
     */
    public function getPostSendType(): string
    {
        return $this->attr('post_send_type');
    }

    public function getTrackingIdentifier(): string
    {
        return $this->attr('tracking_identifier');
    }
}
