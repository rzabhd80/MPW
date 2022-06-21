<?php


require_once __DIR__ . "/../vendor/autoload.php";

use \app\core\Application;
use  app\controller\Controller;

$app = new Application(dirname(__DIR__));

$app->router->get("/home", [Controller::class, "home"]);
$app->router->get("/aboutUs", "aboutUs");
$app->router->get("/contactUs", [Controller::class, "contact"]);
$app->router->post("/contactUs", [Controller::class, "contactUsForm"]);
$app->run();
