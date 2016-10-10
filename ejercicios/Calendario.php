<?php
	$mes=date("n");
	$año=date("Y");
	$diaActual=date("j");

	#con esto nos dara 0 si es domingo, y 6 si es sabado
	$diaSemana=date("w",mktime(0,0,0,$mes,1,$año))+7;


	# PAra saber cual es el ultimo dia del mes
	$ultimoDiaMes=date("d",(mktime(0,0,0,$mes+1,1,$año)-1));

	$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
?>

<html lang="es">
<head>
	<meta charset="UTF-8">
	<style>
	table, th, td{
		border: 8px solid black;
	}

	</style>
	<title>CalendarioXX</title>
</head>
<body>
	<h1> CALENDARIO YY</h1>
	<table>
		<caption><?php echo $meses[$mes]." ".$año?></caption>
		<tr>
			<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
			<th>Vie</th><th>Sab</th><th>Dom</th>
		</tr>
		<tr>

	<?php
		$last_cell=$diaSemana+$ultimoDiaMes;
		// hasta 42 que es el numero maximo es decir 6x7=42
		for($i=1;$i<=42;$i++)
		{
			if($i==$diaSemana)
			{
				// mostramos el dia en el que empezamos
				$day=1;
			}
			if($i<$diaSemana || $i>=$last_cell)
			{
				// celda vacia
				echo "<td>&nbsp;</td>";
			}else{
				// mostramos el dia
				if($day==$diaActual)
					echo "<td class='hoy'>$day</td>";
				else
					echo "<td>$day</td>";
				$day++;
			}
			// cuando llega al final de la semana, empezamos una columna nueva
			if($i%7==0)
			{
				echo "</tr><tr>\n";
			}
		}
	?>
		</tr>
	</table>
</body>
</html>