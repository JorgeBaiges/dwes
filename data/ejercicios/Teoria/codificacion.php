<?php

$capitales = [
    "españa" => "madrid",
    "francia" => "paris"
];
$infotrans = "";
$infonotrans = "";
$infotrans = serialize($capitales);
print "<br>Informacion serializada: ";
var_dump($infotrans);

$infonotrans = unserialize($infotrans);
print "<br>Informacion DESerializada: ";
var_dump($infonotrans);

