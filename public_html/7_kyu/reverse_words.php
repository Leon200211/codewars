<?php

// https://www.codewars.com/kata/5259b20d6021e9e14c0010d4

function reverseWords($str) {
    $result = [];
    $strings = explode(' ', $str);

    foreach ($strings as $string) {
        $result[] = strrev($string);
    }

    return implode(' ', $result);
}