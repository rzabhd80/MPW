<?php


require_once __DIR__ . "/../vendor/autoload.php";

use \app\core\Application;

$app = new Application();

$app->router->get("/home", function () {
    return "fuck me";
});

$app->run();
