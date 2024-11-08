<?php

// https://www.codewars.com/kata/521c2db8ddc89b9b7a0000c1

function snail(array $array): array {
    $result = [];

    $key = array_key_first($array);
    $array[$key] = array_reverse($array[$key]);
    $isNeedFull = true;

    while (!empty($array)) {
        $subArray = $array[$key];
        $lastKey = array_key_last($array);

        if ($key === $lastKey) {
            $isNeedFull = true;
        }

        $subArray = array_reverse($subArray);
        $array[$key] = array_reverse($subArray);

        foreach ($subArray as $subKey => $item) {
            $result[] = $item;

            unset($subArray[$subKey]);
            $array[$key] = $subArray;

            if (!$isNeedFull) {
                break;
            }
        }

        if (empty($array[$key])) {
            unset($array[$key]);
        }

        if ($key === $lastKey) {
            $array = array_reverse($array);
            $key = array_key_first($array);
        } else {
            $key++;
        }

        $isNeedFull = false;
    }

    return $result;
}