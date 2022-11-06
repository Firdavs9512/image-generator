<?php

namespace application\controllers;

use application\core\Controller;
class MainController extends Controller
{
    public function indexAction()
    {

        $vars = [
            'name' => 'Firdavs',
            'username' => '',
        ];
        $this->view->render('',$vars);

    }

// pasdagi hozir qaysi urlda ekanligimizni bildiradi.
// var_dump($this->route);
}



