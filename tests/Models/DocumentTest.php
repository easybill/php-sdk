<?php

namespace easybill\SDK\Tests\Models;

use easybill\SDK\Models\Document;
use easybill\SDK\Models\DocumentPosition;
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
}
