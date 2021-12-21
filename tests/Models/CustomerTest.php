<?php

namespace easybill\SDK\Tests\Models;

use easybill\SDK\Models\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function testToArray(): void
    {
        $customer = new Customer();
        $customer->setNumber('31337');
        static::assertSame(['number' => '31337'], $customer->toArray());
    }
}
