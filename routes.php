<?php
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

//api routes
$router->any("/api/author/{}", function($codice){
    $_GET['q'] = $codice;
    require_once("./api/author.php");
});

$router->post("/api/search/{}", function($keyword){
    require_once("./api/search.php");
});

// questa funzione smista le richieste HTTP
// vedere file router.php
// echo $_SERVER['REQUEST_URI'];
$router->route($_SERVER['REQUEST_URI']);
