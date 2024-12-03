<?php

// https://www.codewars.com/kata/5a58d889880385c2f40000aa

function automorphic(int $n): string {
    return str_ends_with((string)($n * $n), (string)$n) ? 'Automorphic' : 'Not!!';
}