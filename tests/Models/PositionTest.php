<?php

namespace Easybill\SDK\Tests\Models;

use Easybill\SDK\Models\Position;
use Easybill\SDK\Models\PositionExportIdentifierExtended;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
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
