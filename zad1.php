<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
	
	<form action="" method="GET">
	Dzien: <input type="text" name="dzien" /><br/>
	Miesiac: <input type="text" name= "miesiac" /><br/>
	Rok: <input type="text" name = "rok" /><br/>
	<input type="submit" value="OK" /><br/>
	</form>
	
	
	<?php
	function dzien_tygodnia ($data)
	{
		echo date("1", mktime (0,0,0, $data ['miesiac'],
		$data ['dzien'], $data ['rok']));
	}
	
	
	
	
	
	
	
	
	
	
	?>
	
	
	
	
	
	
	
	
	
	</body>
	</html>