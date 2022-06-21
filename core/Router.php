<?php

namespace app\core;

class Router
{
    protected $routes = [];



    public function get($route, $callback)
    {
        $this->routes["GET"][$route] = $callback;
    }


    public function post($route, $callback)
    {
        $this->routes["POST"]["$route"] = $callback;
    }


    public function resolve()
    {
        $url = Url::UrlExtractor();
        $method = Url::methodExtractor();
        $param = Url::paramExtractor();
        $callback_method = $this->routes[$method][$url] ?? null;
        if ($callback_method === null)
            echo "Not found 404";
        else echo call_user_func($callback_method);
    }
}
