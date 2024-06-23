<?php
session_start();
 if (!isset($_SESSSION['card_number']} || !isset($_SESSION['people_count'])){
	 header('Location: index.php');
	 exit();
 }
 ?>
 
 
 <!DOCTYPE html>
 <html>
 <head>
 <title></title>
 </head>
 <body>
  <h1>Podsumowanie</h1>
  Nr karty: <?php echo htmlspecialchars($_SESSION['card_number']); ?><br>
  Dane zamawiającego: <?php echo htmlspecialchars($_SESSION['order_data']); ?><br>
  Ilość osób: <?php echo htmlspecialchars($_SESSION['people_count']); ?><br>
  
  
    <h2>Dane Osób</h2>
    <?php for ($i = 1; $i <= (int)$_SESSION['people_count']; $i++): ?>
        <h3>Osoba <?php echo $i; ?></h3>
        <p>Imię: <?php echo htmlspecialchars($_SESSION['person_' . $i]); ?></p>
        <p>Wiek: <?php echo htmlspecialchars($_SESSION['person_' . $i]); ?></p>
    <?php endfor; ?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 </body>
 </html>

























?>