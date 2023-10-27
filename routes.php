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
$router->post("/api/author/{}", function ($codice) {
    require_once(APP_ROOT . "/api/author.php");
});

$router->post("/api/author", function ($codice) {
    $codice = $_POST['codice'];
    require_once(APP_ROOT . "/api/author.php");
});

$router->post("/api/search/{}", function ($keyword) {
    require_once("./api/search.php");
});


//route per gli hackerini
$router->any("/robots.txt", function () {
    echo "Hai rotto il cazzo uam <br>";
    echo "Daje Roma <br>";
    echo "(Cojone)<br>";

    function getIPAddress()
    {
        //whether ip is from the share internet  
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        //whether ip is from the proxy  
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        //whether ip is from the remote address  
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    $ip = getIPAddress();
    echo 'Is this you? ' . $ip . "<br>";
    $logger = new Logger();
    $logger->log("/robots.txt client ip: " . $ip);
});

$router->any("/.env", function () {
    echo "Bro non è in js <br>";
    echo "(Cojone)<br>";

    $ip = getIPAddress();
    echo 'Is this you? ' . $ip . "<br>";
    $logger = new Logger();
    $logger->log("/.env client ip: " . $ip);
});



// questa funzione smista le richieste HTTP
// vedere file router.php
$request = $_GET["route"];
if (empty($request)) $router->route("/home");
$router->route($request);
