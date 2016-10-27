<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Comanda IF </title>
</head>
<body>

<div style="margin: 30px 10%;">
<?php
	$v = 3;
	for($i = $v;$i <= 100;$i++){
		if (($i%2) == 0) {
?>
			<ul>
				<li> <?php echo "el numero $i es par";?> </li>
			</ul>
		<?php	
		} else {
		?>
			<ul>
				<li> <?php echo "el nuemo $i es inpar";?> </li>
			</ul>
		<?php 
		}
	}
			 
		?>	
	
</div>
</body>
</html>