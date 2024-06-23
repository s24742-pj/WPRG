<?php

session_start();
if ($_SSERVER['REQUEST_METHOD'] === 'POST') {
	$_SESSION['card_number'] = $_POST['card_number'];
	$_SESSION['order_date'] = $_POST['order_date'];
	$_SESSION['people_count'] = $_POST['people_count'];
	header('Location: ludzie.php');
	exit();
	
}


?>


<!DOCTYPE html>
<html>
  <head>
  <title>Dane</title>
  </head>
  <body>
  
  
  <form action="index.php" method="post">
  <label for="card_number">Numer karty</label><br>
  <input type="text" id="card_number" name="card_number" required><br>
  
  <label for="order_date">Data zamówienia</label><br>
  <input type="text" id="order_date" name="order_date" required><br>
  
  <label for="people_count">Liczba ludzi</label><br>
  <input type="text" id="people_count" name="people_count" required><br>
  </form>
  
  
 
  
  
  </body>
  
  
  
 
  
  
  
  
  </html>