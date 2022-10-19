<?php
include_once "Asignatura.php";
include_once "Modulo.php";
$bbdd = new Asignatura("BASE DE DATOS", 8);
$dwes = new Modulo("Programacion", 7, 2022);
Asignatura::setCiclo("DAM");

print "<br><b>Se ha creado la asignatura:</b> " . $bbdd;
print "<br>BBDD pertenece al ciclo " . Asignatura::getCiclo();
print "<hr>";
print "<br><b>Se ha creado el modulo:</b> " . $dwes;
Modulo::setCiclo("DAW");
print "<br> DWES pertenece al ciclo " . Modulo::getCiclo();