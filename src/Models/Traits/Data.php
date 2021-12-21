<?php

namespace easybill\SDK\Models\Traits;

use easybill\SDK\Models\ToArrayInterface;

trait Data
{
    protected array $data = [];

    protected function toArrayMap(mixed $val): mixed {
        if ($val instanceof ToArrayInterface) {
            return $val->toArray();
        }

        if ($val instanceof \DateTimeInterface) {
            return $val->format('Y-m-d H:i:s');
        }

        if (is_array($val)) {
            return array_map(fn($val1) => $this->toArrayMap($val1), $val);
        }

        return $val;
    }

    public function toArray(): array
    {
        return array_map(fn($val) => $this->toArrayMap($val), $this->data);
    }

    protected function attr(string $key): mixed
    {
        if (!array_key_exists($key, $this->data)) {
            throw new \RuntimeException(sprintf('Attr "%s" not found in $data', $key));
        }

        return $this->data[$key];
    }

    protected function attrInstance(string $key, string $className): mixed
    {
        $data = $this->attr($key);
        if ($data instanceof $className) {
            return $data;
        }

        return $this->data[$key] = new $className($data);
    }

    protected function attrDate(string $key): ?\DateTimeImmutable
    {
        $data = $this->attr($key);
        if ($data instanceof \DateTimeImmutable) {
            return $data;
        }
        if (null === $data) {
            return null;
        }

        return $this->data[$key] = \DateTimeImmutable::createFromFormat('!Y-m-d', $data, new \DateTimeZone('Europe/Berlin'));
    }

    protected function attrDateTime(string $key): ?\DateTimeImmutable
    {
        $data = $this->attr($key);
        if ($data instanceof \DateTimeImmutable) {
            return $data;
        }

        if (null === $data) {
            return null;
        }

        return $this->data[$key] = \DateTimeImmutable::createFromFormat('!Y-m-d H:i:s', $data, new \DateTimeZone('Europe/Berlin'));
    }
}
