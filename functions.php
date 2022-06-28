<?php

function autoLoad($class)
{
    $base_directory = __DIR__ . '/Classes/';
    $file = $base_directory . $class . '.php';
    
    if(file_exists($file)) {
      require $file;
    }
}
spl_autoload_register('autoLoad');

// spl_autoload_register(function ($class) {
//     $prefix = 'Classes\\';
//     $length = strlen($prefix);
//     $base_directory = __DIR__ . '/Classes/';
//     if (strncmp($prefix, $class, $length) !== 0) {
//         return;
//     }

//     $class_end = substr($class, $length);
//     $file = $base_directory . str_replace('\\', '/', $class_end) . '.php';

//     if (file_exists($file)) {
//         echo $file;
//     }
// });
