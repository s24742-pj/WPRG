<?php


$tekst = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
galley of type and scrambled it to make a type specimen book. It has survived not only five
centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
and more recently with desktop publishing software like Aldus PageMaker including versions of
Lorem Ipsum.";


$tablica_tekstu = explode(" ", $tekst);


foreach ($tablica_tekstu as $indeks => $slowo) {
    $interpun = str_replace(['.', ',', '!', '?'], '', $slowo);
    $tablica_tekst[$indeks] = $interpun;
}


$tablica_asocjacyjna = array();
foreach ($tablica_tekst as $indeks => $slowo) {
    if ($indeks % 2 != 0) {
        $klucz = $tablica_tekst[$indeks - 1];
        $tablica_asocjacyjna[$klucz] = $slowo;
    }
}

foreach ($tablica_asocjacyjna as $klucz => $wartosc) {
    echo "$klucz: $wartosc\n";
}

?>