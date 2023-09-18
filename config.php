<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'dbphp7');
define('DB_USER', 'seu_usuario');
define('DB_PASS', 'sua_senha');

spl_autoload_register(function($class_name){
    $filename="class".DIRECTORY_SEPARATOR.$class_name.".php";
    if (file_exists(($filename))){
        require_once($filename);
    }
});




?>