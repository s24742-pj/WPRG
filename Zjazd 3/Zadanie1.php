<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz daty urodzenia</title>
</head>
<body>
    <h2>Podaj datę urodzenia:</h2>
    <form action="" method="GET">
        <label for="data_urodzenia">Data urodzenia:</label>
        <input type="date" id="data_urodzenia" name="data_urodzenia">
        <button type="submit">Sprawdź</button>
    </form>

    <?php
    if(isset($_GET['data_urodzenia'])) {
        
        $data_urodzenia = $_GET['data_urodzenia'];
        
        
        $dzien_tygodnia = date('l', strtotime($data_urodzenia));
        
       
        $dzisiaj = new DateTime();
        $urodziny = new DateTime($data_urodzenia);
        $ilosc_lat = $dzisiaj->diff($urodziny)->y;
        
       
        $nastepne_urodziny = new DateTime($urodziny->format('Y-m-d'));
        $nastepne_urodziny->modify('+' . ($ilosc_lat + 1) . ' years');
        $dni_do_urodzin = $dzisiaj->diff($nastepne_urodziny)->days;
        
        
        echo "<h3>Podsumowanie:</h3>";
        echo "<p>Urodziłeś się w dniu: $dzien_tygodnia</p>";
        echo "<p>Ukończyłeś $ilosc_lat lat</p>";
        echo "<p>Do urodziń zostało $dni_do_urodzin dni</p>";
    }
    ?>
</body>
</html>