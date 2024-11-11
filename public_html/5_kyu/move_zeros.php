<?php

// https://www.codewars.com/kata/52597aa56021e91c93000cb0

function moveZeros(array $items): array
{
    $key = 0;
    $iteration = 0;
    $itemsCount = count($items);

    while ($key < $itemsCount) {

        if ($iteration >= $itemsCount) {
            break;
        }

        if ($items[$key] !== 0 && $items[$key] !== 0.0) {
            $key++;
            $iteration++;

            continue;
        }

        $items[] = 0;
        unset($items[$key]);
        $items = array_values($items);
        $iteration++;
    }

    return $items;
}

function moveZeros_2(array $items): array
{
    foreach ($items as $key => $item) {
        if ($item !== 0 && $item !== 0.0) {
            unset($items[$key]);
            $items[] = $item;
        }
    }

    return array_values($items);
}