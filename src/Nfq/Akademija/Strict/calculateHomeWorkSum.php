<?php

declare(strict_types=1);

namespace Nfq\Akademija\Strict;

function calculateHomeWorkSum(int ...$numbers) : int
{
    try{
        return array_sum($numbers);
    } catch (\Throwable  $err) {
        die ("Įvyko klaida praneškite administratoriui ! Kodas: 001-D");
    }
}
