<?php

// https://www.codewars.com/kata/56b5afb4ed1f6d5fb0000991

function revRot($s, $sz) {
    $result = '';

    if ($sz <= 0 || empty($s) || $sz > mb_strlen($s)) {
        return $result;
    }

    $parts = str_split($s, $sz);

    if (mb_strlen($parts[array_key_last($parts)]) < $sz) {
        unset($parts[array_key_last($parts)]);
    }

    foreach ($parts as $part) {
        $partSum = array_sum(str_split($part));

        if ($partSum & 1) {
            $result .= mb_substr($part, 1) . $part[0];
        } else {
            $result .= strrev($part);
        }
    }

    return $result;
}
