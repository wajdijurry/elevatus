<?php
/**
 * User: Wajdi Jurry
 * Date: 22/09/2021
 * Time: ٧:٥١ م
 */

namespace elevatus\tests\app\core;


use elevatus\app\core\HammingDistance;
use PHPUnit\Framework\TestCase;

class HammingDistanceTest extends TestCase
{
    public function testCalculate()
    {
        $instance = new HammingDistance();
        $instance->validateInputs('string1', 'string2');
        $this->assertEquals(1, $instance->calculate());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testValidateInputs()
    {
        $instance = new HammingDistance();
        $instance->validateInputs('string one', 'unequal string length');
    }
}
