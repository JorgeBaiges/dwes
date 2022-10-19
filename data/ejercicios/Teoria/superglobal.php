<?php


    $mihost = $_SERVER['HTTP_HOST'];
    $miLeng = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    $miPagina = $_SERVER['REQUEST_URI'];
    $miNavegador = $_SERVER['HTTP_USER_AGENT'];

    print "Mi host es " . $mihost;
    print "<br>Mi lenguaje es " . $miLeng;
    print "<br>La pagina actual es " . $miPagina;
    print "<br> EL navegador es " . $miNavegador;

    /*Mostrar
    - El nombre del servidor web.
    - Mostrar el lenguaje.
    - Mostrar el nombre de la pagina actual de solicitud
    - El tipo de avegador que realiza la peticion
    

    */
