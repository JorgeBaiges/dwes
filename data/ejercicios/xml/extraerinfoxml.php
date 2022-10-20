<?php

$datos = simplexml_load_file("empleados.xml");
if($datos == false){
    print "No se ha podido leer el fichero";
    exit();
}
$apellidos = $datos -> xpath("//apellidos");
print "<br>Recorro el fichero: ";
foreach($apellidos as $elementos){
    print_r("<br>Apellido: " . $elementos);
}
