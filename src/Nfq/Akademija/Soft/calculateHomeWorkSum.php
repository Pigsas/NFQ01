<?php

namespace Nfq\Akademija\Soft;

function calculateHomeWorkSum(int ...$numbers) : int
{
    try{
        return array_sum($numbers);
    } catch (\Throwable  $err) {
        die ("Įvyko klaida praneškite administratoriui ! Kodas: 001-C");
    }
}
