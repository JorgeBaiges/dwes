<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="/ejercicios/11/externa.php" method="post">
        <p>

            <label for="nombre">Introduce el titulo: </label>
            <input type="text" name="titulo" id="titulo">
            <br>
            <label for="nombre">Introduce el autor: </label>
            <input type="text" name="autor" id="autor">
            <br>
            <label for="nombre">Introduce la editorial : </label>
            <input type="text" name="editorial" id="editorial">
            <br>
            <label for="nombre">Introduce las paginas : </label>
            <input type="text" name="paginas" id="paginas">

            <br>
                <button type="submit" name="envio" id="envio" value="Enviar">Enviar</button>

        </p>
    </form>
    
</body>
</html>