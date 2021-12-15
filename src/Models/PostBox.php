<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class PostBox
{
    public function __construct(protected $data = [])
    {
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getId(): int
    {
        return $this->data['id'];
    }

    public function setDocumentId(int $document_id): void
    {
        $this->data['document_id'] = $document_id;
    }

    public function getDocumentId(): int
    {
        return $this->data['document_id'];
    }

    public function setTo(string $to): void
    {
        $this->data['to'] = $to;
    }

    public function getTo(): string
    {
        return $this->data['to'];
    }

    public function setCc(string $cc): void
    {
        $this->data['cc'] = $cc;
    }

    public function getCc(): string
    {
        return $this->data['cc'];
    }

    public function setFrom(string $from): void
    {
        $this->data['from'] = $from;
    }

    public function getFrom(): string
    {
        return $this->data['from'];
    }

    public function setSubject(string $subject): void
    {
        $this->data['subject'] = $subject;
    }

    public function getSubject(): string
    {
        return $this->data['subject'];
    }

    public function setMessage(string $message): void
    {
        $this->data['message'] = $message;
    }

    public function getMessage(): string
    {
        return $this->data['message'];
    }

    public function setDate(string $date): void
    {
        $this->data['date'] = $date;
    }

    public function getDate(): string
    {
        return $this->data['date'];
    }

    public function setCreatedAt(string $created_at): void
    {
        $this->data['created_at'] = $created_at;
    }

    public function getCreatedAt(): string
    {
        return $this->data['created_at'];
    }

    public function setProcessedAt(string $processed_at): void
    {
        $this->data['processed_at'] = $processed_at;
    }

    public function getProcessedAt(): string
    {
        return $this->data['processed_at'];
    }

    public function setSendBySelf(bool $send_by_self): void
    {
        $this->data['send_by_self'] = $send_by_self;
    }

    public function getSendBySelf(): bool
    {
        return $this->data['send_by_self'];
    }

    public function setSendWithAttachment(bool $send_with_attachment): void
    {
        $this->data['send_with_attachment'] = $send_with_attachment;
    }

    public function getSendWithAttachment(): bool
    {
        return $this->data['send_with_attachment'];
    }

    public function setType(string $type): void
    {
        $this->data['type'] = $type;
    }

    public function getType(): string
    {
        return $this->data['type'];
    }

    public function setStatus(string $status): void
    {
        $this->data['status'] = $status;
    }

    public function getStatus(): string
    {
        return $this->data['status'];
    }

    public function setStatusMsg(string $status_msg): void
    {
        $this->data['status_msg'] = $status_msg;
    }

    public function getStatusMsg(): string
    {
        return $this->data['status_msg'];
    }

    public function getLoginId(): int
    {
        return $this->data['login_id'];
    }

    public function setDocumentFileType(?string $document_file_type): void
    {
        $this->data['document_file_type'] = $document_file_type;
    }

    public function getDocumentFileType(): ?string
    {
        return $this->data['document_file_type'];
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
     */
    public function setPostSendType(string $post_send_type): void
    {
        $this->data['post_send_type'] = $post_send_type;
    }

    public function getPostSendType(): string
    {
        return $this->data['post_send_type'];
    }

    public function getTrackingIdentifier(): string
    {
        return $this->data['tracking_identifier'];
    }
}