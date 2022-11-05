<?php
    session_start();
    require_once("App.php");
    $color = new App();
    $color->run();