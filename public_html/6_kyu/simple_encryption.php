<?php

// https:/www.codewars.com/kata/57814d79a56c88e3e0000786

function encrypt($text, $n) {
    for ($iter = 0; $iter < $n; $iter++) {
        $stringArr = str_split($text);
        $even = '';
        $uneven = '';

        foreach ($stringArr as $key => $symbol) {
            if (($key % 2) == 0) {
                $even .= $symbol;
            } else {
                $uneven .= $symbol;
            }
        }

        $text = $uneven.$even;
    }

    return $text;
}

function decrypt($text, $n) {
    for ($iter = 0; $iter < $n; $iter++) {
        $stringArr = str_split($text);
        $stringArrCount = count($stringArr);
        $iterCount = floor($stringArrCount / 2);
        $conText = '';

        for ($iterJ = 0; $iterJ < $iterCount; $iterJ++) {
            $conText .= $stringArr[$iterCount+$iterJ] . $stringArr[$iterJ];
        }

        $text = (floor($stringArrCount / 2) == $stringArrCount / 2) ? $conText : $conText.end($stringArr);
    }

    return $text;
}