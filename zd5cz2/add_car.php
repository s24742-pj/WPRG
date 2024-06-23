<?php
session_start();
 
 $mysqli = new mysqli("localhost","root","9876","zad5DB");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$marka = $_POST['marka'];
    $model = $_POST['model'];
    $cena = $_POST['cena'];
    $rok = $_POST['rok'];
    $opis = $_POST['opis'];
	
	$query = "INSERT INTO samochody (marka, model, cena, rok, opis) VALUES (?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('ssdiss', $marka, $model, $cena, $rok, $opis);
    $stmt->execute();
    $stmt->close();
    $mysqli->close();

    header('Location: all_cars.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dodaj Samochód</title>
</head>
<body>
    <table>
        <tr>
            <td><a href="index.php">Strona główna</a></td>
            <td><a href="all_cars.php">Wszystkie samochody</a></td>
            <td><a href="add_car.php">Dodaj samochód</a></td>
        </tr>
    </table>

    <h1>Dodaj Samochód</h1>
    <form action="add_car.php" method="post">
        <label for="marka">Marka:</label>
        <input type="text" id="marka" name="marka" required><br>

        <label for="model">Model:</label>
        <input type="text" id="model" name="model" required><br>

        <label for="cena">Cena:</label>
        <input type="number" step="0.01" id="cena" name="cena" required><br>

        <label for="rok">Rok:</label>
        <input type="number" id="rok" name="rok" required><br>

        <label for="opis">Opis:</label>
        <textarea id="opis" name="opis"></textarea><br>

        <input type="submit" value="Dodaj">
    </form>
</body>
</html>