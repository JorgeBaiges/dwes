<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 3</title>
    </head>
    <body>
    <?php
    /*
    * @author <Jorge Baiges Ruiz>
    * @param int x
    * @param int contador
    */
        print "<h1>Ejercicio 3</h1>";
        print "<h2>Numeros divisibles por 3</h2>";
        $x = 1;
        $contador = 0;
        print "El resultado es: <br>";
        for($x == 1 ; $x <= 10 ; $x++){
            if($x % 3 == 0){
                print "Numero divisible por 3: " . $x . "<br>";
                $contador++;
            }
        }
        print "<br>La cantidad de numeros divisibles por 3 es= " . $contador;
    ?>  
    </body>
</html>