<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 17</title>
    </head>
    <body>
        <?php
            require_once "App.php";
            $presentacion = new App();
            $presentacion->index();
        ?>
        <form action="#" method="post">
        <button type="submit" name="fibonacci" value="Enviar">Fibonacci</button>
        <button type="submit" name="potencias2" value="Enviar">Potencias2</button>
        <label for="factor">Factorial</label>
        <input type="text" name="numfac">
        <button type="submit" name="factoriales" value="Enviar">Factoriales</button>
        <button type="submit" name="primos" value="Enviar">Numeros Primos</button>
        </form>
        <?php
            if(isset($_POST["fibonacci"])){
                $fibonacci = new App;
                $fibonacci->fibonacci(0,1);
            } else if(isset($_POST["potencias2"])){
                $potencias = new App();
                $potencias->potencias2();
            } else if(isset($_POST["primos"])){
                $primos = new App();
                $primos->primos(1, 10000);
            }else{
                $factorial = new App();
                $factorial->factoriales($_POST["numfac"]);
            }
        ?>

        
    </body>
</html>
