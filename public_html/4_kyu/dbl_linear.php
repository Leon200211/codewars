<?php

// https://www.codewars.com/kata/5672682212c8ecf83e000050

function dblLinear($n) {
    $linear = [1];
    $iter = 0;

    while (count($linear) < $n + 4000) {
        $linear[] = 2 * $linear[$iter] + 1;
        $linear[] = 3 * $linear[$iter] + 1;
        $iter++;

        $linear = array_unique($linear);
        sort($linear);
    }

    var_dump($linear);
    exit();

    return $linear[$n];
}