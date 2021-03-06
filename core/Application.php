<?php

/**
 * Application class is central core of the entire application...
 * with use of run method and calling route handler singleton object, the right methods and routes are specified and run
 *
 * @author Rez <rzxsism80@gmail.com>
 *
 */

namespace app\core;

class Application
{
    public static Application $app;
    public static string $root_directory;
    public Router $router;
    public Response $response;

    public function __construct($root)
    {
        self::$app = $this;
        self::$root_directory = $root;
        $router = new Router();
        $this->router = $router;
        $this->response = new Response();
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
