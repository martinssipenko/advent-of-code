<?php

function d3_2($input) {
    $moves = str_split($input);

    $x1 = 0;
    $y1 = 0;

    $x2 = 0;
    $y2 = 0;

    $coords[0][0] = 2;

    $i = 0;
    foreach ($moves as $move) {
        if ($i%2 == 0) {
            if ($move == '>') {
                $x1++;
            }
            if ($move == '<') {
                $x1--;
            }
            if ($move == '^') {
                $y1++;
            }
            if ($move == 'v') {
                $y1--;
            }

            if (!isset($coords[$x1][$y1])) {
                $coords[$x1][$y1] = 1;
            } else {
                $coords[$x1][$y1]++;
            }
        } else {
            if ($move == '>') {
                $x2++;
            }
            if ($move == '<') {
                $x2--;
            }
            if ($move == '^') {
                $y2++;
            }
            if ($move == 'v') {
                $y2--;
            }

            if (!isset($coords[$x2][$y2])) {
                $coords[$x2][$y2] = 1;
            } else {
                $coords[$x2][$y2]++;
            }
        }

        $i++;
    }

    $c = 0;
    foreach ($coords as $value) {
        $c = $c + count($value);
    }

    return $c;
}
