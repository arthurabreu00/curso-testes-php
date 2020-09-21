<?php

include_once 'autoloader.php';

foreach (new DirectoryIterator(__DIR__) as $file){
    $filename = $file->getFilename();
    if(substr($filename, -8) !== 'Test.php'){
        continue;
    }

    $className = substr($filename, 0 , -4);
    $testClass = new $className();

    $methods = get_class_methods($testClass);

    foreach ($methods as $method){
        $testClass->$method();
    }
}