<?php

function ctf(float $c = null)
{
    if ($c == null)
        return "Nie podano wartości";

    $F = ($c * 9 / 5) + 32;

    return "Temperatura w Fahrenheitach wynosi = " . $F;
}

echo ctf(45.7);
