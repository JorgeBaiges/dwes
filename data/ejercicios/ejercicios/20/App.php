<?php

    class App{

        /*
        * @author <Jorge Baiges Ruiz>
        */

        private $color ="";

        public function run(){
            session_start();
            if(isset($_GET['method'])){
                $metodo = $_GET['method'];
            }else{
                $metodo = 'index';
            }

            $this->$metodo();
        }

        public function index(){
            $this->home();
        }

        public function indexreload(){
            header("Location: index.php");
        }

        public function home(){
            if(isset($_SESSION['color'])){
                $this->color = ($_SESSION['color']);
            }
            /*Incl*/
            include('views/home.php');
            include('views/colores.php');
        }

        public function cambio(){
            if(isset($_GET['color'])){
                $color = $_GET['color'];
                $_SESSION['color'] = $color;
            }
            $this->indexreload();
        }
    
    }