<?php
session_start();
$rol = $_SESSION["rol"];
if($rol == 0){
    print "<br>Bienvenido usuario normal";
}
else if($rol == 1){
    print "<br>Bienvenido usuario admin";
}else{
    header("Location : index.php");
}
print "<br><a href='logout.php'>Cerrar Sesion </a>";
