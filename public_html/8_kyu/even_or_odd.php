<?php

// https://www.codewars.com/kata/53da3dbb4a5168369a0000fe

function even_or_odd(int $n): string {
    return !($n & 1) ? 'Even' : 'Odd';
}