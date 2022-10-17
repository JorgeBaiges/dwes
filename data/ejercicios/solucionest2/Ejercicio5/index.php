<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>
<body>
    <h1>FORMULARIO ENVIO ARRAYS</h1>
    <form action="#" method="post">

    <label for="nombre1">Nombre 1: </label>
    <input type="text" name="nombres[]" id="nombres">
    <br><br>
    <label for="nombre2">Nombre 2: </label>
    <input type="text" name="nombres[]" id="nombres">
    <br><br>
    <label for="nombre3">Nombre 3: </label>
    <input type="text" name="nombres[]" id="nombres">
    <br><br>
    <button type="submit" name="envio" id="envio" value="Enviar">Enviar</button>
    </form>

    <?php

        if(isset($_POST['envio'])){
            if (!empty($_POST['nombres'])) {
                $conteo = 0;
                $nombresarray = $_POST['nombres'];
                if (!empty($nombresarray)) {
                    print "<br>El array de nombres es: ";
                    foreach ($nombresarray as $nombrecitos) {
                        $conteo++;
                        print "<br>Nombre " . $conteo . ": " . $nombrecitos;
                    }
                }
            } else {
    
                print "<br>No sabes comer";
            }

        }

    ?>

    
</body>
</html>