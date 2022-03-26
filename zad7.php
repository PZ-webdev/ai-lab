<?php

$l = 10;

function rd($l)
{
    $l = rand(0, 51);
    return $l;
}

echo "l = $l, wylosowana liczba to = " . rd($l);