<?php
namespace Core;
class coreRoutes{
    function get($userUrl='/', $controllerName){
        if(is_callable($controllerName)){
            call_user_func($controllerName);
        }else{
            $this->callControllerByUrl($userUrl, $this->getUrlPath(), $controllerName);
        }
    }

    function callControllerByUrl($userUrl, $getUrl, $controllerName){
        if($userUrl==$getUrl){
            $this->getArrayByString($controllerName, '@');
        }
    }

    function getUrlPath(){
        $folder_path = str_replace('/index.php', '', $_SERVER['PHP_SELF']);
        $current_url = str_replace($folder_path,'', $_SERVER['REQUEST_URI']);
        return $current_url;
    }

    function getArrayByString($string, $seperator){
        $this->loadController(explode($seperator,$string));
    }

    function loadController(array $controllerName){

        $controllerName[0] = '\\Controller\\'.$controllerName[0];
        if(isset($controllerName[1])){
            //call_user_func($controllerName);
            $controllerObj = new $controllerName[0]();
            $funcName = $controllerName[1];
            $controllerObj->$funcName();
        }else{
            new $controllerName[0]();
        }
    }
}