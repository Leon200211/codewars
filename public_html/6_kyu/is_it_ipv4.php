<?php

// https://www.codewars.com/kata/567fe8b50c201947bc000056

function ipv4_address($address){
    return (filter_var($address, FILTER_VALIDATE_IP)) ? true : false;
}