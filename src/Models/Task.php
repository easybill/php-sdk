<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class Task implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * @enum ["CALL","EMAIL","FAX","LUNCH","MEETING","TRAVEL","CUSTOM"]
     */
    public function setCategory(?string $category): void
    {
        $this->data['category'] = $category;
    }

    /**
     * @enum ["CALL","EMAIL","FAX","LUNCH","MEETING","TRAVEL","CUSTOM"]
     */
    public function getCategory(): ?string
    {
        return $this->attr('category');
    }

    /**
     * The name of your custom category. Can only have a value if "category" is "CUSTOM".
     */
    public function setCategoryCustom(?string $category_custom): void
    {
        $this->data['category_custom'] = $category_custom;
    }

    public function getCategoryCustom(): ?string
    {
        return $this->attr('category_custom');
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->attr('created_at');
    }

    public function setCustomerId(?int $customer_id): void
    {
        $this->data['customer_id'] = $customer_id;
    }

    public function getCustomerId(): ?int
    {
        return $this->attr('customer_id');
    }

    public function setDescription(?string $description): void
    {
        $this->data['description'] = $description;
    }

    public function getDescription(): ?string
    {
        return $this->attr('description');
    }

    public function setDocumentId(?int $document_id): void
    {
        $this->data['document_id'] = $document_id;
    }

    public function getDocumentId(): ?int
    {
        return $this->attr('document_id');
    }

    /**
     * The deadline.
     */
    public function setEndAt(?\DateTimeImmutable $end_at): void
    {
        $this->data['end_at'] = $end_at;
    }

    public function getEndAt(): ?\DateTimeImmutable
    {
        return $this->attr('end_at');
    }

    public function getFinishAt(): ?\DateTimeImmutable
    {
        return $this->attr('finish_at');
    }

    public function getId(): int
    {
        return $this->attr('id');
    }

    /**
     * When omitted or null, the currently active login is used.
     */
    public function setLoginId(?int $login_id): void
    {
        $this->data['login_id'] = $login_id;
    }

    public function getLoginId(): ?int
    {
        return $this->attr('login_id');
    }

    public function setName(string $name): void
    {
        $this->data['name'] = $name;
    }

    public function getName(): string
    {
        return $this->attr('name');
    }

    public function setPositionId(?int $position_id): void
    {
        $this->data['position_id'] = $position_id;
    }

    public function getPositionId(): ?int
    {
        return $this->attr('position_id');
    }

    /**
     * @enum ["LOW","NORMAL","HIGH"]
     */
    public function setPriority(string $priority): void
    {
        $this->data['priority'] = $priority;
    }

    /**
     * @enum ["LOW","NORMAL","HIGH"]
     */
    public function getPriority(): string
    {
        return $this->attr('priority');
    }

    public function setProjectId(?int $project_id): void
    {
        $this->data['project_id'] = $project_id;
    }

    public function getProjectId(): ?int
    {
        return $this->attr('project_id');
    }

    public function setStartAt(?\DateTimeImmutable $start_at): void
    {
        $this->data['start_at'] = $start_at;
    }

    public function getStartAt(): ?\DateTimeImmutable
    {
        return $this->attr('start_at');
    }

    /**
     * @enum ["WAITING","PROCESSING","DONE","CANCEL"]
     */
    public function setStatus(string $status): void
    {
        $this->data['status'] = $status;
    }

    /**
     * @enum ["WAITING","PROCESSING","DONE","CANCEL"]
     */
    public function getStatus(): string
    {
        return $this->attr('status');
    }

    public function setStatusPercent(?int $status_percent): void
    {
        $this->data['status_percent'] = $status_percent;
    }

    public function getStatusPercent(): ?int
    {
        return $this->attr('status_percent');
    }
}
