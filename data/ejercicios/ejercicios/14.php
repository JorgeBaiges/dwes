<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EJercicio 14</title>
    </head>
    <body>
        <h1>EJercicio 14</h1>
        <form name="14" action="#" method="POST">
            <label for="var1">Introduce un numero: </label>
            <input type="number" name="var1" id="var1">
            <br>
            <br>
            <label for="var2">Introduce un numero: </label>
            <input type="number" name="var2" id="var2">
            <br>
            <br>
            <select name="calc" id="calc">
                <option value="suma">Suma</option>
                <option value="sesta">Resta</option>
                <option value="multiplicacion">Multiplicacion</option>
                <option value="division">Division</option>
                <option value="modulo">Modulo</option>
            </select>
            <br>
            <br>
            <button type="submit" name="envio" id="envio" value="Enviar">Enviar</button>
        </form>

        <?php
            function suma($var1, $var2){
                return $var1 + $var2;
            }
            function resta($var1, $var2){
                return $var1 - $var2;
            }
            function multiplicacion($var1, $var2){
                return $var1 * $var2;
            }
            function division($var1, $var2){
                return $var1 / $var2;
            }
            function modulo($var1, $var2){
                return $var1 % $var2;
            }
            $variable1 = 0;
            $variable2= 0;
            if(isset($_POST['envio'])){
                if(!empty($_POST['var1']) && !empty($_POST['var2'])){
                    $variable1 = $_POST['var1'];
                    $variable2 = $_POST['var2'];

                $operacion = $_POST['calc'];
                    if($operacion == 'suma'){
                        print "El resultado de la suma es " . suma($variable1, $variable2);
                    }
                    else if($operacion == 'resta'){
                        print "El resultado de la resta es " . resta($variable1, $variable2);
                    }
                    else if($operacion == 'multiplicacion'){
                        print "El resultado de la resta es " . multiplicacion($variable1, $variable2);
                    }
                    else if($operacion == 'division'){
                        print "El resultado de la resta es " . division($variable1, $variable2);
                    }
                    else if($operacion == 'modulo'){
                        print "El resultado de la resta es " . modulo($variable1, $variable2);
                    }
                } else{
                    print "LOS DATOS NO SON VALIDOS";
                }
            }
        ?>
    </body>
</html>