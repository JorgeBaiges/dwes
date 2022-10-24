<?php

    session_start();
    $_SESSION = array();
    session_destroy();
    setcookie(session_name(), '', time() - 7200, '/');
    print "La pagina se ha cargado " . $_SESSION['contador'] . " veces";
