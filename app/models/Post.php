<?php

namespace app\models;

class Post
{
    public function getAllPosts()
    {   
        return [
            [
                'id' => '1',
                'title' => 'first post',
                'views' => '6'
            ],
            [
                'id' => '2',
                'title' => 'second post',
                'views' => '6'
            ]
        ];

    }
}