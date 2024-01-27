<?php
function detect_pangram($string) {
    $letters = range('a', 'z');
    $lettersString = str_split(mb_strtolower($string));

    return count(array_unique(array_intersect($lettersString, $letters))) === count($letters) ? true : false;
}