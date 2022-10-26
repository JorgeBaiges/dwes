<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <style>
            table, th, td{
                border: 1px solid black;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
        <?php
        $nombre = "Jorge";
        $apellidos = "Baiges Ruiz";
        $edad = 21;
        $telefono = "627109678";
        $email = "jorgejorge@gmail.com";
            print "
            <table>
                <tr>
                    <th>" . "NOMBRE" . "</th>
                    <th>" . "APELLIDOS" . "</th>
                    <th>" . "EDAD" . "</th>
                    <th>" . "TELEFONO". "</th>
                    <th>" . "EMAIL". "</th>
                </tr>
                <tr>
                    <td>" . $nombre . "</td>
                    <td>" . $apellidos . "</td>
                    <td>" . $edad . "</td>
                    <td>" . $telefono . "</td>
                    <td>" . $email . "</td>
                </tr>

            </table>"

        ?>
    </body>
</html>