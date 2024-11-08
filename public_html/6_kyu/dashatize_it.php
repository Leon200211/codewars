<?php

// https://www.codewars.com/kata/58223370aef9fc03fd000071/train/php

function dashatize(int $num): string {
    $result = '';
    $digits = str_split($num);

    foreach ($digits as $key => $digit) {
        if ((int)$digit % 2 !== 0) {
            $result .= "-{$digit}-";
        } else {
            $result .= $digit;
        }
    }

    return trim(preg_replace('/(-)\1+/', '$1', $result), '-');
}


//function dashatize(int $num): string {
//    return trim(str_replace('--', '-', preg_replace('/([13579])/','-$1-', $num)), '-');
//}