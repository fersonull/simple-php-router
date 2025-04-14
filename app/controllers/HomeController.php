<?php

class HomeController
{
    public function handle()
    {
        $title = "Home";
        ob_start();
        include 'app/views/home.view.php';
        $content = ob_get_clean();

        include 'app/views/layout.php';
    }
}