<?php

// https://www.codewars.com/kata/5d2659626c7aec0022cb8006

function baumSweet() {
    $result = [];

    for ($i = 0; $i < 30; $i++) {
        $binary = decbin($i);

        if ($binary === '0') {
            $result[] = 1;

            continue;
        }

        $zeroCount = 0;

        foreach (str_split($binary) as $digit) {
            if ($digit === '0') {
                $zeroCount++;
            }

            if ($digit !== '0' && $zeroCount !== 0) {
                if ($zeroCount & 1) {
                    $result[] = 0;

                    continue 2;
                }
            }
        }

        if ($zeroCount & 1) {
            $result[] = 0;
        } else {
            $result[] = 1;
        }
    }

    return $result;
}