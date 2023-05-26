<?php
//require dinamico dei file nella cartella classes
define("CLASS_DIR", "classes/");
set_include_path(__DIR__ . "/" . CLASS_DIR);
spl_autoload_register(function ($className) {
    $className = strtolower($className);
    $prefixes = array("class.php", "php", "inc.php");
    foreach ($prefixes as $prefix) {
        $valid = file_exists(get_include_path()."/".$className .".". $prefix);
        if($valid){
            require($className .".". $prefix);
            break;
        }
    }
});
