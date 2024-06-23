<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title></title>
</head>

<body>

 <form action= "" method="post" enctype="multipart/form-data">
    <label for="file"> Plik tekstowy do odwrócenia: </label>
	<input type="file" name="file" id="file" accept=".txt" required>
	<input type="submit" value="Odwroc Kolejnosc">
 </form>
 
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
     $file = $_FILES['file']['tmp_name'];
     $lines = file($file);
     $reverse = array_reverse($lines);
     $newFile = 'odwrocone.txt';
     file_put_contents($newFile, implode("", $lines));
     echo "Pomyślnie odwrócono";	 
 
 
 
 
 }
?>





























</body>
</html>