<?php

namespace easybill\SDK\Tests\Models;

use easybill\SDK\Models\Position;
use easybill\SDK\Models\PositionExportIdentifierExtended;
use PHPUnit\Framework\TestCase;

class PositionTest extends TestCase
{
    public function testToArray(): void
    {
        $position = new Position();
        $position->setNumber('31337');
        $position->setExportIdentifierExtended(new PositionExportIdentifierExtended());
        $position->getExportIdentifierExtended()->setSmallBusiness('010203040506070809');
        static::assertSame(['number' => '31337', 'export_identifier_extended' => ['smallBusiness' => '010203040506070809']], $position->toArray());
    }
}
