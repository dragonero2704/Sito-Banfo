<?php
function getBaseHref()
{
    $baseHref = strchr($_SERVER['PHP_SELF'], basename($_SERVER["SCRIPT_FILENAME"]), true);
    // echo 'BaseHref: '.$baseHref;
    return $baseHref;
}

define("BASEHREF", getBaseHref());
