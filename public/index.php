<?php
require_once '../app/vendor/autoload.php';
require_once "../app/core/Controller.php";
require_once "../app/models/User.php";
require_once "../app/models/Post.php";
require_once "../app/controllers/MainController.php";
require_once "../app/controllers/UserController.php";
require_once "../app/controllers/PostController.php";
use app\controllers\MainController;
use app\controllers\UserController;
use app\controllers\PostController;


$url = $_SERVER["REQUEST_URI"];
//create instances
$mainController = new MainController();
$postController = new PostController();

//todo add a switch statement router to route based on the url

if($url ==='/posts') {
    include('postview.php');
}


  //if it is "/posts" return an array of posts via the post controller
  //case '/posts':
  //  $postController->requestPosts();
  //  break;

  //if it is "/" return the homepage view from the main controller
  //case '/':
  //  $mainController->homepage();
  //  break;
  
  //default:
   // $mainController->notFound();
    //break;

