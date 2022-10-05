<?php
    //Los elementos son eterogeneos

use function PHPSTORM_META\elementType;

    $miArray = array(1, "hola", 3.8, false);
    print "Elemento 2 del array: " . $miArray[2];
    print "<br>";
    print "<hr>";
    //MOSTRAR ARRAY

    //ForEach
    foreach($miArray as $elmento){

        print "<br>El elemento es: " . $elmento;
    }

    //var_dump
    print "<br>";
    print "<hr>";
    var_dump($miArray);

    //print_r
    print "<br>";
    print "<hr>";
    print_r($miArray); 

    //Contar elementos
    print "<br>EL array tiene " . count($miArray) . " elementos";

    //OTRA FORMA DE CREAR UN ARRAY
    $array2 = [
        3,
        2,
        5,
        9
    ];

    //MODIFICAR ARRAY DE ENTEROS
    print "<hr>";
    foreach($array2 as &$elmento){
        $elmento = $elmento * 2;
        print "<br>Los elementos del array por dos son: " . $elmento;

    }
    print "<br>";
    print_r($array2);

    //INSERTAR NUEVOS ELEMENTOS
    print "<hr>";
    print"<br>";
    $array2 [] = 15;
    print_r($array2);

    print"<hr>";
    unset ($array2[2]);
    unset ($array2[5]);
    unset ($array2[1]);
    print_r($array2);

    print "<br> La posicion dos contendra: " . $array2[2];

    $array2[2] = "Javier";
    print "<br>";
    print_r($array2);

    print "<hr>";
    print "<br> MOSTRAR CLAVE Y VALOR DEL ARRAY";
    foreach($array2 as $clave => $valor){
        echo "<br> Clave : " . $clave . " y valor " . $valor;

    }

    print "<hr>";

    $persona = [
        "hola" => 1,
        "peso" => 75,
        "dni" => "45646468E",
        5 => "nss"
    ];
    
    foreach($persona as $key => $value){

        print "<br>Clave: " . $key . " Valor: " . $value;
    }

    $persona[7] = 6;

    print_r($persona);
    print "<br>EL DNI es: " . $persona["dni"];

    //arrays multidimensionales: matrices, arrays de arrays.

    $arrm = [
        0 => [1 , 3],
        1 => ["hola" , "adios"]
    ];
    print"<br>";
    print_r($arrm);
    print"<br> Debe salir 3: " . $arrm[1][1];
?>

