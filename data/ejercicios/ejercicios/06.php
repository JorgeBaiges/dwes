<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 6</title>
    </head>
    <body>
        <?php
            $miArray = array("base", "escolta", "alero", "alapivo", "pivot");
            $array = [
                "base",
                "escolta",
                "alero", 
                "alapivot",
                "pivot"
            ];
            print "<h1>Ejercicio 6</h1>";
            print "El equipo de baloncesto esta compuesto de:<br>";
            print "
            <ul>
                <li>" . $array[0] . "</li>
                <li>" . $array[1] . "</li>
                <li>" . $array[2] . "</li>
                <li>" . $array[3] . "</li>
                <li>" . $array[4] . "</li>
            </ul>";
            print "Mostrar con posicion<br>";
            print_r($array);
            print "<br><br>Mostrar solo nombre<br>";
            foreach($array as $elmento){

                print $elmento . "<br>";
            }
        ?>
    </body>
</html>