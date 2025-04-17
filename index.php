<?php
require 'app/core/Router.php';
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router = new Router;

$router->dispatch($uri);
