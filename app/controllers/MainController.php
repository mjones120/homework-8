<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Post;
use FilesystemIterator;

class MainController extends Controller
{   
    public function homepage()
    {
        $template = $this->twig->load('main/homepage.twig');
        $homepageData = [
            'title' => 'Homepage Title',
        ];

        echo $template->render($homepageData);
    }

    public function notFound() {
        //todo create a 404 twig template in app/public/assets/views
        //an example is in app/controllers/UsersController
        //and return it from this method
        $loader = new FilesystemLoader('app/public/assets/views/');
        $twig = new Environment($loader);
        $template = $twig->render('404.twig');
        return $template;
    }

}