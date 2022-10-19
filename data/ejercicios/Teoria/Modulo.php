<?php

class Modulo extends Asignatura
{

    private $codigo = null;

    function __construct($nombre,$numCredito,$codigo)
    {
        parent::__construct($nombre, $numCredito);
        $this->codigo = $codigo;
    }

    function getCodigo()
    {
        return $this->codigo;
    }

    function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    function __toString()
    {
        return "<br>Datos de la Asignatura: " . 
        "<br>nombre asignatura: " . parent::getNombre() . 
        "<br>numero de creditos: " . parent::getcredito() . 
        "<br>Codigo: " . $this->codigo;
    }
}//Fin clase