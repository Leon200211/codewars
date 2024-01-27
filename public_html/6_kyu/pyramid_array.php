<?php

function pyramid($n) {
    $result = [];

    for ($i = 0; $i < $n; $i++) {
        $result[] = array_fill(0, $i + 1, 1);
    }

    return $result;
}