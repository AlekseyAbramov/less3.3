<?php
        
function myAutoload($file) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    $path = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR. 'less3.3'. DIRECTORY_SEPARATOR. 'libs';
    $filepath = $path . DIRECTORY_SEPARATOR . $file . '.php';
    if (file_exists($filepath)) {
        require_once($filepath);
    } else {
        echo 'Файл класса '. $file. '.php не найден';
        die();
    }
}

