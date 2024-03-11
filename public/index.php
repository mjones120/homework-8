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
$userController = new UserController();
$postController = new PostController();

//todo add a switch statement router to route based on the url
switch($url) 
{ 
  //if it is "/posts" return an array of posts via the post controller
  case '/posts':
    $posts = $postController->returnPosts(); 
    break;

  //if it is "/" return the homepage view from the main controller
  case '/':
    $content = $mainController->homepage();
    break;
  
  default:
    $maincontroller-> notFound();
    break;
  }
  
//2. What are some examples of how PHP and JavaScript are alike and how they differ?
//PHP is a server-side scripting library while javascript is a client side scripting language. PHP additionally supports databases while javascript doesn't. Both languages use script and help build web pages
//3. Define MVC, what are the responsibilities of each piece?
//MVC is a design pattern that separates the application into 3 different logical components: Model, View, and Controller.
// The controller enables interconnection between the view and the model. 
//The view is used for UI logic as it generates the user interface. 
//The mdoel corresponds with the data-related logic that user works with. It represents the data that is being transferred between the view and hte controller
