<?php

// https://www.codewars.com/kata/550498447451fbbd7600041c

function comp($a1, $a2) {
    if (is_null($a1) || is_null($a2)) {
        return false;
    }

    foreach ($a2 as $item) {
        $isNormal = false;

        foreach ($a1 as $key => $mainItem) {
            if ($item === pow($mainItem, 2)) {
                $isNormal = true;
                unset($a1[$key]);

                break;
            }
        }

        if (!$isNormal) {
            return false;
        }
    }

    return true;
}

function comp_2($a1, $a2) {

    if ( is_null($a1) || is_null($a2) )
        return false;

    $t = array_map(function($v) {
        return $v * $v;
    }, $a1);

    sort($a2);
    sort($t);
    return $a2 == $t;
}