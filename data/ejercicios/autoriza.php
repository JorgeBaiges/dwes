<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <h1>Pagina de chequeo de credenciales: </h1>
        <?php
        if(isset($_POST['envio'])){

            if(!empty($_POST['nombreusu'])){

                $usuario = $_POST['nombreusu'];
                print "<br>El nombre del usuario introducido es: " . $usuario;
        
            }else{
                print "<br>No ha introduzido Usuario";
        
            }
        
            if(!empty($_POST['passwd'])){
        
                $password = $_POST['passwd'];
                print "<br>La contraseña es: " . $password;
            }else{
        
                print "<br>No ha introducido contraseña";
            }

            //Recodiga de valores checkBox
            if(!empty($_POST['asig'])){
                $contador = 0;
                $asignatura = $_POST['asig'];
                foreach($asignatura as $elmento){
                    $contador++;
                    print "<br>Asignatura " . $contador . ": " . $elmento;

                }

            } else{

                print "<br>No te gusta programar";

            }
            //MENU PARA ELEGIR
            if(!empty($_POST['equipo'])){
                
                $equipo = $_POST['equipo'];
                print "<br>Mi equipo favorito es: " . $equipo;

            }else{

                print "<br>No tienes equipo favorito";

            }

            if(!empty($_POST['menus'])){
                
                $comida = $_POST['menus'];
                print "<br>Mi comida favorita es: " . $comida;

            }else{

                print "<br>No sabes comer";

            }

            //MENU CON VARIAS OPCIONES
            if(!empty($_POST['menuses'])){
                $conteo = 0;
                $menusPreferido = $_POST['menuses'];

                if(!empty($menusPreferido)){
                    print "<br>El menu del dia es: ";
                    foreach($menusPreferido as $menu1){
                        $conteo++;
                        print "<br> ". $conteo . ": " . $menu1;
                        

                    }
                }

            }else{

                print "<br>No sabes comer";
            }
        }

        ?>

    </body>
</html>