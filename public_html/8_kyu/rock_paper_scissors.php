<?php

function rpc($p1, $p2) {
    $rules = [
        'rockrock' => 'Draw!',
        'rockscissors' => 'Player 1 won!',
        'rockpaper' => 'Player 2 won!',
        'paperpaper' => 'Draw!',
        'paperrock' => 'Player 1 won!',
        'paperscissors' => 'Player 2 won!',
        'scissorsscissors' => 'Draw!',
        'scissorsrock' => 'Player 2 won!',
        'scissorspaper' => 'Player 1 won!',
    ];

    return $rules[$p1.$p2];
}