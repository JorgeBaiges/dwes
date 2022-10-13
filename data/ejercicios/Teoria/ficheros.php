<?php

    $nombrefich = "modulodwes.txt";
    $fp = fopen($nombrefich, "r"); //true si no hay problemas
    
    if(!$fp){
        print "<br>No he podido leer el fichero";

    }else{
        //Leer fichero
            //caracter a caracter
            /*while(!feof($fp)){
                $caracter = fgetc($fp);
                if($caracter == "\n"){
                    print "<br>";

                }
                print $caracter;

            }*/
            //Leer linea a linea
            while(!feof($fp)){

                $linea = fgets($fp);
                print $linea . "<br>";
            }
            
            // 3 - fread
            /*$contenido = fread($fp, filesize($nombrefich));
            print_r($contenido);*/

    }
    print "<hr>Cerrando fichero";
    fclose($fp);

    //ESCRIBIR AL FINAL DEL FICHERO
    $fp2 = fopen($nombrefich, "a");
    if(!$fp2){
        print "<br>No he podido leer el fichero";
    }else{//true si no hay problemas
        $textoinsertar = "Esto es otra linea<br>";
        fwrite($fp2, $textoinsertar);
    }
  
    fclose($fp2);