<?php

$fruits = array(
    1 => 'banana',
    2 => 'apple',
    3 => 'strawberry',
    4 => 'grape',
    5 => 'orange',
    6 => 'watermelon',
    7 => 'blueberry',
);

echo "Ilość elementów w tablicy: " . count($fruits);

echo "\nZawartość tablicy: ";
foreach ($fruits as $key => $fruit) {
    echo "$fruit \n";
}

echo "Dodaje lemon" . array_push($fruits, 'lemon');

echo "Usuwam ostatni element listy: " . array_pop($fruits) . "\n";

asort($fruits);

foreach ($fruits as $key => $fruit) {
    echo "$fruit, ";
}
