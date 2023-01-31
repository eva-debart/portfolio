<?php
require_once './vendor/autoload.php';

session_start();
use App\services\Router;
//require_once './services/Router.php';

$router = new Router();
$router->handleRequest();
