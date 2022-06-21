<?php


require_once __DIR__ . "/../vendor/autoload.php";

use \app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get("/home", "home");
$app->router->get("/aboutUs", "aboutUs");
$app->run();
