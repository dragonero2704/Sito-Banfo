<?php
class Router
{
    private $routes;
    function __construct($routes = array())
    {
        $this->routes = $routes;
    }

    function addRoute($route, $redirect)
    {
        $this->routes[$route] = $redirect;
    }

    function route($request)
    {
        // prima cosa: scomporre l'url
        $requestParts = explode('/', $request);
        // var_dump($requestParts);
        $action = trim($request, '/');

        // echo $action . '<br><br><br>';
        $callback = null;
        $params = array();
        foreach ($this->routes as $route => $handler) {
            // echo $route . '<br>';
            if (preg_match("%^{$route}$%", $action, $matches) === 1) {

                unset($matches[0]);

                $callback = $handler;
                $params = $matches;

                break;
            }
        }

        if (!isset($callback)) {
            require_once('./pagine/404.php');
            exit();
        }

        if (is_callable($callback)) {
            echo call_user_func($callback, ...$params);
            exit();
        }

        require_once($callback);
        exit();

        // require_once('./views/404.php');
        // exit();
        // exit();
    }
}
