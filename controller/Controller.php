<?php

namespace app\controller;

use app\core\Application;
use app\core\Controller as CoreController;

class Controller extends CoreController
{

    public  function contact()
    {
        return Application::$app->router->render("contact");
    }

    public  function contactUsForm()
    {
        return "contact us form submitted";
    }

    public function home()
    {
        $param = ["fuck" => "me", "j" => "u"];
        return $this->render("home", $param);
    }
}
