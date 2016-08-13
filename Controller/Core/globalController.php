<?php
namespace Controller\Core;
class globalController{
    function __construct(){

    }

    function loadView($filename){
        require_once('View/'.$filename);
    }
}