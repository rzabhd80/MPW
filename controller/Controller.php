<?php

namespace app\controller;

use app\core\Application;

class Controller
{

    /**
     * Example:
     *  public static func(){
     *     return "sth";
     * }
     *
     *
     */

    public static function contact()
    {
        return Application::$app->router->render("contact");
    }

    public static function contactUsForm()
    {
        return "contact us form submitted";
    }

    public static function home()
    {
        $param = ["fuck" => "me","j"=>"u"];
        return Application::$app->router->render("home", $param);
    }
}
