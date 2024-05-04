<?php


$owoce = array("jabłko", "banan", "arbuz", "pomidor", "gruszka");


foreach ($owoce as $owoc) {
   
    $dlugosc = strlen($owoc);
    
    
    echo "Owoc od tyłu: ";
    for ($i = $dlugosc - 1; $i >= 0; $i--) {
        echo $owoc[$i];
    }
    echo "<br>";
    
    
    if (strtolower($owoc[0]) == 'p') {
        echo "Zaczyna sie od p";
    } else {
        echo "Nie zaczyna się od p";
    }
}

?>