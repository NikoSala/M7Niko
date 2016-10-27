<?php
$i = 12; #integer
$stri = "Niko"; #string
$floatt = 3.1; #float
$bolean = True; #boolean
$tipus_de_i = gettype( $i );
echo "Me llamo: "."$stri"."\n";
echo "Numero: "."$floatt"."\n";
echo "Boleano: "."$bolean"."\n";
echo "La variable \$i 
      conté ell valor $i 
      i és del tipus $tipus_de_i";
$tipo = gettype($tipus_de_i);
echo "\n";
echo "La variable \$tipo 
      conté ell valor $tipo 
      i és del tipus $tipus_de_i";
?>
