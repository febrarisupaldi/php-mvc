<?php

namespace Paldi\PHP\MVC\Controller;

use Paldi\PHP\MVC\App\View;


class HomeController{
    function index():void{
        $model = [
            'title' => 'Belajar PHP MVC',
            'content' => 'Selamat Belajar PHP MVC dari Programmer zaman now'
        ];

        View::render('Home/index', $model);
    }

    function hello():void{
        echo "HomeController.hello()";
    }

    function hi():void{
        echo "HomeController.hi()";
    }

    function login():void{
        $request =[
            "username" => $_POST['username'],
            "password" => $_POST['password']
        ];

        $response = [
            'message' => 'Login sukses'
        ];
    }
}