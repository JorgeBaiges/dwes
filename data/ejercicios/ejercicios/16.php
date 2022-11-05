<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <h1>Ejercicio 16</h1>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <p>
            <label for="cosas">Introduzca a la lista</label>
            <input type="text" name="lista[]">
            <ul>
                <?php
                /*
                 * @author <Jorge Baiges Ruiz>
                 * @param array $_POST["lista"] 
                 */
                if($_SERVER["REQUEST_METHOD"] === "POST"){
                    if(isset($_POST['envio'])){
                        foreach ($_POST['lista'] as $elemento){
                            /*No entendi muy bien a lo que se referia el comentario en cuanto a tipo hidden, asi que he supuesto que la informacion 
                            añadida a los lis deberia ser oculta */
                            print '<li><input type="hidden" name="lista[]" value ="" . $elemento . ""</li>';
                        }
                    }

                }
                    
                ?>
            </ul>
            <input type="submit" value="EnviarDatos" name="envio">
        </p>

    </form>
</body>
</html>