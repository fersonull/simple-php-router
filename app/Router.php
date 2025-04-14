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
            case '/pricing':
                $this->load('PricingController');
                break;
            default:
                $this->load('HomeController');
                break;
        }
    }


    private function load($ctrlName)
    {
        $filename = "app/controllers/$ctrlName.php";

        if (file_exists($filename)) {
            include $filename;

            $controller = new $ctrlName();

            $controller->handle();  
        }
    }
}