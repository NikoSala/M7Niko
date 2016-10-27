<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Comanda IF salto de linea </title>
</head>
<body>

<div style="margin: 30px 10%;">
<?php
	for($i = 1;$i <= 1000;$i++){
		?> <br><?php echo "$i- Me gusta programar en PHP";
		if (($i%50) == 0) 
			{
				echo "<br><br>";
			}
			
			
	}
			 
?>
</div>
</body>
</html>