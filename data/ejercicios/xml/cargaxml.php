<?php
$datos = simplexml_load_file("empleados.xml");
if($datos == false){
    print "No se ha podido leer el fichero";
    exit();
}
print "<br>Recorro el fichero: ";
foreach($datos as $elementos){
    print_r($elementos);
}