<?php

spl_autoload_register(function($className){
    $filePath = $className.'.php';
    if(file_exists($filePath)):
        require_once($filePath);
        else:
            echo 'File not found';
            die();
        endif;
});