<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class PostBoxRequest implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
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

    /**
     * When set to null, the setting on the customer is used.
     */
    public function setDocumentFileType(?string $document_file_type): void
    {
        $this->data['document_file_type'] = $document_file_type;
    }

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
     */
    public function setPostSendType(string $post_send_type): void
    {
        $this->data['post_send_type'] = $post_send_type;
    }

    public function getPostSendType(): string
    {
        return $this->attr('post_send_type');
    }
}
