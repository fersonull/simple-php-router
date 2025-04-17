<?php

class Router
{

    public function dispatch($uri)
    {
        switch ($uri) {
            case '/':
                $this->load('HomeController');
                break;
            case '/features':
                $this->load('FeaturesController');
                break;
            case '/login':
                $this->load('LoginController');
                break;
            case '/dashboard':
                $this->load('AuthController', ['username' => $_POST['username'] ?? '', 'pass' => $_POST['password'] ?? '']);
                break;
            default:
                $this->load('HomeController');
                break;
        }
    }


    private function load($ctrlName, $data = [])
    {
        $filename = "app/controllers/$ctrlName.php";

        if (file_exists($filename)) {
            include $filename;

            $controller = new $ctrlName();

            $controller->handle($data);
        }
    }
}