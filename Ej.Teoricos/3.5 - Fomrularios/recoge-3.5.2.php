<?php
	print_r( $_REQUEST);
	echo "<br> El numero es: ".$_REQUEST["n"];
	$primo = 0;
	for($b = 1;$b < $_REQUEST["n"]; $b++){
        if($_REQUEST["n"] % $b == 0){
            $primo++;
        }
    }
    if($primo >= 2 ){
        echo " No es primo";
        for($i=1;$i<=$_REQUEST["n"];$i++){
            if($_REQUEST["n"]%$i==0){
            echo "<br>$i, es divisor ";
            }
        }
    } else {
        echo " Es primo";
    }

?>
