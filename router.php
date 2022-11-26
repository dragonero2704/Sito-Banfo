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
        if ($route == '/') {
            $this->routes[SUBDIR] = $redirect;
        } else {
            $this->routes[SUBDIRSLASH . $route] = $redirect;
        }
    }

    function route($request)
    {
        $action = ltrim($request, '/');

        // prima cosa: scomporre l'url
        $requestParts = explode('/', $request);
        // var_dump($requestParts);
        // echo "Action: " . $action . '<br>';

        $callback = null;
        $params = array();
        foreach ($this->routes as $route => $handler) {
            $route = ltrim($route, '/');
            // echo $route . '<br>';

            if (preg_match("%^{$route}$%", $action, $matches) === 1) {

                unset($matches[0]);

                $callback = $handler;
                $params = $matches;

                break;
            }
        }

        // echo "Callback: ".$callback;

        if (!isset($callback)) {
            require_once('./pagine/404.php');
            exit();
        }

        if (is_callable($callback)) {
            call_user_func($callback, ...$params);
            exit();
        }

        require_once($callback);
        exit();

        // require_once('./views/404.php');
        // exit();
        // exit();
    }
}
