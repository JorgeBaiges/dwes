<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["envio"])){
            session_start();
            $item = $_POST["lista"];
            $_SESSION["listadeseo"][] = $item;
            $sesioncodif = json_encode($_SESSION["listadeseo"]);
            var_dump($sesioncodif);
            print "<hr>";
            //OPCION 1
            $sesiondecodif = json_decode($sesioncodif, true);
            var_dump($sesiondecodif);
            //OPCION 2: OBJETO
            $sesiondecodif = json_decode($sesioncodif)
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de deseos</h1>
    <h3>Hoy me apetece comprar ...</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <select name="lista" id="lista" required>
            <option value="camisa">camisa</option>
            <option value="cortacesped">cortacesped</option>
            <option value="consola">consola</option>
            <option value="pantalon">Pantalon</option>
            <option value="movil">movil</option>
            <option value="colonia">colonia</option>
            <option value="coche">Coche</option>
            <option value="portatil">Portatil</option>
        </select>
<br><br>
        <input type="submit" name="envio" value="Agregar Deseo">
    </form>
</body>
</html>