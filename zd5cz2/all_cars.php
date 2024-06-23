<?php
session_start();
 
 $mysqli = new mysqli("localhost","root","9876","zad5DB");
 $query = "SELECT * FROM samochody ORDER BY cena ASC LIMIT 5";
 $result = $mysqli->query($query);

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>
 </head>
<body>
<table>
  <tr>
  <td><a href="index.php">Strona główna</td>
  <td><a href="all_cars.php">Wszystkie samochody</td>
  <td><a href="add_car.php">Dodaj samochód</td>
  </tr>
</table>

<h1>Wszystkie samochody</h1>
<table border ="1">
 <tr>
  <th>ID</th>
  <th>Marka</th>
  <th>Model</th>
  <th>Cena</th>
  <th>Szczegoly</th>
 </tr>
 
   <?php while ($row = $result->fetch_assoc()): ?>
   
   <tr>
 <td><?php echo htmlspecialchars($row['id']); ?></td>
 <td><?php echo htmlspecialchars($row['marka']); ?></td>
 <td><?php echo htmlspecialchars($row['model']); ?></td>
 <td><?php echo htmlspecialchars($row['cena']); ?></td>
 <td><a href="car_details.php?id=<?php echo $row['id']; ?>">Szczegóły</a></td>
 </tr>
<?php endwhile; ?>
</table>

</body>
</html>