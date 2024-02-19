<?php

// https://www.codewars.com/kata/5254ca2719453dcc0b00027d



function getCombine($sArray) {

    if (count($sArray) > 2) {
        $firstItem = $sArray[0];
        $itemForCombine = getCombine(array_slice($sArray, 1));

        $result = [];

        foreach ($itemForCombine as $item) {
            $result[] = $firstItem . $item;
        }

        return $result;
    } else {
        $result[] = implode($sArray);
        $result[] = implode(array_reverse($sArray));

        return $result;
    }

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
    $result = [];

    if (count($sArray) == 2) {
        $result[] = implode($sArray);
        $result[] = implode(array_reverse($sArray));

        return $result;
    } else {

        foreach ($sArray as $key => $item) {

            $firstItem = $item;
            $arrayForIter = $sArray;
            unset($arrayForIter[$key]);

            $arrayForCombo = permutations(implode($arrayForIter));

            foreach ($arrayForCombo as $value) {
                $result[] = $firstItem . $value;
            }
        }

        return $result;
    }
}





