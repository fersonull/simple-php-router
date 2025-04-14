<?php

class PricingController
{
    public function handle()
    {
        $title = "Pricing";
        ob_start();
        include 'app/views/pricing.view.php';
        $content = ob_get_clean();

        include 'app/views/layout.php';
    }
}