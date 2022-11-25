<?php
class Router
{
    private $routes;
    private $subdir;
    function __construct($routes = array())
    {
        $this->routes = $routes;
        $this->subdir = $this->getSubDir();
    }
    function getSubDir()
    {
        $dir = explode('\\', __DIR__);
        // var_dump($dir);
        $root = explode('/', $_SERVER['DOCUMENT_ROOT']);
        $root = $root[sizeof($root) - 1];
        $key = array_search($root, $dir);
        return join("/", array_slice($dir, $key + 1));
    }

    function addRoute($route, $redirect)
    {
        if ($route == '/') {
            $this->routes[$this->subdir] = $redirect;
        } else {
            $this->routes[$this->subdir . $route] = $redirect;
        }
    }

    function route($request)
    {
        $action = trim($request, '/');

        // prima cosa: scomporre l'url
        $requestParts = explode('/', $request);
        // var_dump($requestParts);
        echo "Action: " . $action . '<br>';

        $callback = null;
        $params = array();
        foreach ($this->routes as $route => $handler) {
            echo $route . '<br>';
            if (preg_match("%^{$route}$%", $action, $matches) === 1) {

                unset($matches[0]);

                $callback = $handler;
                $params = $matches;

                break;
            }
        }

        // echo "Callback: ".$callback;

        if (!isset($callback)) {
            // require_once('./pagine/404.php');
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
