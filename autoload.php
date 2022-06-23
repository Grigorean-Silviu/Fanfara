<?php


spl_autoload_register('autoloader');

function autoloader($className) {
    $path = 'assets/js/'.$className.'.php';

    include_once $path;
}