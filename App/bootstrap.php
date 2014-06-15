<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

define("DOCROOT", realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);

function __autoload($class_name) {
    $directories = array(
        DOCROOT . "Classes/Controller/",
        DOCROOT . "Classes/Model/"
    );

    foreach ($directories as $directory) {
        if (file_exists($directory . $class_name . '.php')) {
            require_once($directory . $class_name . '.php');
        }
    }
}
