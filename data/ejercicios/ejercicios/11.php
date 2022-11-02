<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="#" method="post">
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
    <?php
    /*
    * @author <Jorge Baiges Ruiz>
    * @param String titulo(Almacenar el valor del formulario titulo).
    * @param String autor(Almacenar el valor del formulario autor).
    * @param String editorial(Almacenar el valor del formulario editorial).
    * @param int paginas(Almacenar el valor del formulario paginas).
    */
    if(isset($_POST['envio'])){

        if(!empty($_POST['titulo'])){

            $titulo = $_POST['titulo'];
            print "<br>El nombre del titulo del libro: " . $titulo;
    
        }else{
            print "<br>No ha introduzido un titulo";
    
        }

        if(!empty($_POST['autor'])){

            $autor = $_POST['autor'];
            print "<br>El nombre del autor del libro: " . $autor;
    
        }else{
            print "<br>No ha introduzido un autor";
    
        }

        if(!empty($_POST['editorial'])){

            $editorial = $_POST['editorial'];
            print "<br>El nombre de la editorial del libro: " . $editorial;
    
        }else{
            print "<br>No ha introduzido una editorial";
    
        }

        if(!empty($_POST['paginas'])){

            $paginas = $_POST['paginas'];
            print "<br>El numero del paginas del libro: " . $paginas;
    
        }else{
            print "<br>No ha introduzido un numero paginas";
    
        }
    }
    ?>
    </form>
    
</body>
</html>