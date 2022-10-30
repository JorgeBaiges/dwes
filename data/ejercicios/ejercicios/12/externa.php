<?php

if(isset($_POST['envio'])){

    if(!empty($_POST['nombre'])){
        $name = $_POST['nombre'];
        print "Buenos dias " . $name;
    }else{
        print "No ha puesto Nombre<br>";
        print "<a href='/ejercicios/12.php'>Vuelve al formulario</a>";
    }

    

}