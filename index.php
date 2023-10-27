<?php
function getBaseHref()
{
    $baseHref = strchr($_SERVER['PHP_SELF'], basename($_SERVER["SCRIPT_FILENAME"]), true);
    return $baseHref;
}
// echo "index called";
define("BASEHREF", getBaseHref());
require_once("config.php");
//autoloader definition
require_once('autoloader.php');
//routes
require_once('routes.php');
