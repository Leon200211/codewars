<?php

// https://www.codewars.com/kata/52f78966747862fc9a0009ae

function calc(string $expr): float {
    $exprs = explode(' ', $expr);
    $operators = ['+', '-', '*', '/'];
    $iter = 0;
    $result = 0;

    while (!empty($exprs)) {
        if (count($exprs) < 3) {
            return (float)$exprs[0] ?? 0;
        }

        if (!in_array($exprs[$iter], $operators)) {
            $iter++;
            continue;
        }

        switch ($exprs[$iter]) {
            case '+':
                $result = (float)$exprs[$iter - 2] + (float)$exprs[$iter - 1];
                break;
            case '-':
                $result = (float)$exprs[$iter - 2] - (float)$exprs[$iter - 1];
                break;
            case '*':
                $result = (float)$exprs[$iter - 2] * (float)$exprs[$iter - 1];
                break;
            case '/':
                $result = (float)$exprs[$iter - 2] / (float)$exprs[$iter - 1];
                break;
        }

        unset($exprs[$iter - 2]);
        unset($exprs[$iter - 1]);
        unset($exprs[$iter]);
        $exprs[$iter - 2] = $result;
        ksort($exprs);
        $exprs = array_values($exprs);
        $iter = 0;
    }

    return $result;
}

function calc_2(string $s): float {
    if($s === '') {return 0;}
    $tokens = [];
    foreach(explode(' ', $s) as $token) {
        if(is_numeric($token)) array_push($tokens, floatval($token));
        else {
            $u = array_pop($tokens); $v = array_pop($tokens);
            switch($token) {
                case '+': array_push($tokens, $v+$u); break;
                case '-': array_push($tokens, $v-$u); break;
                case '*': array_push($tokens, $v*$u); break;
                case '/': array_push($tokens, $v/$u); break;
            }
        }
    }
    return array_pop($tokens);
}