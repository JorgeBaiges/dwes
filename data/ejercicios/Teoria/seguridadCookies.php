<?php
    //Crear o unirse a una sesion.
    session_start();
    //Crear variable de tipo sesion
    if(!isset($_SESSION['contador'])){
        $_SESSION['contador'] = 0;
    }else{
        $_SESSION['contador']++;
        
    }
    print "He visitado la pagina "  . $_SESSION['contador'] . " veces";

    print "<br><a href=\"sesion2.php\">Sesion2</a>";