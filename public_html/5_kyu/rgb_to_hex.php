<?php

function validate_rgb($num) {
    if ($num < 0) $num = 0;
    if ($num >255) $num = 255;

    return $num;
}

function rgb($r,$g,$b){
    $r = str_pad(dechex(validate_rgb($r)), 2, "0", STR_PAD_LEFT);
    $g = str_pad(dechex(validate_rgb($g)), 2, "0", STR_PAD_LEFT);
    $b = str_pad(dechex(validate_rgb($b)), 2, "0", STR_PAD_LEFT);

    return strtoupper($r . $g . $b);
}