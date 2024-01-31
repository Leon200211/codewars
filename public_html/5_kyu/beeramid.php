<?php

function beeramid($bonus, $price) {
    $beeramidI = 1;
    $beeramidLevel = 0;

    while(true) {
        $bonus -= $price * $beeramidI ** 2;

        if ($bonus < 0) break;
        else $beeramidLevel++;

        $beeramidI++;
    }

    return $beeramidLevel;
}