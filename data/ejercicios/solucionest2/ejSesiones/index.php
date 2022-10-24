<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
</head>
<body>
    <form action="sesiones.php" method="post">
        <p>
            <label for="nombre">Introduce el usuario</label>
            <input type="text" name="usu" id="usu">
        </p>
        <p>
            <label for="password">Introduce una contraseña</label>
            <input type="password" name="pass" id="pass">
        </p>
        <button type="submit" name="envio" id="envio" value="Enviar">Enviar</button>
    <?php
        if(!isset($_POST['enviar'])){
            if(!empty($_POST['usu']) && !empty($_POST['pass']))
        }

    ?>
    </form>
</body>
</html>