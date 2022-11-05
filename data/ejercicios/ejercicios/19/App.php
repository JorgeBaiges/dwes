<?php

    class App{

        /*
        * @author <Jorge Baiges Ruiz>
        */
        
        private $color ="";

         /*Ejecutar la APP y comprobar metodo, si falla enviara al login */
        public function run(){
            if(isset($_GET['method'])){
                $metodo = $_GET['method'];
            }else{
                $metodo = 'index';
            }

            $this->$metodo();
        }

        /*Te redirije a la funcion home */
        public function index(){
            $this->home();
        }

        /*Para que puedas cambiar el color en bucle */
        public function indexreload(){
            header("Location: index.php");
        }

        /*Si la cookie existe, recibira el color seleccionado y solapa ambas paginas de views */
        public function home(){
            if(isset($_COOKIE['color'])){
                $this->color = unserialize($_COOKIE['color']);
            }
            include('views/home.php');
            include('views/colores.php');
        }

        /*Sirve para cambiar el color de la pagina dependiendo el seleccionado y ejecuta el index de nuevo*/
        public function cambio(){
            if(isset($_GET['color'])){
                $color = $_GET['color'];
                setcookie("color",serialize($color), time() + 60);
            }
            $this->indexreload();
        }
    
    }