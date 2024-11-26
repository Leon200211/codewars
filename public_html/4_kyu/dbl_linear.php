<?php

// https://www.codewars.com/kata/5672682212c8ecf83e000050

function dblLinear($n) {
    $u = [1];
    $x = 0;
    $y = 0;

    while (count($u) <= $n + 1000) {
        $x2 = 2 * $u[$x] + 1;
        $y3 = 3 * $u[$y] + 1;

        if ($x2 <= $y3) {
            if ($x2 !== end($u)) {
                $u[] = $x2;
            }
            $x++;
        }

        if ($y3 <= $x2) {
            if ($y3 !== end($u)) {
                $u[] = $y3;
            }
            $y++;
        }
    }

    return $u[$n];
}



function dblLinear_2($n) {
    $linear = [1];
    $iter = 0;

    while (count($linear) < $n + 4000) {
        $firstAdd = 2 * $linear[$iter] + 1;
        $secondAdd = 3 * $linear[$iter] + 1;



        $iter++;

        $linear = array_unique($linear);
        sort($linear);
    }

    var_dump($linear);
    exit();

    return $linear[$n];
}