<?php

function wypiszLiczbyPierwsze($od, $do) {
    if ($od > $do) {
        echo "Niepoprawny zakres.";
        return;
    }
    for ($i = $od; $i <= $do; $i++) {
        if (czyPierwsza($i)) {
            echo $i . " ";
        }
    }
}

function czyPierwsza($liczba) {
    if ($liczba < 2) {
        return false;
    }

    for ($i = 2; $i < $liczba; $i++) {
        if ($liczba % $i == 0) {
            return false;
        }
    }

    return true;
}
$start = 1;
$stop = 100;

echo "Liczby pierwsze z zakresu " . $start . " do " .$stop . ": ";
wypiszLiczbyPierwsze(1, 100);
echo "\n";

?>
