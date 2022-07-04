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

    public  function contactUsForm(Request $request) //post request must have an object of Request as argument
    {
        var_dump($request);
        return "contact us form submitted";
    }

    public function home()
    {
        return $this->render("home");
    }
}
