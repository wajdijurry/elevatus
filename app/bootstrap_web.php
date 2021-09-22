<?php
/**
 * User: Wajdi Jurry
 * Date: 22/09/2021
 * Time: ١١:٥٢ م
 */

define('VIEWS_DIR', __DIR__ . '/../public/views');
define('CSS_DIR', '../public/css');
define('CACHE_DIR', __DIR__ . '/../cache');

require __DIR__ . '/library/vendor/autoload.php';
include __DIR__ . '/../app/import.php';

$latte = new Latte\Engine;
$latte->setTempDirectory(CACHE_DIR);
