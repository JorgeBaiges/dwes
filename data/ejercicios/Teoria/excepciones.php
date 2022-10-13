<?php
include_once "manejadorexcepcion.php";
  //calcula el inverso del numero pasado como parametro
  function inverso($num){
    if($num == 0){
        throw new MiExcepcion("No se puede dividir por 0");

    }      
    return 1/$num;
  }//

  try{
    print("<br>EL inverso de 5 es " . inverso(5));

  }catch(Exception $e){
    print "<br>El error es " . $e->getMessage();

  }finally{
    print "<br>El finally siempre se ejecuta";
}

print "<hr>";

try{
    print("<br>EL inverso de 0 es " . inverso(0));

  }catch(MiExcepcion $e){
    print "<br>El error es " . $e->errorPersonalizado();

  }finally{
    print "<br>El finally siempre se ejecuta por segunda vez";
}