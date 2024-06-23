<?php
session_start();
if (!isset($SESSION['people_count'])) {
	header('Location: index.php');
	exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	for ($i = 1; $i <= $_SESSION['people_count']; $i++) {
		$_SESSION['persosn_' . $i] = $_POST['person_' . $i];
	}
	header('Location: podsumowanie.php');
	exit();
}
?>


<!DOCTYPE html>
<html lang="pl">
<head>
<title></title>
</head>
<body>
 <h1>Dane osob</h1>
 <form action="ludzie.php" method="post">
  <?php for ($i = 1; $i <= $ilosc_osob; $i++): ?>
            <h2>Osoba <?php echo $i; ?></h2>
            <label for="osoba_<?php echo $i; ?>_imie">Imie i nazwisko:</label>
            <input type="text" id="osoba_<?php echo $i; ?>_imie" name="osoby[<?php echo $i; ?>][imie]" required><br>
            
            <label for="osoba_<?php echo $i; ?>_wiek">Wiek:</label>
            <input type="number" id="osoba_<?php echo $i; ?>_wiek" name="osoby[<?php echo $i; ?>][wiek]" required><br>
        <?php endfor; ?>
        
        <input type="submit" value="Dalej">
    </form>
</body>
</html>

</body>











?>