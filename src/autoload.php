<?php

spl_autoload_register(function ($fqn){
    $rootPath = __DIR__;
    $relativePath = str_replace('\\', DIRECTORY_SEPARATOR, $fqn);
    $fileExtension = '.php';

    $fullPath = $rootPath . DIRECTORY_SEPARATOR . $relativePath . $fileExtension;
    if(!file_exists($fullPath)) {
        echo 'file for ' . $fqn . ' not found';
        die(42);
    }
    include $fullPath;
});
