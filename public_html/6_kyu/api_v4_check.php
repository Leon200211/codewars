<?php

function isValidIP(string $str): bool
{
    return (filter_var($str, FILTER_VALIDATE_IP)) ? true : false;
}