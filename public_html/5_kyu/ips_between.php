<?php

// https://www.codewars.com/kata/526989a41034285187000de4


/**
 * Для перевода из нормальной формы в десятичное число необходимо следовать алгоритму:
 *
 * 1. Число из первого октета (самого левого) нужно умножить на 16777216 (256^3).
 *
 * 2. Число из второго октета нужно умножить на 65536 (256^2).
 *
 * 3. Число из третьего октета нужно умножить на 256.
 *
 * 4. Нужно сложить все полученные числа, а также четвёртый октет (формально четвёртый октет нужно умножить на 256^0, то есть на единицу).
 */
function ips_between($start, $end)
{
    return abs(ip2long($start) - ip2long($end));
}

function ips_between_2($start, $end)
{
    $startIp = explode('.', $start);
    $endIp = explode('.', $end);
    $result = 0;

    for ($i = 3; $i >= 0; $i--) {
        $diff = abs($endIp[$i] - $startIp[$i]);
        $excess = 256 * (3 - $i);

        if ($excess <= 0) {
            $excess = 1;
        }

        if ($startIp[$i] > $endIp[$i]) {
            $result += $excess * (255 - $diff);
        } else if ($startIp[$i] < $endIp[$i]) {
            $result += $excess * $diff;
        }
    }

    return $result;
}