<?php
	session_start();
	if(!isset($_SESSION['torre'])){
		$_SESSION['torre'][0] = 8; //fila
	    $_SESSION['torre'][1] = 8; //columna
	}

	if(isset($_GET['reset'])){
 		   session_destroy();
		   session_start();
	       $_SESSION['torre'][0] = 8; //fila
	       $_SESSION['torre'][1] = 8; //columna
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AJEDREZ</title>
	<style>
		table{
			border: solid 3px;
			margin-left: 30%;
			margin-top: -9%;
		}
		td{
			border: solid 2px;
			width: 50px;
			height: 50px;
		}
		.lateral{
			background-color: pink;

		}
		.lateralblanco{
			background-color: pink;

		}
		.filas{
			margin-left: 50%;
			
		}
		.columnas{
			float: left;
			margin-right: 50%;
		}
		input{
			margin-left: 50%;
			float: right;
		}
		p{
			margin-left: -80%;

		}
	</style>
</head>
<body>
<div style="text-align: center;">
<form action="?" method="post">
<div class=filas>
 <h4>Filas</h4>
   <select name="filas">    
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
	   <option value="6">6</option>
       <option value="7">7</option>
       <option value="8">8</option>
   </select>
 

   <h4>Columnas</h4>
   <select name="columnas">    
       <option value="1">A</option>
       <option value="2">B</option>
       <option value="3">C</option>
       <option value="4">D</option>
       <option value="5">E</option>
	   <option value="6">F</option>
       <option value="7">G</option>
       <option value="8">H</option>
   </select>
</div>

<div>

<table>

	<?php
	$arrayletras = array(1=> "A", "B", "C", "D", "E", "F", "G", "H");

	if(isset($_POST)){
		if(isset($_POST["filas"])){
				if(($_POST["filas"]) == ($_SESSION['torre'][0])){
					if(($_POST["columnas"]) != ($_SESSION['torre'][1])){
							
							$_SESSION['torre'][0] = $_POST["filas"];
							$_SESSION['torre'][1] = $_POST["columnas"];
					}else
						echo "<p>Mueve ficha</p>";

				}else{
					if(($_POST["columnas"]) != ($_SESSION['torre'][1])){
						echo "<p>La torre no se puede mover asi</p>";
					}else{
						
						$_SESSION['torre'][0] = $_POST["filas"];
						$_SESSION['torre'][1] = $_POST["columnas"];

					}
				}
		}
}

		


	$f = $_SESSION['torre'][0];//fila
	$c = $_SESSION['torre'][1];//columna
		for($i=1;$i<=8;$i++){
			echo "<tr>";
			echo "<td class = lateral>".($i)."</td>";
			for($j=1;$j<=8;$j++){
				if($i==$f && $j==$c){
					if(($j+$i)%2 == 0){
						echo "<td bgcolor='brown'><img src=torre.png width=46 height=46</td>";
					}else{
						echo "<td bgcolor='grey'><img src=torre.png width=46 height=46</td>";
					}
				}
				else if(($j+$i)%2 == 0){
					echo "<td bgcolor='brown'>&nbsp;</td>";
				}else{
					echo "<td bgcolor='grey'>&nbsp;</td>";
				}
			}
		}
		echo "</tr>";
		for($h=1;$h<=8;$h++){
			if($h==1){
				echo "<td class = lateralblanco>&nbsp;</td>";
			}
			echo "<td class = lateral>".$arrayletras[$h]."</td>";
		}

		echo "<p> Posicion actual: ".$_SESSION['torre'][0]."-".$arrayletras[$_SESSION['torre'][1]]."</p>";
	?>	
</table>
</div>
<a href="?reset=1">¿Otra partida?</a>
<INPUT type="submit" value="Siguiente movimiento"/>
</div>
</form>
</body>
</html>