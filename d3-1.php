<?php

function d3_1($input) {

    $moves = str_split($input);

    $x = 0;
    $y = 0;

    $count = 1;

    $coords[0][0] = 1;

    foreach ($moves as $move) {
        if ($move == '>') {
            $x++;
        }
        if ($move == '<') {
            $x--;
        }
        if ($move == '^') {
            $y++;
        }
        if ($move == 'v') {
            $y--;
        }

        if (!isset($coords[$x][$y])) {
            $coords[$x][$y] = 1;
        } else {
            $coords[$x][$y]++;
        }
    }

    $c = 0;
    foreach ($coords as $value) {
        $c = $c + count($value);
    }

    return $c;
}
