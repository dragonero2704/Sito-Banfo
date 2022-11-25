<?php
require_once('helpers.php');

require_once('router.php');


// function getSubDir()
// {
//     $dir = explode('\\', __DIR__);
//     // var_dump($dir);
//     $root = explode('/', $_SERVER['DOCUMENT_ROOT']);
//     $root = $root[sizeof($root)-1];
//     $key = array_search($root, $dir);
//     return join("/", array_slice($dir, $key + 1));
// }

$router = new Router();

// echo $subdir . '<br>';
// $router->addRoute("/", "./pagine/home.php");
$router->addRoute('/', function () {
    header('location: home');
});
$router->addRoute("/home", "./pagine/home.php");
$router->addRoute("/redazione", "./pagine/redazione.php");
$router->addRoute("/redattore", "./pagine/redattore.php");
$router->addRoute("/login", "./pagine/login.php");
$router->addRoute("/logout", "./pagine/logout.php");
$router->addRoute("/news", "./pagine/nuoviarticoli.php");

$router->addRoute("/argomento/(.+)", function ($argomento) {
    require_once("./pagine/argomento.php");
});

$router->addRoute("/articolo/(.+)", function ($cod) {
    require_once("./pagine/articolo.php");
});

$router->addRoute("/membro/(.+)", function ($cod) {
    require_once("./pagine/membro.php");
});

// echo "Request URI: ".$_SERVER['REQUEST_URI'].'<br>';

$router->route($_SERVER['REQUEST_URI']);
