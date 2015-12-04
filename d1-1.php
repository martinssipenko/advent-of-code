<?php

function d1_1($input)
{
    return substr_count($input, '(') - substr_count($input, ')');
}
