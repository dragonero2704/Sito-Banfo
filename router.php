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
        $route = trim($route, '/');
        $route = str_replace("{}", "(.+)", $route);
        $this->routes[trim($route, '/')] = $redirect;
    }

    function sanitize($request){
        $sanitized = substr($request, strlen(BASEHREF));
        return $sanitized;
    }

    function route($request)
    {
        //elimina le varie subdirectory prima della della cartella effettiva di root
        $request = $this->sanitize($request);
        //in questo modo non importa se si scrive o no gli slash all'inizio o alla fine della route
        $action = trim($request, '/');

        $callback = null;
        $params = array();
        foreach ($this->routes as $route => $handler) {
            // echo $route . '<br>';
            if (preg_match("%^{$route}$%", $action, $matches) === 1) {
                //faccio l'unset del primo matches perché contiene solo la stringa per intero, è inutile
                unset($matches[0]);

                $callback = $handler;
                $params = $matches;

                break;
            }
        }
        //se non ho un callback deinito, vuol dire che la route non è definita
        if (!isset($callback)) {
            require_once('./pagine/404.php');
            exit();
        }
        //se il callback è una funzione la eseguo
        if (is_callable($callback)) {
            echo call_user_func($callback, ...$params);
            exit();
        }

        //se il callback non è una funzione vuol dire che è un percorso
        try {
            require_once($callback);
        } catch (\Throwable $th) {
            //se c'è un errore, ad esempio il percorso non è valido, chiamo la pagina di errore 404
            require_once('./pagine/404.php');
        }
        
        exit();
    }
}
