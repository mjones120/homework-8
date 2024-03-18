<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Post;


class PostController extends Controller
{
//todo make a method to return some posts, post objects should come from the post model class
//also need to make a twig template to show the posts
//an example is in app/controllers/UsersController
    public function returnPosts()
    {
        include './assets/views/posts/postview.php';
    }

    public function validate()
    {
        $name = $_POST['name'] ? $_POST['name'] : false;
        $description = $_POST['description'] ? $_POST['description'] : false;
        //validate data
        $errors = [];
        if ($name) {
            $name = htmlspecialchars($name, ENT_QUOTES | ENT_HTML5, 'UTF-8', true);
            if (strlen($name) < 2) {
                $errors['nameShort'] = 'name is too short';
            }
        } else {
            $errors['requiredName'] = 'name is required';
        }

        if ($description) {
            $description = htmlspecialchars($description, ENT_QUOTES | ENT_HTML5, 'UTF-8', true);
            if (strlen($description) < 5) {
                $errors['descShort'] = 'description is too short';
            }
        } else {
            $errors['requiredDesc'] = 'description is required';
        }

        if (count($errors)) {
            http_response_code(400);
            echo json_encode($errors);
            exit();
        }
        http_response_code(201);
        $success = ['message' => 'Post was successful'];
        echo json_encode($success);
        exit();

        $returnData=
        [
            'name' => $name,
            'description'=> $description,
        ];
        echo "<span class='form-success'>Post is successful!</span>";

    }
}