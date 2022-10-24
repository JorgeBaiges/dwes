<?php
if(isset($_POST["envio"])){
    if (!empty($_POST['idioma']) && !isset($_COOKIE['idioma'])) {
        $idioma = $_POST['idioma'];
        setcookie("idioma",$idioma, time() + 60);

    }
    if(!empty($_POST['marca']) && !isset($_COOKIE['marca'])){
        $marca = $_POST['marca'];
        setcookie("marca",$marca, time() + 60);
    }
}
    //Redireccion
    if(!empty($_POST['idioma']) && !empty($_POST['marca'])){
        header('Location: datos.php');
        exit();
    }


    
