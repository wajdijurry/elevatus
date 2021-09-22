<?php
/**
 * User: Wajdi Jurry
 * Date: 22/09/2021
 * Time: ١٢:٠٩ ص
 */

namespace elevatus\app\core;

use elevatus\app\exceptions\DuplicateInputsException;

/**
 * Class AbstractMode
 * @package elevatus\app\core
 */
abstract class AbstractMode
{
    /** @var string */
    protected $str1;

    /** @var string */
    protected $str2;

    /**
     * Validates the inputs
     * @param $str1
     * @param $str2
     * @return self
     * @throws DuplicateInputsException
     */
    public function validateInputs($str1, $str2): self
    {
        if (empty($str1) || empty($str2)) {
            throw new \InvalidArgumentException('invalid input');
        }
        if ($str1 == $str2) {
            throw new DuplicateInputsException('duplicate inputs');
        }
        $this->str1 = $str1;
        $this->str2 = $str2;
        return $this;
    }

    abstract public function calculate(): int;
}
