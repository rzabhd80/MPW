<?php

namespace app\controller;

use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{

    public function loginView()
    {
        return $this->render("login");
    }


    public function registerView()
    {
        return $this->render("register");
    }

    public function login(Request $request)
    {
    }

    public function register(Request $request)
    {
        var_dump($request);
    }
}
