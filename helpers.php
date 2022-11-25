<?php
function getSubDir()
{
    $dir = explode('\\', __DIR__);
    // var_dump($dir);
    $root = explode('/', $_SERVER['DOCUMENT_ROOT']);
    $root = $root[sizeof($root) - 1];
    $key = array_search($root, $dir);
    if($key == sizeof($dir)) return "";
    return join("/", array_slice($dir, $key + 1));
}

function getSubDirSlash(){
    $sub = getSubDir();
    if(!empty($sub)) return '/'.$sub;
    else return "";
}

define("SUBDIRSLASH", getSubDirSlash());
define("SUBDIR", getSubDir());