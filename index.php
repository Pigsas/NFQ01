<?php

/**
 * Task: NFQ Užduotis Nr. 1
 * Date: 2019-10-08
 */

ini_set('error_reporting', 0);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

require 'vendor/autoload.php';
function calculateHomeWorkSum(...$numbers)
{
    try{
        return array_sum($numbers);
    } catch (\Throwale  $err) {
        die ("Įvyko klaida praneškite administratoriui ! Kodas: 001-A");
    }
}

try {

    echo 'calculateHomeWorkSum: ' . calculateHomeWorkSum(3, 2.2, '1') . '<br>';
    echo 'Nfq\Akademija\NotTyped\calculateHomeWorkSum: ' . \Nfq\Akademija\NotTyped\calculateHomeWorkSum(3, 2.2, '1') . '<br>';
    echo 'Nfq\Akademija\Soft\calculateHomeWorkSum: ' . \Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1') . '<br>';
    echo 'Nfq\Akademija\Strict\calculateHomeWorkSum: ' . \Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.22, '1') . '<br>';

} catch (\Throwable $err) {
    die ("Įvyko klaida praneškite administratoriui ! Kodas: 002");
}


