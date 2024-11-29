<?php

// https://www.codewars.com/kata/57cff961eca260b71900008f

function isVow(array $a): array {
    $vowels = [97, 101, 105, 111, 117];

    foreach ($a as $key => $chr) {
        if (in_array($chr, $vowels)) {
            $a[$key] = chr($chr);
        }
    }

    return $a;
}