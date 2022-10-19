<!--Crear web en la que selecciones tres idiomas : español, ingles y aleman
//y selecciones una marca de coche prefereida y muestre el siguiente mensaje y la marca seleccionada
//Bienvenido querido usuario.
//Welcome dear user.
//Willkommen Sehr geehrter Nutzer.
//y la marca de coches seleccionada
//Esta informacion se debe guardar en cookies.
//Si no se selecciona ningun idioma, se pondra español por defecto.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body>
    <form action="/solucionest2/ejcookie/externa.php" method="get">
        <p>
            <h3>SELECCINE EL IDIOMA</h3>
            <select name="idioma" id="idioma">
                <option value="espanol">ESPAÑOL</option>
                <option value="ingles">INGLES</option>
                <option value="aleman">AlEMAN</option>
            </select>
        </p>

        <p>
            <h3>SELECCINE LA MARCA DE COCHE</h3>
            <select name="coche" id="coche">
                <option value="renault">RENAULT</option>
                <option value="BMW">BMW</option>
                <option value="mercedes">MERCEDES</option>
            </select>
        </p>
        <button type="submit" name="envio" id="envio" value="Enviar">Enviar</button>
    </form>
</body>
</html>