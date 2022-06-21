<?php

namespace app\core;


/**
 * this class is responsible for Route handling and returning proper view/callback function
 *
 * @author Reza <rzxsism80@gmail.com>
 */
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

    private function loadLayout()
    {
        ob_start();
        include_once Application::$root_directory."/view/layout/template.php";
        return ob_get_clean();
    }

    private function renderView($view)
    {
        ob_start();
        include_once Application::$root_directory . "/view/$view.php";
        return ob_get_clean();
    }

    public function render($view)
    {
        $layout = $this->loadLayout();
        $view_render = $this->renderView($view);
        return str_replace("{{content}}", $view_render, $layout);
    }


    public function resolve()
    {
        $url = Url::UrlExtractor();
        $method = Url::methodExtractor();
        $param = Url::paramExtractor();
        $callback_method = $this->routes[$method][$url] ?? null;
        if ($callback_method === null)
            return "Not found 404";
        else {
            if (is_string($callback_method)) {
                return $this->render($callback_method);
            } else return call_user_func($callback_method);
        }
    }
}