<?php
require_once('router.php');

function getSubDir()
{
    $dir = explode('\\', __DIR__);
    // var_dump($dir);
    $root = explode('/', $_SERVER['DOCUMENT_ROOT']);
    $root = $root[sizeof($root)-1];
    $key = array_search($root, $dir);
    return join("/", array_slice($dir, $key + 1));
}

$router = new Router();

$subdir = getSubDir();
// echo $subdir . '<br>';
// $router->addRoute("/", "./pagine/home.php");
$router->addRoute("$subdir", function () {
    header('location: home');
});
$router->addRoute("$subdir/home", "./pagine/home.php");
$router->addRoute("$subdir/redazione", "./pagine/redazione.php");
$router->addRoute("$subdir/redattore", "./pagine/redattore.php");
$router->addRoute("$subdir/login", "./pagine/login.php");
$router->addRoute("$subdir/logout", "./pagine/logout.php");
$router->addRoute("$subdir/news", "./pagine/nuoviarticoli.php");




$router->addRoute("$subdir/argomento/(.+)", function ($argomento) {
    require_once("./pagine/argomento.php");
});

$router->addRoute("$subdir/articolo/(.+)", function ($cod) {
    require_once("./pagine/articolo.php");
});

$router->addRoute("$subdir/membro/(.+)", function ($cod) {
    require_once("./pagine/membro.php");
});


$router->route($_SERVER['REQUEST_URI']);
