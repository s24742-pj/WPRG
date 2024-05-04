<?php

 

function fib($n) {
    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    
    return $fibonacci;
}

function Nieparzyste($tablica) {
    foreach ($tablica as $indeks => $element) {
        if ($element % 2 != 0) {
            echo "[$indeks] $element\n";
        }
    }
}

$N = 10; 

$ciag_fibonacci = fib($N);
echo "Nieparzyste elementy ciągu Fibonacciego do $N:";
Nieparzyste($ciag_fibonacci);

?>