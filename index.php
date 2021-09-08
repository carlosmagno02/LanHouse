<?php

    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    require('vendor/autoload.php');

    define('INCLUDE_PATH_STATIC','http://localhost/lanhouse/LanHouse/Views/pages/');
    define('INCLUDE_PATH','http://localhost/lanhouse/');

    $app = new LanHouse\Application;
    $app->run()

?>