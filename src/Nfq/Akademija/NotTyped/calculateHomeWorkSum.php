<?php

namespace Nfq\Akademija\NotTyped;

function calculateHomeWorkSum(...$numbers) : int
{
    try{
        return array_sum($numbers);
    } catch (\Throwable  $err) {
        die ("Įvyko klaida praneškite administratoriui ! Kodas: 001-B");
    }
}

