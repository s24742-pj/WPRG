<!DOCTYPE html>
<html lang="pl">
<head>
 <meta charset="UTF-8">
 <title></title>
</head>
<body>

<?php

$filename = 'link.txt'

if (file_exists($filename)) {
	$lines = $file($filename, FILE_IGNORE_NEW_LINES);
	foreach (lines as $line) {
		list($url, $description) = explode(';', $line);
		echo "<a href=\"$url\">$description</a><br>";
	}
}




?>





</body>