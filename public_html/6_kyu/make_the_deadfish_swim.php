<?php

function parse($data) {
    $commands = str_split($data);
    $result = [];
    $number = 0;

    foreach ($commands as $command) {
        switch ($command) {
            case 'i':
                $number++;
                break;
            case 'd':
                $number--;
                break;
            case 's':
                $number = $number ** 2;
                break;
            case 'o':
                $result[] = $number;
                break;
        }
    }

    return $result;
}