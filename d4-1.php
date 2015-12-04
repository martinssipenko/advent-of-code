<?php

function d4_1($input) {
    $i = 0;
    while (true) {
        if (substr(md5($input.$i), 0, 5) === '00000') {
            return $i;
        }
        $i++;
    }
}
