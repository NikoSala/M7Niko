<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>css</title>
	<h1>Nico</h1>
	<p>El perro o perro doméstico o también llamado can, es un mamífero carnívoro de la familia de los cánidos, que constituye una subespecie del lobo</p>

	<FORM action='skins.php' method='post'>
	<SELECT name="estilo">

	<?php
		$dir = opendir("css");
		$archivo = readdir($dir);
		
			while( $archivo!==false )
			{
				if($archivo!='..' && $archivo!= '.'){
				echo '<OPTION value="'.$archivo.'">'.$archivo.'</option>';
			}
				$archivo = readdir($dir);

			}
		
		closedir($dir);
 	?>
 	</SELECT>
	<BR />
	<INPUT type="submit" value="Actualizar el estilo" />
	<ol>
	<?php
		if(isset($_POST["estilo"])){
			$estilo = $_POST["estilo"];
		}
		if (isset($estilo)){
   			echo '<link rel="STYLESHEET" type="text/css" href="css/' . $estilo . '">';
		}
		
	?>
</ol>
</FORM>
</head>
<body>

</FORM>
</body>
</html>