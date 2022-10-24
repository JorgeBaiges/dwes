<?php

switch($_COOKIE['idioma']){

    case "espanol":
        print "<br><h1>Bienvenido querido usuario.</h1>";
        print "<br>TU marca favorita es: " . $_COOKIE['marca'];
        break;

    case "ingles":
        print "<br><h1>Welcome Dear User.</h1>";
        print "<br>Your favourite brand is: " . $_COOKIE['marca'];
        break;

    case "aleman":
        print "<br><h1>Willkommen Sehr geehrter Nutzer.</h1>";
        print "<br>Ihre Lieblingsmarke ist: " . $_COOKIE['marca'];
        break;

        default:
            print "<h1>Bienvenido querido usuario.(Pagina Default)</h1>";
            print "<br>TU marca favorita es: " . $_COOKIE['marca'];
            break;
}