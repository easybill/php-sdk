<?php

declare(strict_types=1);

namespace Easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.70.1
 * @version rest v1
 * If customer_id, project_id and document_id are null, the attachment has a global context and is accessible from the web ui. Keep in mind only to provide one of the four context. You can't attach a file to several context in one request. A error is thrown if you provide two or more context (i. E. sending customer_id, document_id and project_id in combination).
 */
class Attachment implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->attrDate('created_at');
    }

    public function setCustomerId(?int $customer_id): void
    {
        $this->data['customer_id'] = $customer_id;
    }

    public function getCustomerId(): ?int
    {
        return $this->attr('customer_id');
    }

    public function setDocumentId(?int $document_id): void
    {
        $this->data['document_id'] = $document_id;
    }

    public function getDocumentId(): ?int
    {
        return $this->attr('document_id');
    }

    public function getFileName(): string
    {
        return $this->attr('file_name');
    }

    public function getId(): int
    {
        return $this->attr('id');
    }

    public function setProjectId(?int $project_id): void
    {
        $this->data['project_id'] = $project_id;
    }

    public function getProjectId(): ?int
    {
        return $this->attr('project_id');
    }

    public function getSize(): int
    {
        return $this->attr('size');
    }
}
