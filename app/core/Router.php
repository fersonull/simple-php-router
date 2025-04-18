<?php

class Router
{

    public static function dispatch($uri)
    {
        switch ($uri) {
            case '/':
                self::load('HomeController');
                break;
            case '/features':
                self::load('FeaturesController');
                break;
            case '/login':
                self::load('LoginController');
                break;
            case '/dashboard':
                self::load('AuthController', ['username' => $_POST['username'] ?? '', 'pass' => $_POST['password'] ?? '']);
                break;
            default:
                self::load('HomeController');
                break;
        }
    }


    public static function load($ctrlName, $data = [])
    {
        $filename = "app/controllers/$ctrlName.php";

        if (file_exists($filename)) {
            include $filename;

            $controller = new $ctrlName();

            $controller->handle($data);
        }
    }
}