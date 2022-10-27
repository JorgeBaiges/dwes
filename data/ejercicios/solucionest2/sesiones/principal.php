<?php

    session_start();
    if(!isset($_SESSION["loginok"])){
        header("Location: index.php");
    }

    print "<h2>Bienvenido usuario : " . $_SESSION["loginok"]["nombreusu"] . "</h2>";
    print "<h3>El valor de tu rol es: " . $_SESSION["loginok"]["rol"] . "</h3>";

    print "<br><br>";
    print "<a href=\"logout.php\">Cerrar Sesion</a>";