<?php
//strtotime("+1 week");devuelve la cantidad de segundos dentro de una semana
//Definir una cookie
//setcookie("primeracookie","aceptado", strtotime("+1 minute"));
$miarray = [1, "hola",["Buenas tardes"]];
$infoguardar = serialize($miarray);
$infojson = json_encode($miarray);

setcookie("primeracookie",$infoguardar, time() + 60);
setcookie("segundacookie", $infojson , time() + 120);

print "<h1>Mi primera cookie</h1>";
print "Valor de la cookie: " . $_COOKIE["primeracookie"];
print "<br>Valor de la cookie2: ";
print($_COOKIE["segundacookie"]);
print "<br>Numero de cookies creadas: " . count($_COOKIE);
//unset();