<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        $numero1 = 0;
        $numero2 = 1;
        $x = 1;
        $resultado = 0;
        print "<h1>Sucesion de Fibonacci</h1>";
        print $numero1 . ", ";
        print $numero2;
        for($x = 1; $x <= 8; $x++){
            $resultado = $numero1 + $numero2;
            print ", " . $resultado;
            $numero1 = $numero2;
            $numero2 = $resultado;
        }
    ?>
    
</body>
</html>