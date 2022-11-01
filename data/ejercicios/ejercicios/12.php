<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>

<body>
    <form action="#" method="post">
        <h1>Ejercicio 12</h1>
        <p>
            <label for="nombre">Introduce un nombre: </label>
            <input type="text" name="nombre" id="nombre">
        </p>
        <br>
        <button type="submit" name="envio" id="envio" value="Enviar">Enviar</button>
    <?php
    /*
     * @author <Jorge Baiges Ruiz>
     * @param  name(Recoge el dato del formulario)
     */
    if(isset($_POST['envio'])){

        if(!empty($_POST['nombre'])){
            $name = $_POST['nombre'];
            print "<br>Buenos dias " . $name;
        }else{
            /*
            * Si no ha puesto nombre valido le pedira que lo ponga 
            */
            print "<br>No ha puesto Nombre";
        }
    }
    ?>
    </form>
</body>

</html>