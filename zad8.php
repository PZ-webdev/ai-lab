<?php

function step_five()
{
    for ($i = 0; $i < 101; $i = $i + 5) {
        if ($i % 7 == 0)
            echo "$i, ";
    }
}

step_five();
