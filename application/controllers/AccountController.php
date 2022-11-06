<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{
    public function loginAction()
    {
        $this->view->render('LoginPage');

        // pasdagi hozir qaysi urlda ekanligimizni bildiradi.
        // var_dump($this->route);
    }

    public function register()
    {
        echo "regiter controller register ";
    }

}



