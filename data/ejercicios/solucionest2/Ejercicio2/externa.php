<?php

if(isset($_POST['envio'])){

    if(!empty($_POST['nombre'])){
        $name = $_POST['nombre'];
        print "Buenos dias " . $name;
    }else{
        print "Tira a poner un nombre";
    }

    print "<br><a href='/solucionest2/Ejercicio2/main.html'>Vuelve al formulario</a>";

}