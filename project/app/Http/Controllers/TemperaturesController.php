<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class TemperaturesController extends Controller
{
    public function ctf($c)
    {
        $f = 32 + ($c * 9 / 5);

        return "Temperatura w Fahrenheita wynosi: $f";
    }

    public function ftc($f)
    {
        $c = 5/6 * (32 - $f);

        return "Temperatura w Celcjuszach wynosi: $c";
    }
}
