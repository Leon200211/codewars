<?php

// https://www.codewars.com/kata/5d2659626c7aec0022cb8006

function baumSweet() {
    for ($i = 0; $i < 30; $i++) {
        $binary = decbin($i);

        if ($binary === '0') {
            yield 1;

            continue;
        }

        $zeroCount = 0;

        foreach (str_split($binary) as $digit) {
            if ($digit === '0') {
                $zeroCount++;
            }

            if ($digit !== '0' && $zeroCount !== 0) {
                if ($zeroCount & 1) {
                    yield 0;

                    continue 2;
                }
            }
        }

        if ($zeroCount & 1) {
            yield 0;
        } else {
            yield 1;
        }
    }
}

function baumSweet_2() {
    yield 1;

    for ($n = 1; true; $n++) {
        yield preg_match('/(^|1)0(00)*(1|$)/', decbin($n)) ? 0 : 1;
    }
}