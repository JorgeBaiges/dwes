<?php

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