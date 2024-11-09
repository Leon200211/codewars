<?php

// https://www.codewars.com/kata/5262119038c0985a5b00029f

// Тест Миллера — Рабина


// Модульное возведение в степень (x^y) % p
function power($x, $y, $p)
{
    $res = 1;
    $x = $x % $p;

    while ($y > 0)
    {
        if ($y & 1) {
            $res = ($res * $x) % $p;
        }

        $y = $y >> 1; // $y = $y/2
        $x = ($x * $x) % $p;
    }

    return $res;
}

// Тест Миллер
function miillerTest($d, $n)
{
    $a = 2 + rand() % ($n - 4);
    $x = power($a, $d, $n);

    if ($x == 1 || $x == $n - 1) {
        return true;
    }
    while ($d != $n - 1)
    {
        $x = ($x * $x) % $n;
        $d *= 2;

        if ($x == 1) return false;
        if ($x == $n - 1) return true;
    }

    return false;
}

function is_prime($n, $k = 50)
{
    if ($n <= 1 || $n == 4) return false;
    if ($n <= 3) return true;

    $d = $n - 1;

    while ($d % 2 == 0) {
        $d /= 2;
    }

    for ($i = 0; $i < $k; $i++) {
        if (!miillerTest($d, $n)) {
            return false;
        }
    }

    return true;
}