<?php

        $a = 4;
static  $B = 10;
        $c = 4.0;
        $d = 5.667; 

echo "\nDodawanie a + B = " . $a + $B;
echo "\nDzielenie a / B = " . $a / $B;
echo "\na^B = " . pow($a, $B);
echo "\nReszta z dzielenia B/a = " . $B % $a;
echo "\nCzy a ma taką samą wartość jak B* = " . $a == $B;
echo "\n czy wartość a jest większa od B = " . (bool)$a < $B;
echo "\n czy wartość a jest większa od B = " . $a < $B ? "tak" : "nie";