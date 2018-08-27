<?php

require 'application/lib/Dev.php';

use application\core\Router;


/**
 * function autoload include class
 * функція автозагрузки підключених класів
 */
spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});


session_start();

$router = new Router;

$router->run();

;

