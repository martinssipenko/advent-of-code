<?php

function d4_2($input) {
    $i = 0;
    while (true) {
        if (substr(md5($input.$i), 0, 6) === '000000') {
            return $i;
        }
        $i++;
    }
}
