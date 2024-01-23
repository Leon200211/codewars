<?php

function wordPattern($word) {
    $letters = str_split(mb_strtolower($word));
    $cryptList = [];
    $cryptIndex = 0;
    $result = [];

    foreach ($letters as $letter) {
        if (array_key_exists($letter, $cryptList)) {
            $result[] = "{$cryptList[$letter]}";
        } else {
            $cryptList[$letter] = $cryptIndex;
            $cryptIndex++;
            $result[] = "{$cryptList[$letter]}";
        }
    }

    return implode('.', $result);

//    $word = str_split(strtolower($word));
//    $letters = array_values(array_unique($word));
//    return str_replace($letters, array_keys($letters), join('.', $word));
}