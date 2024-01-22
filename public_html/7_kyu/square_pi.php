<?php

//https://www.codewars.com/kata/5cd12646cf44af0020c727dd/

function squarePi($digits){
    $piString = '31415926535897932384626433832795028841971693993751058209749445923078164062862089986280348253421170679';

    $piStringByDigits = substr($piString, 0, $digits);
    $piNumbers = str_split($piStringByDigits);

    $numberForSquare = 0;

    foreach ($piNumbers as $piNumber) {
        $numberForSquare += $piNumber**2;
    }

    $sqrt = sqrt($numberForSquare);

    $asd = $sqrt / 10;

    return (floor($sqrt) == $sqrt) ? $sqrt : floor($sqrt) + 1;
}