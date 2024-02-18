<?php

// https://www.codewars.com/kata/5254ca2719453dcc0b00027d


function permutations(string $s): array {
    $sArray = str_split($s);

    $result = [];

    if ($sArray > 1) {

    }

    //$result = array_unique($result);
    //exit();

    return $result;
}





function permutations(string $s): array {
    $sArray = str_split($s);

    $result = [];

    foreach ($sArray as $key => $item) {

        $firstItem = $item;
        $arrayForIter = $sArray;
        unset($arrayForIter[$key]);

        array_unshift($arrayForIter, $firstItem);

        for ($i = 1; $i < count($arrayForIter); $i++) {
            $result[] = implode($arrayForIter);

            if (!empty($arrayForIter[$i + 1])) {
                $curItem = $arrayForIter[$i];
                $nextItem = $arrayForIter[$i + 1];
                $arrayForIter[$i] = $nextItem;
                $arrayForIter[$i + 1] = $curItem;
            }
        }
    }

    //$result = array_unique($result);

    return $result;
}