<?php

// https://www.codewars.com/kata/56b29582461215098d00000f

function pipeFix(array $numbers): array {
    return range(min($numbers), max($numbers));
}