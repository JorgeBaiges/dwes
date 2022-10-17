<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form name="ej3" action="#" method="post">
            <p>
                <label for="nombre">Introduce un nombre: </label>
                <input type="text" name="nombre" id="nombre" required>
            </p>
            <button type="submit" name="envio" id="envio" value="Enviar">Enviar</button>
        </form>
        <?php
            if(!empty($_POST['nombre'])){
                $name = $_POST['nombre'];
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