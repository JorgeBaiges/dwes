<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 13</title>
    </head>

    <body>
        <h1>Ejercicio 13</h1>
        <form name="ej3" action="#" method="post">
            <p>
                <label for="nombre">Introduce un nombre: </label>
                <input type="text" name="nombre" id="nombre" value="<?php $_POST["nombre"]; ?>">
            </p>
            <button type="submit" name="envio" id="envio" value="Enviar">Enviar</button>
        </form>
        <?php
        /*
         * @author <Jorge Baiges Ruiz>
         * @param String name
         * @param int strlen($name) 
         */
            if(!empty($_POST['nombre'])){
                $name = $_POST['nombre'];
                /*strlen sirve para sacar la longitud de una cadena*/
                $str = strlen($name);
                if($str >= 3){
                    print "Buenos dias " . $name;
                }else{
                    print "El nombre no mide mas de tres caracteres";
                }
            }else{
                print "Pon un nombre";
            }
        ?>
    </body>
</html>