<?php

$people = array(
    'Jan' => 45,
    'Bartosz' => 38,
    'Piotr' => 40,
);

foreach ($people as $years => $person) {
    echo "$years ma $person lat\n";
}

echo "\nLiczba elementów: " . count($people);

echo "\nWiek pana Bartosza: " . $people['Bartosz'] . "\n";

$people += ['Witold' => 28];

array_pop($people);

asort($people);

foreach ($people as $years => $person) {
    echo "$years ma $person lat\n";
}
