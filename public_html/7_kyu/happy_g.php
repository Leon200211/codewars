<?php

// https://www.codewars.com/kata/58bcd27b7288983803000002

function g_happy(string $str): bool {
    $str = str_split($str);

    foreach ($str as $key => $item) {
        if ($item !== 'g') {
            continue;
        }

        $prev = null;
        $next = null;

        if (array_key_exists($key - 1, $str)) {
            $prev = $str[$key-1];
        }

        if (array_key_exists($key + 1, $str)) {
            $next = $str[$key+1];
        }

        if ($prev !== 'g' && $next !== 'g') {
            return false;
        }
    }

    return true;
}


//function g_happy(string $str): bool {
//    return false === strpos(preg_replace('/g{2,}/', '', $str), 'g');
//}
//
//function g_happy(string $str): bool {
//    return !preg_match("/([^g]|^)g([^g]|$)/", $str);
//}