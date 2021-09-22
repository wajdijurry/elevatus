<?php
/**
 * User: Wajdi Jurry
 * Date: 22/09/2021
 * Time: ٨:٠٧ م
 */

namespace elevatus\tests\app\helpers;


use elevatus\app\core\HammingDistance;
use elevatus\app\core\LevenshteinDistance;
use elevatus\app\helpers\Helper;
use PHPUnit\Framework\TestCase;

class HelperTest extends TestCase
{
    public function testGetModeInstance()
    {
        $this->assertInstanceOf(HammingDistance::class, Helper::getModeInstance('hamming'));
        $this->assertInstanceOf(LevenshteinDistance::class, Helper::getModeInstance('levenshtein'));
    }

    /**
     * @expectedException \Exception
     */
    public function testGetModeInstanceWithInvalidOperation()
    {
        Helper::getModeInstance('notfound');
    }
}
