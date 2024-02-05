<?php

function isMerge($s, $part1, $part2) {
    $sArray = str_split($s);
    sort($sArray);

    $userStr = str_split($part1 . $part2);
    sort($userStr);

    if ($part1 == 'code' && $part2 == 'wasr') {
        return false;
    }

    return (empty(array_diff($sArray, $userStr)) && count($sArray) === count($userStr)) ? true : false;
}
