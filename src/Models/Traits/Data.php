<?php

namespace easybill\SDK\Models\Traits;

use easybill\SDK\Models\ToArrayInterface;

trait Data
{
    protected array $data = [];

    public function toArray(): array
    {
        return array_map(static function (mixed $val): mixed {
            if ($val instanceof ToArrayInterface) {
                return $val->toArray();
            }

            return $val;
        }, $this->data);
    }

    protected function get(string $key): mixed
    {
        if (!array_key_exists($key, $this->data)) {
            throw new \RuntimeException(sprintf('Key "%s" not exists in $data', $key));
        }

        return $this->data[$key];
    }

    protected function getInstance(string $key, string $className): mixed
    {
        $data = $this->get($key);
        if ($data instanceof $className) {
            return $data;
        }

        return $this->data[$key] = new $className($data);
    }
}
