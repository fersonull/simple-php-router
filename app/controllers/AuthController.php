<?php

require 'app/core/Database.php';
class AuthController extends Database
{
    public function handle($data = [])
    {
        $users = $this->getAllUsers();
        extract($data);

        while ($row = $users->fetch()) {
            if ($row['username'] === $data['username'] && $row['user_pass'] === $data['pass']) {
                $title = "Features";
                ob_start();
                include 'app/views/dashboard.view.php';
                $content = ob_get_clean();

                include 'app/views/layout.php';
                exit;
            }
        }

        ob_start();
        include 'app/views/login.view.php';
        $content = ob_get_clean();

        include 'app/views/layout.php';


    }
}

