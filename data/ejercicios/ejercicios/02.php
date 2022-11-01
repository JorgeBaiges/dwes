<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EJercicio 2</title>
    </head>
    <body>
        <?php
        /*
        * @author <Jorge Baiges Ruiz>
        * @param const int OCHO
        * @param int x
        * @param int resultado
        */
            const OCHO = 8;
            $x = 1;
            $resultado = 0;
            print "<h1>Ejercicio 2</h1>";
            print "<h3>La tabla del 8</h3>";
            for($x == 1 ; $x<= 10; $x++){
                $resultado = OCHO * $x;
                print "8 x " . $x . "= " . $resultado . "<br>";
            }
        ?>
    </body>
</html>