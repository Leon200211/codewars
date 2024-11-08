<?php

// https://www.codewars.com/kata/554b4ac871d6813a03000035

function highAndLow(string $num)
{
    $numbers = explode(' ', $num);
    $low = min($numbers);
    $max = max($numbers);

    return "{$max} {$low}";
}