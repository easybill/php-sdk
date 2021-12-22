<?php

declare(strict_types=1);

namespace Easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 *
 * @version swagger 1.68.0
 * @version rest v1
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
        return $this->attr('id');
    }

    public function setName(string $name): void
    {
        $this->data['name'] = $name;
    }

    public function getName(): string
    {
        return $this->attr('name');
    }

    public function setPdfTemplate(string $pdf_template): void
    {
        $this->data['pdf_template'] = $pdf_template;
    }

    public function getPdfTemplate(): string
    {
        return $this->attr('pdf_template');
    }

    public function setDocumentType(string $document_type): void
    {
        $this->data['document_type'] = $document_type;
    }

    public function getDocumentType(): string
    {
        return $this->attr('document_type');
    }
}
