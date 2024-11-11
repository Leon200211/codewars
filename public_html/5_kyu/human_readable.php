<?php

https://www.codewars.com/kata/52685f7382004e774f0001f7

function humanReadable($seconds): string
{
    $secondsPerHour = 3600;
    $secondsPerMinute = 60;

    $hours = floor($seconds / $secondsPerHour);
    $seconds = $seconds - ($hours * $secondsPerHour);
    $minutes = floor($seconds / $secondsPerMinute);
    $seconds = $seconds - ($minutes * $secondsPerMinute);

    $hours = str_pad($hours, 2, '0', STR_PAD_LEFT);
    $minutes = str_pad($minutes, 2, '0', STR_PAD_LEFT);
    $seconds = str_pad($seconds, 2, '0', STR_PAD_LEFT);

    return "{$hours}:{$minutes}:{$seconds}";
}

function humanReadable_2(int $seconds): string
{
    return sprintf('%02d:%02d:%02d', $seconds / 3600, ($seconds % 3600) / 60, $seconds % 60);
}