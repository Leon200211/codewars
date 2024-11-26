<?php

// https://www.codewars.com/kata/5672682212c8ecf83e000050

function dblLinearOptimized($n) {
    $u = [1];
    $x = 0;
    $y = 0;

    while (count($u) <= $n + 1000) {
        $x2 = 2 * $u[$x] + 1;
        $y3 = 3 * $u[$y] + 1;

        if ($x2 <= $y3) {
            if ($x2 !== end($u)) {
                $u[] = $x2;
            }
            $x++;
        }

        if ($y3 <= $x2) {
            if ($y3 !== end($u)) {
                $u[] = $y3;
            }
            $y++;
        }
    }

    return $u[$n];
}



function dblLinearOriginal($n) {
    $linear = [1];
    $iter = 0;

    while (count($linear) < $n + 4000) {
        $linear[] = 2 * $linear[$iter] + 1;
        $linear[] = 3 * $linear[$iter] + 1;

        $iter++;

        $linear = array_unique($linear);
        sort($linear);
    }

    return $linear[$n];
}



// Бенчмарк
function benchmarkFunction($func, $n, $iterations = 100) {
    $start = microtime(true);

    for ($i = 0; $i < $iterations; $i++) {
        $result = $func($n);
    }

    $end = microtime(true);
    $time = $end - $start;

    return [
        'result' => $result,
        'time' => $time,
        'avg_time' => $time / $iterations
    ];
}

// Тестовые значения
$testValues = [10, 100, 1000, 5000];

foreach ($testValues as $n) {
    echo "Тестирование для n = $n:\n";

    $originalResult = benchmarkFunction('dblLinearOriginal', $n);
    $optimizedResult = benchmarkFunction('dblLinearOptimized', $n);

    echo "Оригинальная функция:\n";
    echo "  Результат: {$originalResult['result']}\n";
    echo "  Общее время: " . round($originalResult['time'], 4) . " сек\n";
    echo "  Среднее время за итерацию: " . round($originalResult['avg_time'] * 1000, 4) . " мс\n\n";

    echo "Оптимизированная функция:\n";
    echo "  Результат: {$optimizedResult['result']}\n";
    echo "  Общее время: " . round($optimizedResult['time'], 4) . " сек\n";
    echo "  Среднее время за итерацию: " . round($optimizedResult['avg_time'] * 1000, 4) . " мс\n\n";

    $speedup = $originalResult['time'] / $optimizedResult['time'];
    echo "Ускорение: " . round($speedup, 2) . "x\n\n";
    echo "--------------------\n\n";
}