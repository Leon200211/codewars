<?php

// https://www.codewars.com/kata/5324945e2ece5e1f32000370/train/php

function sum_strings($a, $b) {
    if (strlen($a) < strlen($b)) {
        list($a,$b)=[$b,$a];
    }

    $a = str_split(strrev($a));
    $b = str_split(strrev($b));

    $magnifier = 0;

    foreach ($b as $key => $value) {
        $sum = (int)$a[$key] + (int)$b[$key] + $magnifier;

        if ($magnifier > 0) {
            $magnifier = 0;
        }

        if ($sum > 9) {
            $magnifier++;
        }

        $a[$key] = $sum % 10;
//        $nextKey = ++$key;

//        if ($magnifier > 0) {
//            if (array_key_exists($nextKey, $a)) {
//                $a[$nextKey] = $a[$nextKey] + $magnifier;
//            } else {
//                $a[$nextKey] = $magnifier;
//            }
//        }
    }

    return strrev(implode($a));
}