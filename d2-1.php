<?php

function d2_1($input) {
    $gifts = explode("\n", $input);

    $sum = 0;

    foreach ($gifts as $gift) {
        list($l, $w, $h) = explode('x', $gift);

        $s1 = $l*$w;
        $s2 = $w*$h;
        $s3 = $h*$l;

        $min = min($s1, $s2, $s3);
        $area = 2*$s1 + 2*$s2 + 2*$s3 + $min;

        $sum = $sum + $area;
    }

    return $sum;
}
