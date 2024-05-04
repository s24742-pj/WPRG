<?php

function CzyLiczbaPierwsza($liczba) {
    if ($liczba <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($liczba); $i++) {
        if ($liczba % $i == 0) {
            return false;
        }
    }
    return true;
}

function LiczbyPierwsze($start, $koniec) {
    for ($liczba = $start; $liczba <= $koniec; $liczba++) {
        if (CzyLiczbaPierwsza($liczba)) {
            echo $liczba . " ";
        }
    }
}

$start = 1; 
$koniec = 100; 

echo "$start - $koniec liczby pierwsze z tego przedziału :";
LiczbyPierwsze($start, $koniec);

?>
