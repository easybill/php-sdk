<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class PDFTemplate
{
    public function __construct(protected $data = [])
    {
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setId(string $id): void
    {
        $this->data['id'] = $id;
    }

    public function getId(): string
    {
        return $this->data['id'];
    }

    public function setName(string $name): void
    {
        $this->data['name'] = $name;
    }

    public function getName(): string
    {
        return $this->data['name'];
    }

    public function setPdfTemplate(string $pdf_template): void
    {
        $this->data['pdf_template'] = $pdf_template;
    }

    public function getPdfTemplate(): string
    {
        return $this->data['pdf_template'];
    }

    public function setDocumentType(string $document_type): void
    {
        $this->data['document_type'] = $document_type;
    }

    public function getDocumentType(): string
    {
        return $this->data['document_type'];
    }
}
