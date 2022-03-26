<?php

$n = 3.5;
$note = "";

switch ((int)$n) {
    case 1:
        $note = "Niedostateczny";
        break;
    case 2:
        $note = "Dopuszczający";
        break;
    case 3.0:
        $note = "Dostateczny";
        break;
    case 4:
        $note = "Dobry";
        break;
    case 5:
        $note = "Bardzo Dobry";
        break;
    default:
        $note = "";
        break;
}

$note_match = match((int)$n){
    1 => 'Niedostateczny',
    2 => 'Dopszczający',
    3 => 'Dostateczny',
    4 => 'Dobry',
    5 => 'Bardzo dobry'
};

echo "\n\nOcena: " . $note;
echo "\nOcena (match): " . $note_match;
