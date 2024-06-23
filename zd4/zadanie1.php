<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Odwracanie kolejności wierszy w pliku</title>
</head>
<body>
    <h1>Odwracanie kolejności wierszy w pliku tekstowym</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
        $file = $_FILES['file']['tmp_name'];

        if (is_uploaded_file($file)) {
            $lines = file($file, FILE_IGNORE_NEW_LINES);
            if ($lines === false) {
                echo "Błąd odczytu pliku.";
                exit;
            }

            $reversedLines = array_reverse($lines);

            $outputFile = 'reversed_' . basename($_FILES['file']['name']);
            if (file_put_contents($outputFile, implode(PHP_EOL, $reversedLines)) === false) {
                echo "Błąd zapisu pliku.";
                exit;
            }

            echo "Plik został pomyślnie przetworzony. <a href=\"$outputFile\">Pobierz odwrócony plik</a>";
        } else {
            echo "Niepoprawny plik.";
        }
    } else {
    ?>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="file">Wybierz plik tekstowy:</label>
            <input type="file" name="file" id="file" accept=".txt" required>
            <input type="submit" value="Odwróć kolejność wierszy">
        </form>
    <?php
    }
    ?>
</body>
</html>
