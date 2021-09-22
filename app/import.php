<?php
/**
 * User: Wajdi Jurry
 * Date: 22/09/2021
 * Time: ١:٣٨ ص
 */

spl_autoload_register(function ($class) {
    $classDir = str_replace('\\', '/', $class);
    $classDirParts = explode('/', $classDir);
    if (reset($classDirParts) !== 'elevatus') {
        return;
    }
    array_shift($classDirParts);
    if (file_exists($class = __DIR__ . '/../' . implode('/', $classDirParts) . '.php')) {
        include $class;
    } else {
        throw new \Error(sprintf('Class %s not found ', $class));
    }
});
