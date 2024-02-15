<?php

// https://www.codewars.com/kata/526dbd6c8c0eb53254000110

function alphanumeric(string $s): bool {
    if (preg_match("#^[aA-zZ0-9]+$#",$s)) {
        return true;
    } else {
        return false;
    }
}