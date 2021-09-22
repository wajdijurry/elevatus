<?php
/**
 * User: Wajdi Jurry
 * Date: 22/09/2021
 * Time: ١١:٣٦ م
 */

use elevatus\app\helpers\Helper;

include __DIR__ . '/../app/bootstrap_web.php';

if (isset($_POST['submit'])) {
    $firstInput = $_POST['first_input'];
    $secondInput = $_POST['second_input'];
    $operation = $_POST['operation'];
    try {
        $result = Helper::getModeInstance($operation)
            ->validateInputs($firstInput, $secondInput)
            ->calculate();
    } catch (\Throwable $exception) {
        $error = $exception->getMessage();
    }
}

$latte->render(VIEWS_DIR . '/page.html', [
    'title' => 'Calculate Hamming / Levenshtein Distance',
    'cssDir' => CSS_DIR,
    'firstInput' => $firstInput,
    'secondInput' > $secondInput,
    'result' => $result,
    'error' => $error
]);
