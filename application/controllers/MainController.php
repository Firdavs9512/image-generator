<?php

namespace application\controllers;

use application\core\Controller;
class MainController extends Controller
{
    public function indexAction()
    {
        $serve = $_SERVER['HTTP_HOST'];
        $vars = [
            'name' => 'Firdavs',
            'server' => $serve,
        ];
        $this->view->render('',$vars);

    }

// pasdagi hozir qaysi urlda ekanligimizni bildiradi.
// var_dump($this->route);
}



