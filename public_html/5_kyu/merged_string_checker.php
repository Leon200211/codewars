<?php

// https://www.codewars.com/kata/54c9fcad28ec4c6e680011aa/train/php

function isMerge($s, $part1, $part2) {
    $sArray = str_split($s);

    if (count($sArray) !== count(str_split($part1 . $part2))) {
        return false;
    }

    $part1 = str_split($part1);
    $part2 = str_split($part2);

    $result = [];
    $arrayIter = 0;
    while (true) {
        if (count($result) === 0) {
            if (!empty($part2[0]) && $part2[0] == $sArray[$arrayIter]) {
                $part2FirstItem = array_shift($part2);
                $result[] = $part2FirstItem;
            } else if (!empty($part1[0]) && $part1[0] == $sArray[$arrayIter]) {
                $part1FirstItem = array_shift($part1);
                $result[] = $part1FirstItem;
            } else {
                return false;
            }
        } else {
            if (!empty($part2[0]) && $part2[0] == $sArray[$arrayIter]) {
                $part2FirstItem = array_shift($part2);
                $result[] = $part2FirstItem;
            } else if (!empty($part1[0]) && $part1[0] == $sArray[$arrayIter]) {
                $part1FirstItem = array_shift($part1);
                $result[] = $part1FirstItem;
            } else {
                return false;
            }
        }

        if (count($result) === count($sArray)) {
            return true;
        }

        $arrayIter++;
    }
}
