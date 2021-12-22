<?php

namespace Easybill\SDK\Tests\Models;

use Easybill\SDK\Models\Document;
use Easybill\SDK\Models\DocumentPosition;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class DocumentTest extends TestCase
{
    public function testPositionsToArray(): void
    {
        $document = new Document();
        $document->setItems([
            $position = new DocumentPosition(),
        ]);

        $position->setType('POSITION');
        $position->setNumber('31337');
        $position->setDescription('Foobar is not Barfoo!');

        static::assertSame(['items' => [['type' => 'POSITION', 'number' => '31337', 'description' => 'Foobar is not Barfoo!']]], $document->toArray());
    }

    public function testPositionsArrayToInstaces(): void
    {
        $document = new Document([
            'items' => [
                ['number' => '31337'],
            ],
        ]);

        static::assertSame('31337', $document->getItems()[0]->getNumber());
    }
}
