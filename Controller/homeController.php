<?php
namespace Controller;
use Controller\Core\globalController;

class homeController extends globalController{
    function __construct(){
        echo 'home controller'.'</br>';
        echo 'Construct'.'<br/>';
    }

    function indexFunc(){
        echo 'Index Func'.'<br/>';
        $this->loadView('home.php');
    }

}