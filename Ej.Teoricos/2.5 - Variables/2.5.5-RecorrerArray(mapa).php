<?php
$jugadors_de_lacrosse = array( "Billy Bitter", "Chris Bocklet", "Jeremy Boltus" );
$jugadors_de_pilota_basca = array( "Iñaqui" );
$esports = array();
$esports["Lacrosse"] = $jugadors_de_lacrosse;
$esports["Pilota Basca"] = $jugadors_de_pilota_basca;

foreach( $esports as $esport => $jugadors ) {
    echo "Els meus jugadors preferits de $esport son: ";
    echo "<br>";

    foreach( $jugadors as $nomjugador) {
    	echo " $nomjugador <br>";
	}
    echo "<br>";
}

?>