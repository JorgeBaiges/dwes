<?php

class App{

    public function fibonacci($valor1, $valor2){
        print "<br>Secuencia de Fibonacci<br><br>";
        $fib = [$valor1, $valor2];
        for($i=1 ; $i<30;$i++){
            $fib[] = $fib[$i]+$fib[$i-1];
        }
        foreach($fib as $elemento){
            print $elemento . " ";

        }
    }

    public function potencias2(){
        print "<br>Potencias de dos hasta elevado a 24<br><br>";
        $potencia2 = [];
        for($i=1;$i<=24;$i++){
            $resultado = 2**$i;
            $potencia2[] = $resultado; 
        }
        foreach($potencia2 as $elemento){
            print $elemento . " ";

        }

    }

    public function factoriales($numero){
        $factorial = 1;
        $factores = [];
        for($i = 1; $i<=$numero;$i++){
            if($factorial < 1000000){
                $factorial = $factorial * $i; 
                $factores[] = $factorial;
            }
        }
        foreach($factores as $elemento){
            print $elemento . " ";
        }

    }

    public function primos($inicio, $final){
        print "<br>Los numeros primos entre 1 y 10000<br><br>";
        $primos = [];
        for($i = $inicio; $i<=$final;$i++){
            $nDiv = 0;
            for($n = 1; $n<=$i;$n++){
                if($i % $n == 0){
                    $nDiv = $nDiv+1;
                }
            }
            if($nDiv == 2 || $i == 1){
                $primos[] = $i;
            }
        }
        foreach($primos as $elemento){
            print $elemento . " ";
        }
    }

    public function index(){
        print "Estamos en el Index";
        print "<br>Seleccione lo que quiera imprimir<br><br>";
        
    }
}