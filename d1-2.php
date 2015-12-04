<?php

function d1_2($input) {
    $split = str_split($input);

    $floor = 0;

    foreach ($split as $key => $value) {
        if ($value === '(') {
            $floor++;
        }

        if ($value === ')') {
            $floor--;
        }

        if ($floor == '-1') {
            return $key+1;
        }
    }
}
