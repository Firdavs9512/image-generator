<?php

namespace application\controllers;

use application\core\Controller;

class ImageController extends Controller
{
    public function imageAction()
    {
        $images = [
            ['Mobile',29],
            ['Desktop',26]
            
        ];
        $random = rand(0,1);
        $folder = $images[$random];
        header('Content-type: image/jpeg');
        $randomImage = rand(1,$folder[1]);
        $file = __DIR__.'../../storage/image/'.$folder[0].'/'.$randomImage.'.jpg';
        readfile($file);
        // pasdagi hozir qaysi urlda ekanligimizni bildiradi.
        // var_dump($this->route);
    }

    public function mobileAction()
    {
        $random = rand(1,29);
        header('Content-type: image/jpeg');
        $file = __DIR__.'../../storage/image/Mobile/'.$random.'.jpg';
        readfile($file);
    }

    public function desktopAction()
    {
        $random = rand(1,26);
        header('Content-type: image/jpeg');
        $file = __DIR__.'../../storage/image/Desktop/'.$random.'.jpg';
        readfile($file);
    }

}



