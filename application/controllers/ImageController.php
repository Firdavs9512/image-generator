<?php

namespace application\controllers;

use application\core\Controller;

class ImageController extends Controller
{
    public function imageAction()
    {
        $random = rand(1,18);
        header('Content-type: image/jpeg');
        $file = __DIR__.'../../storage/image/images/'.$random.'.jpg';
        readfile($file);
        // pasdagi hozir qaysi urlda ekanligimizni bildiradi.
        // var_dump($this->route);
    }

    public function mobileAction()
    {
        $random = rand(1,18);
        header('Content-type: image/jpeg');
        $file = __DIR__.'../../storage/image/images/'.$random.'.jpg';
        readfile($file);
    }

    public function desktopAction()
    {
        $random = rand(1,18);
        header('Content-type: image/jpeg');
        $file = __DIR__.'../../storage/image/images/'.$random.'.jpg';
        readfile($file);
    }

}



