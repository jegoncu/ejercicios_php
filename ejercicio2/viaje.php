<?php
$distancia = $_POST['distancia']; 
$velocidad = $_POST['velocidad']; 
$tiempo = $distancia / $velocidad;
print "El viaje durará " . $tiempo . " horas" ;
?>
