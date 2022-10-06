<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form name="miFormu" action="/autoriza.php" method="post">
        <p>

            <label for="nombre">Introduce tu nombre: </label>
            <input type="text" name="nombreusu" id="nombreusu">

        </p>

        <p>

            <label for="password">Introduce la contraseña: </label>
            <input type="password" name="passwd" id="passwd">

        </p>

        <p> No soy un robot <input type="checkbox" name="check" id="check"></p>
        <br>
        <label for="asig1">Matematicas</label>
        <input type="checkbox" name="asig[]" id="asig1" value="mates"><br>
        <label for="asig2">Ingles</label>
        <input type="checkbox" name="asig[]" id="asig2" value="Ingles"><br>
        <label for="asig3">Programacion</label>
        <input type="checkbox" name="asig[]" id="asig3" value="Programacion"><br>
        <label for="asig4">Lengua Castellana</label>
        <input type="checkbox" name="asig[]" id="asig4" value="Lengua Castellana">

        <p>Elige tu equipo femenino favorito</p>
        <label for="equipo1">DFM</label>
        <input type="radio" name="equipo" id="equipo1" value="casaDeMont">
        <label for="equipo1">GAM</label>
        <input type="radio" name="equipo" id="equipo2" value="GAM" checked>
        <label for="equipo1">FNC</label>
        <input type="radio" name="equipo" id="equipo3" value="FNC">
        <label for="equipo1">RNG</label>
        <input type="radio" name="equipo" id="equipo4" value="RNG">

        <p>Elige tu plato favorito</p>
        <select name="menus" id="menus">
            <option value="Parrillada de verduras">Verduritas a la parrila</option>
            <option value="Carne a la brasa">Carne a la antigua</option>
            <option value="Mero a la riojana">Mero recien pescado</option>
            <option value="Hamburguesa vegana">Hamburguesa vegana</option>
        </select>
        <hr>

        <select name="menuses[]" id="menuses" multiple="5" required>
            <!-- Select Multiple-->
            <option value="Parrillada de verduras">Verduritas a la parrila</option>
            <option value="Carne a la brasa">Carne a la antigua</option>
            <option value="Mero a la riojana">Mero recien pescado</option>
            <option value="Hamburguesa vegana">Hamburguesa vegana</option>
        </select>

        <input type="hidden" name="IP" value="<?= $_SERVER['SERVER_ADDR'] ?>">
        <br>
        <button type="submit" name="envio" id="envio" value="Enviar">Enviar</button>
    </form>

</body>

</html>