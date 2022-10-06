<?php

/*
ORIENTACION A OBJETOS

    CONCEPTOS GENERALES JAVA:
        - Sobrescritura de metodos.(metodos)
         -> Mismo nombre con mismo numero de parametros, diferente comportamiento. 
            -> Clase figura -> metodo calcular_area
            -> Clase circulo -> metodo calcular_area
            -> Clase cuadrado -> metodo calcular_area
        - Sobrecarga de metodos.(metodos)
         -> Mismo nombre con diferentes parametros.
        - Sobrecarga (constructores)
            - Diferentes constructores con diferentes parametros
        - Polimorfismo: objeto que se comporta como otro.
            - Casting
            - sobrescritura
            - sobrecarga
            - ligadura dinamica

    PHP:
        - sobrescritura.
        - No existe sobrecarga de metodos
        - No se puede sobrecargar constructores
        - Si hay polimorfismo (sobrescritura)
        - public, private, protected, por defecto publico

    Notacion: 
    Clases: nombre de clases(UpperCamelCase)
    Metodos: lowerCamelCase
    java: this.attr
    php: $this->attr
*/
class Asignatura
{

    
    private $nombre = null;
    private $numCredito= null;
    private static $ciclo = null;

    function __construct($nombre, $numCredito)
    {
        $this->nombre = $nombre;
        $this->numCredito = $numCredito;
    }

    function getnombre()
    {
        return $this->nombre;
    }

    function setnombre($nombre)
    {
        $this->nombre = $nombre;
    }
    function getcredito()
    {
        return $this->numCredito;
    }

    function setcreditos($numCredito)
    {
        $this->numCredito = $numCredito;
    }

    static function getCiclo(){

        return self::$ciclo;
    }

    static function setCiclo($ciclo){
        self::$ciclo = $ciclo;
    }

    function __toString()
    {
        return "<br>Nombre de la asignatura: " . $this->nombre . 
        "<br>Numero de creditos: " . $this->numCredito;
    }
    
}//Fin clase
