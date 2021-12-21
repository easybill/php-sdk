<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class PDFTemplate implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function setId(string $id): void
    {
        $this->data['id'] = $id;
    }

    public function getId(): string
    {
        return $this->get('id');
    }

    public function setName(string $name): void
    {
        $this->data['name'] = $name;
    }

    public function getName(): string
    {
        return $this->get('name');
    }

    public function setPdfTemplate(string $pdf_template): void
    {
        $this->data['pdf_template'] = $pdf_template;
    }

    public function getPdfTemplate(): string
    {
        return $this->get('pdf_template');
    }

    public function setDocumentType(string $document_type): void
    {
        $this->data['document_type'] = $document_type;
    }

    public function getDocumentType(): string
    {
        return $this->get('document_type');
    }
}
