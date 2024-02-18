<?php

// https://www.codewars.com/kata/5254ca2719453dcc0b00027d

function perReq($sArray) {
    $result = [];

    $firstItem = $sArray[0];

    if (count($sArray) > 2) {
        $arrayForCombo = perReq(array_splice($sArray, 1));

        foreach ($arrayForCombo as $key => $item) {
            $result[] = $firstItem . $item;

        }
    } else {
        $result[] = implode($sArray);
        $result[] = implode(array_reverse($sArray));
    }

    return $result;
}

function permutations(string $s): array {
    $sArray = str_split($s);

    foreach ($sArray as $key => $item) {

        $firstItem = $item;
        $arrayForReq = $sArray;
        unset($arrayForReq[$key]);
        array_unshift($arrayForReq, $firstItem);

        $arrayForIter[] = perReq($arrayForReq);


    }

    return $result;
}





