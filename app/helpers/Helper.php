<?php
/**
 * User: Wajdi Jurry
 * Date: 22/09/2021
 * Time: ١١:٥٣ م
 */

namespace elevatus\app\helpers;


use elevatus\app\core\AbstractMode;

class Helper
{
    /** @var AbstractMode */
    private static $modeInstance;

    /**
     * @param $operation
     * @return AbstractMode
     * @throws \Exception
     */
    static public function getModeInstance($operation): AbstractMode
    {
        try {
            $classNamespace = explode('\\', __NAMESPACE__);
            array_pop($classNamespace);
            $className = '\\' . implode('\\', $classNamespace) . '\\core\\' . ucfirst($operation) . 'Distance';
            return self::$modeInstance = new $className();
        } catch (\Error $exception) {
            throw new \Exception(sprintf('Unknown operation "%s"', $operation));
        }
    }
}
