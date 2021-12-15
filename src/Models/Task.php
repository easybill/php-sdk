<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class Task
{
    public function __construct(protected $data = [])
    {
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setCategory(?string $category): void
    {
        $this->data['category'] = $category;
    }

    public function getCategory(): ?string
    {
        return $this->data['category'];
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
        return $this->data['category_custom'];
    }

    public function getCreatedAt(): string
    {
        return $this->data['created_at'];
    }

    public function setCustomerId(?int $customer_id): void
    {
        $this->data['customer_id'] = $customer_id;
    }

    public function getCustomerId(): ?int
    {
        return $this->data['customer_id'];
    }

    public function setDescription(?string $description): void
    {
        $this->data['description'] = $description;
    }

    public function getDescription(): ?string
    {
        return $this->data['description'];
    }

    public function setDocumentId(?int $document_id): void
    {
        $this->data['document_id'] = $document_id;
    }

    public function getDocumentId(): ?int
    {
        return $this->data['document_id'];
    }

    /**
     * The deadline.
     */
    public function setEndAt(?string $end_at): void
    {
        $this->data['end_at'] = $end_at;
    }

    public function getEndAt(): ?string
    {
        return $this->data['end_at'];
    }

    public function getFinishAt(): ?string
    {
        return $this->data['finish_at'];
    }

    public function getId(): int
    {
        return $this->data['id'];
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
        return $this->data['login_id'];
    }

    public function setName(string $name): void
    {
        $this->data['name'] = $name;
    }

    public function getName(): string
    {
        return $this->data['name'];
    }

    public function setPositionId(?int $position_id): void
    {
        $this->data['position_id'] = $position_id;
    }

    public function getPositionId(): ?int
    {
        return $this->data['position_id'];
    }

    public function setPriority(string $priority): void
    {
        $this->data['priority'] = $priority;
    }

    public function getPriority(): string
    {
        return $this->data['priority'];
    }

    public function setProjectId(?int $project_id): void
    {
        $this->data['project_id'] = $project_id;
    }

    public function getProjectId(): ?int
    {
        return $this->data['project_id'];
    }

    public function setStartAt(?string $start_at): void
    {
        $this->data['start_at'] = $start_at;
    }

    public function getStartAt(): ?string
    {
        return $this->data['start_at'];
    }

    public function setStatus(string $status): void
    {
        $this->data['status'] = $status;
    }

    public function getStatus(): string
    {
        return $this->data['status'];
    }

    public function setStatusPercent(?int $status_percent): void
    {
        $this->data['status_percent'] = $status_percent;
    }

    public function getStatusPercent(): ?int
    {
        return $this->data['status_percent'];
    }
}
