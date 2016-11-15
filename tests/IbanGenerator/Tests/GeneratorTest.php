<?php

namespace IbanGenerator\Tests;

use IbanGenerator\Generator;

/**
 * Class GeneratorTest.
 *
 * @covers IbanGenerator\Generator
 */
class GeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test
     */
    public function testGenerate()
    {
        $generator = new Generator('10050000', '0123456789', 'DE');

        $this->assertEquals($generator->generate(), 'DE17100500000123456789');
    }
}
