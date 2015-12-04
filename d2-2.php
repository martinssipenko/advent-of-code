<?php

function d2_2($input) {
    $gifts = explode("\n", $input);

    $sum = 0;

    foreach ($gifts as $gift) {
        list($l, $w, $h) = explode('x', $gift);

        $ribbon = ($l + $w + $h - max($l, $w, $h)) * 2;
        $bow = $l * $w * $h;

        $sum = $sum + $ribbon + $bow;
    }

    return $sum;
}
