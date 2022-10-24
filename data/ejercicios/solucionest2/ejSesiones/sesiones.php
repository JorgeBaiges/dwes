<?php
/*Crear entorno de login.
    - LA pagina de login : usuario y password
        - usuario = usuario
          password = 1234 => ok , rol = 0
        
        - usuario = admin
          password = 4567 => ok , rol = 1

        - si no => muestre mensaje de login erroneo
    - Si login ok => principal.php , Bienvenido usuario
        - Enlace a logout.php
*/
$password = "";
$usuario = "";
if(!isset($_POST['enviar'])){
    if(!empty($_POST['usu'])){
      $usuario = $_POST['usu'];
    }
    if(!empty($_POST['pass'])){
      $password = $_POST['pass'];
    }
    print "El usuario es: " . $usuario . " la contraseña es " . $password;
}