<?php

// Constantele
define('APP_PATH', 'Magia_Romaniei/');
define('MODELS', 'MODELS/');
define('VIEWS', 'VIEWS/');
define('CONTROLLERS', 'CONTROLLERS/');

// Autoloader ul pentru clase
spl_autoload_register(function($className) {
    $relPath = '';
    $class = strtolower($className);
    if(substr_count($class, 'controller')) $relPath = CONTROLLERS;
    if(substr_count($class, 'model')) $relPath = MODELS;
    if(substr_count($class, 'view')) $relPath = VIEWS;

    // calea de cautare a fisierului
    if($relPath == '') die ('Invalid PATH!');
    $filePath = APP_PATH . $relPath . $className . '.php';

    if (file_exists($filePath)) {
        require_once $filePath;
    } else die ("File not found!! - $filePath");
});
