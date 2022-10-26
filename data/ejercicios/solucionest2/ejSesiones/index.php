<?php
function comprobarcredenciales($nombreusu, $clave){

    if($nombreusu == "usuario" && $clave == "1234"){
        $credenciales["nombreusu"] = "usuario";
        $credenciales["rol"] = 0;
        return $credenciales;
    }
    if($nombreusu == "admin" && $clave == "4567"){
        $credenciales["nombreusu"] = "admin";
        $credenciales["rol"] = 1;
        return $credenciales;
    }
    return false;
}

if($_SERVER["REQUEST_METHOD"] === "POST") {
    if(isset($_POST["envio"])){
        $credentials = comprobarcredenciales($_POST["usuario"], $_POST["password"]);
        if($credentials === false){
            $error = 1;
        }else{
            session_start();
            $_SESSION["loginok"] = $credentials;
            header("Location : principal.php");
        }
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
</head>
<body>
    <h2>Pagina de acceso</h2>
    <form action="#" method="POST">
        <br>
        <label for="nombre">Introduce el usuario</label>
        <input type="text" name="usuario" id="usuario">
        <br>
        <label for="password">Introduce una contraseña</label>
        <input type="password" name="password" id="password">
        <br>
        <input type = "submit" name="envio" value= "Acceder">
    </form>
</body>
</html>