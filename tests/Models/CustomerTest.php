<?php

namespace Easybill\SDK\Tests\Models;

use Easybill\SDK\Models\Customer;
use PHPUnit\Framework\TestCase;
use RuntimeException;

/**
 * @internal
 * @coversNothing
 */
class CustomerTest extends TestCase
{
    public function testToArray(): void
    {
        $customer = new Customer();
        $customer->setNumber('31337');
        $customer->setBirthDate(\DateTimeImmutable::createFromFormat('!Y-m-d', '1984-12-18'));
        static::assertSame(['number' => '31337', 'birth_date' => '1984-12-18 00:00:00'], $customer->toArray());
    }

    public function testBirthDay(): void
    {
        static::assertNull((new Customer(['birth_date' => null]))->getBirthDate());
        static::assertInstanceOf(\DateTimeImmutable::class, (new Customer(['birth_date' => '1984-12-18']))->getBirthDate());
        static::assertSame('1984-12-18', (new Customer(['birth_date' => '1984-12-18']))->getBirthDate()->format('Y-m-d'));
        static::assertSame('1984-12-18 00:00:00', (new Customer(['birth_date' => '1984-12-18']))->getBirthDate()->format('Y-m-d H:i:s'));
    }

    public function testAttrNotFoundException(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Attr "birth_date" not found in $data');
        (new Customer())->getBirthDate();
    }
}
