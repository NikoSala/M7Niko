<?php
	$mesActual=date("m");//mes actual
	$añoActual=date("Y");//año actual
	$diaActual=date("d");//dia actual

	#con esto nos dara 0 si es domingo, y 6 si es sabado
	$diaSemana=date("w",mktime(0,0,0,$mesActual,1,$añoActual));

	# ara saber cual es el ultimo dia del mes
	$ultimoDiaMes=date("d",(mktime(0,0,0,$mesActual+1,1,$añoActual)-1));

	$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
?>

<html lang="es">
<head>

	<meta charset="UTF-8">
	<style>
	table{
		border: 2px solid black;
	}
	th, td{
		border: 1px solid red;
		text-align: center;
	}
	caption{
		border: 2px solid black;
		background-color: lightblue;
	}
	#calendario  {
			background-color:lightgrey;
			width: 80%;
			height: 160px;
		}
	#calendario .hoy {
			background-color:grey;
			border: 3px solid red
		}
	</style>
	<title>Calendario-NikoSala</title>
</head>
<body>
	<div align=center>
		<h1> CALENDARIO </h1>
	</div>

	<table id="calendario" style="margin: 0 auto;">
		<div style="text-align: center;">
		<caption><?php echo $meses[$mesActual]."-".$añoActual?></caption>
		<tr>
			<th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th><th>Sabado</th><th>Domingo</th>
		</tr>
		<tr>

	<?php
	$ulitmacelda=$diaSemana+$ultimoDiaMes;

		//ponemo hasta 42 para rellenar todo el calendario de cuadraditos aunque esten vacios
		for($i=1;$i<=42;$i++)
		{
			if($i==$diaSemana)
			{
				// mostramos el dia en el que empezamos
				 $dia=1;		
			}
			if($i<$diaSemana || $i>=$ulitmacelda)
			{
				// celda vacia
				echo "<td>&nbsp;</td>";
			}else{
				// mostramos el dia
				if($dia==$diaActual)
					echo "<td class='hoy'>$dia</td>";
				else
					echo "<td>$dia</td>";
				$dia++;
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
	</div>
</body>
</html>