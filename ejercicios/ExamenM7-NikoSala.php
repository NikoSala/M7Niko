<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Batalla Naval</title>
	<style>
		table{
			border: solid 3px;
			margin-left: 30%;
			margin-top: 2%;
		}
		td{
			border: solid 2px;
			width: 50px;
			height: 50px;
		}
		.lateral{
			background-color: green;

		}
		.lateralblanco{
			background-color: green;

		}
		.filas{
			margin-left: 50%;
			
		}
		.columnas{
			float: left;
			margin-right: 50%;
		}
		input{
			width: 46px;
			height: 46px;
		}
		p{
			margin-left: -80%;

		}
	</style>
</head>
<body>
<div style="text-align: center;">
<form action="?" method="post">
<div>

<table>

	<?php
	$arrayletras = array(1=> "A", "B", "C", "D", "E", "F", "G", "H");

		for($i=1;$i<=8;$i++){
			echo "<tr>";
			echo "<td class = lateral>".$arrayletras[$i]."</td>";
			for($j=1;$j<=8;$j++){
				if($i==5 && $j==3 ){
					echo "<td bgcolor='lightblue'>X</td>";
				}else if($i==1 && $j==7){
					echo "<td bgcolor='lightblue'>X</td>";
				}else if($i==7 && $j==8){
					echo "<td bgcolor='lightblue'>X</td>";
				}else if($i==2 && $j==3){
					echo "<td bgcolor='lightblue'>X</td>";
				}else{
					echo"<td bgcolor='brown'><input type=checkbox name=x value=~></td>";
				}
			}
			echo "</tr>";
			}
			

	  for($h=1;$h<=8;$h++){
			if($h==1){
				echo "<td class = lateralblanco>&nbsp;</td>";
			}
			echo "<td class = lateral>".($h)."</td>";
		}

	?>	
</table>
<a href="?reset=1">¿Otra partida?</a>
</div>
<INPUT type="submit" value="Next"/>	
</div>
</form>
</body>
</html>