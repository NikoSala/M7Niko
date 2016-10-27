	<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Pizzas</title>
</head>

<body BACKGROUND="fondo1.jpg">
<style type="text/css">
	table {
  border-collapse: separate;
}
</style>
<div style="margin: 30px 10%;">
<h3>Haz tu Pizza</h3>
<form action="#" method="post" id="myform" name="myform">

    <label>Nombre</label> <input type="text" value="" size="30" maxlength="100" name="mytext" id="" /><br /><br />
    <input type="radio" name="myradio" value="1"  /> Masa fina
    <input type="radio" checked="checked" name="myradio" value="2" /> Masa clasica
    <pre><input type="checkbox" name="x[]" value="1" checked="checked" /><strong>Oregano			+0,50€</strong><br /></pre>
    <pre><input type="checkbox" name="x[]" value="2" /><strong>Jamon York			+0,50€</strong><br /></pre>
    <pre><input type="checkbox" name="x[]" value="3" /><strong>Jamos Serrano			+0,50€</strong><br /></pre>
    <pre><input type="checkbox" name="x[]" value="4" /><strong>Bacon				+0,50€</strong><br /></pre>
    <pre><input type="checkbox" name="x[]" value="5" /><strong>Cebolla			+0,50€</strong><br /></pre>
    <pre><input type="checkbox" name="x[]" value="6" /><strong>Cebolla caramelizada		+0,50€</strong><br /></pre>
    <pre><input type="checkbox" name="x[]" value="7" /><strong>Tomate			+0,50€</strong><br /></pre>
    <pre><input type="checkbox" name="x[]" value="8" /><strong>Atun				+0,50€</strong><br /></pre>
    <pre><input type="checkbox" name="x[]" value="9" /><strong>Maiz				+0,50€</strong><br /></pre>
    <pre><input type="checkbox" name="x[]" value="11" /><strong>Pepperoni			+0,50€</strong><br /></pre>
    <pre><input type="checkbox" name="x[]" value="13" /><strong>Pollo a la parrilla		+0,50€</strong><br /></pre>
    <pre><input type="checkbox" name="x[]" value="14" /><strong>Ternera especiada		+0,50€</strong><br /></pre>
    <pre><input type="checkbox" name="x[]" value="16" /><strong>Champiñon			+0,50€</strong><br /><br /></pre>
    <button id="mysubmit" type="submit">Calcular precio</button><br /><br />
</form>
	<?php
		if(isset($_POST['x'])){
			$precio = 5;
			$x = $_POST["x"];
			if(in_array(1,$x)){
				$i = 0;
				foreach($x as $key){
					$precio = $precio + 0.5;
				}
				echo "<strong>El precio de la pizza es : </strong>"."<strong>".$precio."</strong>"."<strong>€</strong>";
			}
			else{
				echo "No has seleccionado Oregano";
			}
		}
		else{
			echo "<strong>(WARNING!) </strong>"."Selecciona ingredientes para tu pizza";
		}
	?>
</div>

</body>
</html>