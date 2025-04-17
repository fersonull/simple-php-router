<?php

class FeaturesController
{
    public function handle($data = [])
    {
        extract($data);
        $title = "Features";
        ob_start();
        include 'app/views/features.view.php';
        $content = ob_get_clean();

        include 'app/views/layout.php';
    }
}