<?php

namespace app\controller;

use app\core\Application;
use app\core\Controller as CoreController;
use app\core\Request;

class Controller extends CoreController
{

    public  function contact()
    {
        return $this->render("contact");
    }

    public  function contactUsForm(Request $request)
    {
        return "contact us form submitted";
    }

    public function home()
    {
        $param = ["fuck" => "me", "j" => "u"];
        return $this->render("home", $param);
    }
}
