<?php
function getBaseHref()
{
    $baseHref = strchr($_SERVER['PHP_SELF'], basename($_SERVER["SCRIPT_FILENAME"]), true);
    return $baseHref;
}

define("BASEHREF", getBaseHref());
// require_once('router.php');

$router = new Router();

$router->any('/', "./pagine/home.php");
$router->any("/home", "./pagine/home.php");
$router->any("/redazione", "./pagine/redazione.php");
$router->any("/redattore", "./pagine/redattore.php");
$router->any("/login", "./pagine/login.php");
$router->any("/logout", "./pagine/logout.php");
$router->any("/news", "./pagine/nuoviarticoli.php");

$router->any("/argomento/{}", function ($argomento) {
    require_once("./pagine/argomento.php");
});

$router->any("/articolo/{}", function ($cod) {
    require_once("./pagine/articolo.php");
});

$router->any("/membro/{}", function ($cod) {
    require_once("./pagine/membro.php");
});

// questa funzione smista le richieste HTTP
// vedere file router.php
$router->route($_SERVER['REQUEST_URI']);
