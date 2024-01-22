<?php

// https://www.codewars.com/kata/56541980fa08ab47a0000040/train/php

function printerError($s) {
    $curLetters = range('a', 'm');
    $letters = str_split($s);
    $errorLetter = 0;

    foreach ($letters as $letter) {
        if (!in_array($letter, $curLetters)) {
            $errorLetter += 1;
        }
    }

    $strLen = count($letters);

    return "{$errorLetter}/{$strLen}";
}