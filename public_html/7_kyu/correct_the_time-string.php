<?php

// https://www.codewars.com/kata/57873ab5e55533a2890000c7

function timeCorrect($timestring) {
    //return false === ($date = DateTime::createFromFormat('H:i:s', $timestring)) ? null : $date->format('H:i:s');

    if (is_null($timestring)) {
        return null;
    }

    if (empty($timestring)) {
        return $timestring;
    }

    if (!preg_match("/^\d{2}\:\d{2}\:\d{2}$/", $timestring)) {
        return null;
    }

    list($hours, $minutes, $seconds) = explode(':', $timestring);

    if ($seconds >= 60) {
        $seconds = $seconds % 60;
        $seconds = str_pad($seconds, 2, "0", STR_PAD_LEFT);
        $minutes += 1;
    }

    if ($minutes >= 60) {
        $minutes = $minutes % 60;
        $minutes = str_pad($minutes, 2, "0", STR_PAD_LEFT);
        $hours += 1;
    }

    if ($hours >= 24) {
        $hours = $hours % 24;
        $hours = str_pad($hours, 2, "0", STR_PAD_LEFT);
    }

    return "{$hours}:{$minutes}:{$seconds}";
}