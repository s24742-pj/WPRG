<?php
 $file = 'licznik.txt';
 if(!file_exists($file)) {
	 file_put_contests($counterFile, '0');
 }
 
 $visit = file_get_contents($file);
 $visit++;
 file_put_contents($file, $visit);
 
 echo "Odwiedzono: $visit razy";


?>