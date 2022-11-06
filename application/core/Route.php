<?php 

namespace application\core;

use application\core\View;


class Route {

    protected $routes = [];
    protected $params = [];

    function get ($url,$controller,$action)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            View::errorspage(400);
        }
        $url = trim($url,'/');
        $path = 'application\controllers\\'.$controller;
        if (class_exists($path)){
            if (method_exists($path,$action)){
                $controller = new $path;
            }
        }


    }


}










