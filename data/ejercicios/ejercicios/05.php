<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <?php
            const NUMERO = 169;
            $contador = 0;
            $x = 1;
            print "<h1>Ejercicio 5</h1>";
            print "Los divisores de " . NUMERO . " son: ";
            for($x = 1 ; $x<= NUMERO ; $x++){
                if(NUMERO % $x == 0){
                    $contador++;
                    print $x . " ";

                }

            }
            if($contador < 3){
                print "<br>El numero es primo";

            }
        ?>
    </body>
</html>