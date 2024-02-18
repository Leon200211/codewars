<?php

// https://www.codewars.com/kata/5254ca2719453dcc0b00027d

function rearrangementArray(array $array) {
    $result = [];

    if (count($array) == 2) {
        return $array;
    }

    foreach ($array as $key => $item) {
        $firstItem = $item;
        $arrayForIter = $array;
        unset($arrayForIter[$key]);
        array_unshift($arrayForIter, $firstItem);

        $result[] = $arrayForIter;

        rearrangementArray(array_splice($arrayForIter, 1));

    }

    exit();
}

function permutations(string $s): array {
    $sArray = str_split($s);

    $result = [];


    foreach ($sArray as $key => $item) {
        $firstItem = $item;
        $arrayForIter = $sArray;
        unset($arrayForIter[$key]);
        array_unshift($arrayForIter, $firstItem);

        $result[] = $arrayForIter;

        rearrangementArray(array_splice($arrayForIter, 1));

    }


    return $result;
}





