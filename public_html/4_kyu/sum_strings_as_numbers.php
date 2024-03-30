<?php

// https://www.codewars.com/kata/5324945e2ece5e1f32000370/train/php

function sum_strings($a, $b) {
    $a = str_split(strrev(ltrim($a, '0')));
    $b = str_split(strrev(ltrim($b, '0')));

    if (count($a) < count($b)) {
        list($a,$b)=[$b,$a];
    }

    $magnifier = 0;
    $iterator = 0;

    while (true) {
        if ($magnifier === 0 && $iterator >= count($b)) {
            break;
        }

        if (array_key_exists($iterator, $b)) {
            $sum = (int)$a[$iterator] + (int)$b[$iterator] + $magnifier;
        } else if (array_key_exists($iterator, $a)) {
            $sum = (int)$a[$iterator] + $magnifier;
        } else {
            $sum = $magnifier;
        }

        if ($magnifier > 0) {
            $magnifier = 0;
        }

        if ($sum > 9) {
            $magnifier++;
        }

        $a[$iterator] = $sum % 10;
        $iterator++;
    }

    return strrev(implode($a));
}