<?php
/**
 * User: Wajdi Jurry
 * Date: 22/09/2021
 * Time: ١١:٥٢ م
 */

use elevatus\app\exceptions\DuplicateInputsException;
use elevatus\app\helpers\Helper;

error_reporting(E_ALL &~ E_NOTICE &~ E_WARNING);

include __DIR__ . '/import.php';

$arguments['operation'] = $arguments['str1'] = $arguments['str2'] = null;

foreach ($argv as $k => $arg) {
    if ($k == 1) {
        $arguments['operation'] = $arg;
    } elseif ($k == 2) {
        $arguments['str1'] = $arg;
    } elseif ($k >= 3) {
        $arguments['str2'] = $arg;
    }
}

try {
    echo Helper::getModeInstance($arguments['operation'])
        ->validateInputs($arguments['str1'], $arguments['str2'])
        ->calculate();
    echo PHP_EOL;
} catch (\InvalidArgumentException $exception) {
    die('Please provide valid inputs. Error: ' . $exception->getMessage() . PHP_EOL);
} catch (DuplicateInputsException $exception) {
    die('Duplicate inputs found' . PHP_EOL);
} catch (\Throwable $exception) {
    die($exception->getMessage() . PHP_EOL);
}
