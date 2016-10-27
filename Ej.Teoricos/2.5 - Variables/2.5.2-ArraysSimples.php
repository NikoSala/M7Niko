<?php
// creo un array amb 3 elements
$a = array( 5, 7, 4);
var_dump( $a );
echo "<br>";
	$b = gettype($a);
	echo $b."<br>";
//dos modos para agregar més elements a l'array
$a[] = 13; //1 modo 
$a[] = 17;
print_r( $a );
echo "<br>";


array_push ($a, 82); //2 modo
print_r( $a );
echo "<br>";

//pinto elements de l'array
echo "El valor de del tercer element de l'array és " . $a[2];
echo "<br>";

unset($a[0]); 
unset($a[1]); // el valor 7 seguia a la possició 1
var_dump( $a );
echo "<br>";
?>