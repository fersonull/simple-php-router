<?php

class LoginController
{
    public function handle()
    {
        $title = "Pricing";
        ob_start();
        include 'app/views/login.view.php';
        $content = ob_get_clean();

        include 'app/views/layout.php';
    }
}