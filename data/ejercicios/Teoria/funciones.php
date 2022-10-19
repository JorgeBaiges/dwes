<?php

    $var1 = 7;
    $var2 = 9;
    function suma($a, $b){
        //Para que una funcion reconozca valores globales hay que volver a definirlas dentro de la misma.
        global $var1;
        global $var2;
        $var1 = 100;
        $var2 = 200;
        unset($var2);
        $suma = $var1 + $var2;
        print "<br>La suma de las variables globales es: " . $suma;
        //STATIC DENTRO DE FUNCION
        static $varestatica = 0;
        print "<br>El valor de la variable estatica es: " . $varestatica;
        $varestatica++;
        return $a + $b;


    }

    print "Las variables a y b son: " . $var1 . " y " . $var2;
    print "<br>La suma es: " . suma(5, 4);

    //PASO DE PARAMETRO POR VALOR O POR REFERENCIA

    function restar($op1, $op2){
        $op1 = $op1 - $op2;
        return $op1;


    }
    $var3 = 8;
    $var4 = 5;
    print "<br>Llamada por valor: " . restar(8, 3);
    print "<br>Llamada por parametro: " . restar($var3, $var4);
?>