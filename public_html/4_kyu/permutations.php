<?php

// https://www.codewars.com/kata/5254ca2719453dcc0b00027d

function permutations(string $s): array {
    $sArray = str_split($s);
    $result = [];

    if (count($sArray) == 1) {
        $result[] = implode($sArray);

        return $result;
    } else if (count($sArray) == 2) {
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

        return array_unique($result);
    }
}





