<?php
/**
 * User: Wajdi Jurry
 * Date: 22/09/2021
 * Time: ١١:٣٥ م
 */

namespace elevatus\app\core;

/**
 * Class LevenshteinDistance
 * @package elevatus\app\core
 */
class LevenshteinDistance extends AbstractMode
{
    /**
     * @return int
     */
    public function calculate(): int
    {
        return levenshtein($this->str1, $this->str2);
    }
}
