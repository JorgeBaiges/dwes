<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
<?php
        print "<h1>Ejercicio 10</h1>";
        $basket = [
            0 => "base",
            1 => "escolta",
            2 => "alero", 
            3 => "alapivot",
            4 => "pivot"
        ];

        foreach ($basket as $clave => $valor){

             print "{$clave} => {$valor}";
             print "<br>";
        }
    ?>
    
</body>
</html>