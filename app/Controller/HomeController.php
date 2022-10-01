<?php

namespace Matt\PhpMvc\Controller;

class HomeController
{
    function index():void
    {
        $model = [
            "title"     => "Belajar PHP MVC",
            "content"   => "Selamat belajar PHP MVC dari Programmer Zaman Now"
        ];

        echo "HomeController.index()";
    }

    function hello():void
    {
        echo "HomeController.hello()";
    }
    
    function world():void
    {
        echo "HomeController.world()";
    }

    function about():void
    {
        echo "Student : Rachmat Ardico Perdana";
    }

    function login():void
    {
        $request = [
            "username"  => $_POST['username'],
            "password"  => $_POST['password']
        ];

        $user = [

        ];

        $response = [
            "message"     => "Login sukses"
        ];
        // kirimkan response ke view
    }
}