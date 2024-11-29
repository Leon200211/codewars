<?php

// https://www.codewars.com/kata/52a382ee44408cea2500074c

function determinant(array $matrix): int {
    if (count($matrix) === 1) {
        return $matrix[0][0];
    }

    if (count($matrix[0]) === 2) {
        return $matrix[0][0] * $matrix[1][1] - $matrix[0][1] * $matrix[1][0];
    }

    $result = 0;

    foreach ($matrix as $key => $row) {
        $num = $row[0];
        $newMatrix = $matrix;
        unset($newMatrix[$key]);

        foreach ($newMatrix as $subKey => $subRow) {
            unset($subRow[0]);

            $newMatrix[$subKey] = array_values($subRow);
        }

        $subDeterminant = determinant(array_values($newMatrix));
        $sign = !($key & 1) ? 1 : -1;
        $result += $sign * $num * $subDeterminant;
    }

    return $result;
}