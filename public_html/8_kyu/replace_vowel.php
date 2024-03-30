<?php

// https://www.codewars.com/kata/57fb09ef2b5314a8a90001ed

function replace(string $s): string {
    return str_replace(str_split('aeiouAEIOU'), '!', $s);

    // return strtr($s, 'aeiouAEIOU', '!!!!!!!!!!');
}