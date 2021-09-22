<?php
/**
 * User: Wajdi Jurry
 * Date: 22/09/2021
 * Time: ١١:٣٥ م
 */

namespace elevatus\app\core;

/**
 * Class HammingDistance
 * @package elevatus\app\core
 */
class HammingDistance extends AbstractMode
{
    /**
     * @param $str1
     * @param $str2
     * @return AbstractMode
     * @throws \elevatus\app\exceptions\DuplicateInputsException
     */
    public function validateInputs($str1, $str2): AbstractMode
    {
        if (strlen($str1) !== strlen($str2)) {
            throw new \InvalidArgumentException('Inputs should have same length');
        }
        return parent::validateInputs($str1, $str2);
    }

    /**
     * @return int
     */
    public function calculate(): int
    {
        $i = 0; $count = 0;
        while (isset($this->str1[$i]))
        {
            if ($this->str1[$i] != $this->str2[$i])
                $count++;
            $i++;
        }
        return $count;
    }
}
