<?php

class App {

    /*
    * @author <Jorge Baiges Ruiz>
    */


  /*Ejecutar la APP y comprobar metodo, si falla enviara al login */
  public function run() {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'login';
    }
  
    $this->$method();  

  }
  /*Busca la cookie y si no la cuentra te manda de vuelta al metodo home, sino pasas */
  public function login() {
    
    if (isset($_COOKIE['name'])) {
      header('Location: ?method=home');
      return;
    }
    include('views/login.php');

  }
/*Crea las cookies si los datos existen */
  public function auth() {
    if (isset($_POST['name'])) {
      $name = $_POST['name'];
      $password = $_POST['password'];
    } else {
      header('Location: ?method=login');
      return;
    }
    setcookie('name', $name, time() + 60*60*2);
    setcookie('password', $password, time() + 60*60*2);
    header('Location: index.php?method=home');

  }
/*Si la cookie no existe te devolvera al login, y si existe te mandara al home con la cookie creada */
  public function home() {
    if (!isset($_COOKIE['name'])) {
      header('Location: ?method=login');
      return;
    }
    if (isset($_COOKIE['deseos'])) {
      $deseos = unserialize($_COOKIE['deseos']);
    } else {
      $deseos = [];
    }
    include('views/home.php');

  }
  /*Crear un deseo con la cookie previamente hecha  */
  public function new() {
    if (!isset($_POST['new'])) {
      header('Location: index.php?method=home');
      return;
    }
    $new = $_POST['new'];
    if (isset($_COOKIE['deseos'])) {
      $deseos = unserialize($_COOKIE['deseos']);
    } else {
      $deseos = [];
    }
    $deseos[] = $new;
    setcookie('deseos', serialize($deseos), time() + 60*60*2);
    header('Location: index.php?method=home');

  }
  /*Borra el deseo del array y la cookie */
  public function delete() {

    if (isset($_COOKIE['deseos'])) {
      $deseos = unserialize($_COOKIE['deseos']);
    } else {
      $deseos = [];
    }
    $id = $_GET['id'];
    unset($deseos[$id]);
    setcookie('deseos', serialize($deseos), time() + 60*60*2);
    header('Location: index.php?method=home');

  }
  /*Borra todos los deseos del array*/
  public function empty() {

    setcookie('deseos', '',  1);
    header('Location: index.php?method=home');

  }
/*Borra el contenido de la cookie */
  public function close() {

    setcookie('deseos', '',  1);
    setcookie('name', '',  1);
    setcookie('password', '',  1);
    header('Location: index.php?method=login');

  }
  
}
