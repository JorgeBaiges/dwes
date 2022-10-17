<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficheros</title>
</head>
<body>
    <?php
        print "Nombre del fichero: " . $_FILES["myfile"]["name"];
        print "<br>Tipo del fichero: " . $_FILES["myfile"]["type"] ;
        print "<br>Tamaño del fichero: " . $_FILES["myfile"]["size"] ;
        print "<br>Nombre del fichero temporal: " . $_FILES["myfile"]["tmp_name"] ;
    ?>
</body>
</html>