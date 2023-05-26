<?php
function getBaseHref()
{
    $baseHref = strchr($_SERVER['PHP_SELF'], basename($_SERVER["SCRIPT_FILENAME"]), true);
    return $baseHref;
}

define("BASEHREF", getBaseHref());
    //autoloader definition
    require_once('autoloader.php');
    //routes
    require_once('routes.php');
