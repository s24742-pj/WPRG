<?php
$mysqli = new mysqli("localhost", "root", "1234", "zad5_2DB");
$id = $_GET['id'];
$query = "SELECT * FROM samochody WHERE id = ?";
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Szczegóły Samochodu</title>
</head>
<body>
    <table>
        <tr>
            <td><a href="index.php">Strona główna</a></td>
            <td><a href="all_cars.php">Wszystkie samochody</a></td>
            <td><a href="add_car.php">Dodaj samochód</a></td>
        </tr>
    </table>

    <h1>Szczegóły Samochodu</h1>
    <p>ID: <?php echo htmlspecialchars($row['id']); ?></p>
    <p>Marka: <?php echo htmlspecialchars($row['marka']); ?></p>
    <p>Model: <?php echo htmlspecialchars($row['model']); ?></p>
    <p>Cena: <?php echo htmlspecialchars($row['cena']); ?></p>
    <p>Rok: <?php echo htmlspecialchars($row['rok']); ?></p>
    <p>Opis: <?php echo htmlspecialchars($row['opis']); ?></p>

    <a href="index.php">Powrót do strony głównej</a>
</body>
</html>
