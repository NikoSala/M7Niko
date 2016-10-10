

<?php
	$mes=date("n");
	$año=date("Y");
	$diaActual=date("j");

	#con esto nos dara 0 si es domingo, y 6 si es sabado
	$diaSemana=date("w",mktime(0,0,0,$mes,1,$año));


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
		border: 1px solid red;
	}
	#calendario  {
			background-color:lightgrey;
			width: 75%;
			height: 150px;
		}
	#calendario .hoy {
			background-color:pink;
		}

	</style>
	<title>Calendario</title>
</head>
<body>
	
<div align=center><h1> CALENDARIO </h1>
	<h1>
		<script type="text/javascript">
				function startTime(){
				today=new Date();
				h=today.getHours();
				m=today.getMinutes();
				s=today.getSeconds();
				m=checkTime(m);
				s=checkTime(s);
				document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
				t=setTimeout('startTime()',500);}
				function checkTime(i)
				{if (i<10) {i="0" + i;}return i;}
				window.onload=function(){startTime();}
			</script>
		<div id="reloj" style="font-size:20px;"></div>
		
	</h1>
</div>
	<h3>Niko Sala ASW2</h3>
	<table id="calendario" style="margin: 0 auto;">
		<div style="text-align: center;">
		<caption><?php echo $meses[$mes]." ".$año?></caption>
		<tr>
			<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
			<th>Vie</th><th>Sab</th><th>Dom</th>
		</tr>
		<tr>

	<?php
		$last_cell=$diaSemana+$ultimoDiaMes;
		// hasta 42 que es el numero maximo es decir 6x7=42
		for($i=1;$i<=35;$i++)
		{
			if($i==$diaSemana)
			{
				// mostramos el dia en el que empezamos
				$dia=1;
			}
			if($i<$diaSemana || $i>=$last_cell)
			{
				// celda vacia
				echo "<td>&nbsp;</td>";
			}else{
				// mostramos el dia
				if($dia==$diaActual)
					echo "<td class='hoy'>$dia</td>";
				else
					echo "<td id='reloj'>$dia</td>";
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