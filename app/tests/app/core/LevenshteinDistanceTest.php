<?php
/**
 * User: Wajdi Jurry
 * Date: 22/09/2021
 * Time: ٨:٠٤ م
 */

namespace elevatus\tests\app\core;


use elevatus\app\core\LevenshteinDistance;
use PHPUnit\Framework\TestCase;

class LevenshteinDistanceTest extends TestCase
{
    public function testCalculate()
    {
        $instance = new LevenshteinDistance();
        $instance->validateInputs('string one', 'string two');
        $this->assertEquals(3, $instance->calculate());
    }
}
