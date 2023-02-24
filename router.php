<?php
function getBaseHref()
{
    $baseHref = strchr($_SERVER['PHP_SELF'], basename($_SERVER["SCRIPT_FILENAME"]), true);
    return $baseHref;
}

define("BASEHREF", getBaseHref());

class Router
{
    private $routes;
    private $method;
    function __construct(...$params)
    {
        $this->routes = array();
        $this->method = array();
    }

    private function addRoute($route, $redirect, $method = "")
    {
        if (empty($redirect)) throw new Exception("redirect cannot be empty", 1);
        if (!$this->isValid($redirect)) throw new Exception("'$redirect': redirect non valido, file inesistente");
        $route = trim($route, '/');
        $route = str_replace("{}", "([^/]+)", $route);
        // ([^/]+) fa in modo che durante il regex vengano esclusi gli /
        // Guida sul regular expression matching (regex) in php:
        // https://www.w3schools.com/php/php_regex.asp

        $this->routes[trim($route, '/')] = $redirect;
        $this->method[trim($route, '/')] = $method;
    }

    function any($route, $redirect)
    {
        $this->addRoute($route, $redirect);
    }

    function get($route, $redirect)
    {
        $this->addRoute($route, $redirect, "GET");
    }

    function post($route, $redirect)
    {
        $this->addRoute($route, $redirect, "POST");
    }

    function put($route, $redirect)
    {
        $this->addRoute($route, $redirect, "PUT");
    }

    function delete($route, $redirect)
    {
        $this->addRoute($route, $redirect, "DELETE");
    }

    function sanitize($request)
    {
        // elimina eventuali sottocartelle al di fuori della cartella di root
        // esempio
        // subdir/root/index.php => /root/index.php
        $sanitized = substr($request, strlen(BASEHREF));
        return $sanitized;
    }

    private function isValid($callback)
    {
        if (!is_callable($callback)) return file_exists($callback);
        return true;
    }

    function route($request)
    {
        //elimina le varie subdirectory prima della della cartella effettiva di root
        $request = $this->sanitize($request);
        //in questo modo non importa se si scrive o no gli slash all'inizio o alla fine della route
        $action = trim($request, '/');
        //funzione di callback settata a null in quanto potrebbe non esserci
        $callback = null;
        $params = array();
        foreach ($this->routes as $route => $handler) {
            if (preg_match("%^{$route}$%", $action, $matches) === 1) {
                //match trovato, controllo il metodo HTTP utilizzato
                if (!empty($this->method[$route]) && $this->method[$route] !== $_SERVER['REQUEST_METHOD']) {
                    //metodo diverso, non posso accedere alla pagina
                    exit();
                }
                // faccio l'unset del primo matches perché contiene solo la stringa per intero,
                // che è inutile
                unset($matches[0]);

                $callback = $handler;
                $params = $matches;

                break;
            }
        }
        //se non ho un callback definito, vuol dire che la route è stata mal definita
        if (!isset($callback)) {
            require_once('./views/404.php');
            exit();
        }
        //se il callback è una funzione la eseguo
        if (is_callable($callback)) {
            call_user_func($callback, ...$params);
            exit();
        }

        //se il callback non è una funzione vuol dire che è un percorso
        try {
            require_once($callback);
        } catch (Throwable $th) {
            //se c'è un errore, ad esempio il percorso non è valido, chiamo la pagina di errore 404
            require_once('./views/404.php');
        }

        exit();
    }
}
