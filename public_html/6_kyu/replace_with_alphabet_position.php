<?php

//https://www.codewars.com/kata/546f922b54af40e1e90001da

function alphabet_position(string $s): string {
    $alphabet = range('a', 'z');
    $s = str_split(mb_strtolower($s));
    $result = '';

    foreach ($s as $item) {
        if (in_array($item, $alphabet)) {
            $result .= array_search($item, $alphabet) + 1 . ' ';
        }
    }

    return trim($result);
}
